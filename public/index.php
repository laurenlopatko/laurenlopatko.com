<?php

error_reporting(0);

include __DIR__.'/../config.php';

require_once __DIR__.'/../vendor/autoload.php';

use Silex\Provider\FormServiceProvider;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;

$app = new Silex\Application();

/* Turn on when in development */
$app['debug'] = $CONFIG['debug'];

$app->register(new Silex\Provider\TwigServiceProvider(), array(
  'twig.path' => __DIR__.'/../views',
));
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());
$app->register(new Silex\Provider\ValidatorServiceProvider());
$app->register(new Silex\Provider\TranslationServiceProvider(), array(
  'translator.domains' => array(),
));
$app->register(new FormServiceProvider());
$app->register(new Silex\Provider\SwiftmailerServiceProvider());

/* SMTP email settings */
$app['swiftmailer.options'] = $CONFIG['smtp'];

var_dump($CONFIG['smtp']);exit;

$app->before(function ($request) use ($app) {
  $app['twig']->addGlobal('active', $request->get("_route"));
});

/* The front page */
$app->get('/', function() use($app) {
  return $app['twig']->render('index.twig.html');
})->bind('home');

/* The about page */
$app->get('/about', function() use($app) {
  return $app['twig']->render('about.twig.html');
})->bind('about');

/* The projects page */
$app->get('/projects', function() use($app, $CONFIG) {
  return $app['twig']->render('projects.twig.html', array(
    'projects' => $CONFIG['projects']
  ));
})->bind('projects');

/* The contact page */
$app->match('/contact', function(Request $request) use ($app, $CONFIG) {
  $sent = false;

  $default = array(
		'name'    => '',
		'email'   => '',
    'phone'   => NULL,
    'budget'  => '',
		'message' => '',
	);

  $form = $app['form.factory']->createBuilder('form', $default)
		->add('name', 'text', array(
			'constraints' => array(new Assert\NotBlank(), new Assert\Length(array('min' => 1, 'max' => 100))),
			'attr' => array('class' => 'user')
		))
		->add('email', 'email', array(
			'constraints' => array(new Assert\NotBlank(), new Assert\Email()),
			'attr' => array('class' => 'email')
		))
    ->add('phone', 'number', array(
      'attr' => array('class' => 'phone'),
      'required' => false
    ))
    ->add('link', 'text', array(
      'constraints' => new Assert\Blank(),
      'attr' => array('class' => 'link'),
      'required' => false
    ))
		->add('budget', 'text', array(
			'constraints' => new Assert\NotBlank(),
			'attr' => array('class' => 'budget', 'readonly' => 'readonly')
		))
    ->add('message', 'textarea', array(
      'constraints' => array(new Assert\NotBlank(), new Assert\Length(array('min' => 6, 'max' => 300))),
      'attr' => array('class' => 'message', 'placeholder' => "Need your idea visualised? Let's talk. Detail any important specifics to the project too if you can including a background and deadlines.")
    ))
		->add('send', 'submit')
		->getForm();

  $formView = $form->createView();
	$form->handleRequest($request);

  if($form->isValid()){
    $data = $form->getData();

    $messageBody = $app['twig']->render('email.twig.html', array(
      'data' => $data
    ));
    $message = \Swift_Message::newInstance()
    		->setSubject('Someone said hello!')
    		->setFrom(array($CONFIG['sendTo'] => 'Lauren Lopatko site'))
        ->setReplyTo(array($data['email'] => $data['name']))
    		->setTo(array($CONFIG['sendTo']))
    		->setBody($messageBody, 'text/html');

    var_dump($app['mailer']);
    var_dump($app['mailer']->send($message));
    exit;
//    $app['mailer']->send($message);
    $sent = true;
  } else {
    // Display dirty form
    $formView = $form->createView();
  }

  return $app['twig']->render('contact.twig.html', array(
    'form'    => $formView,
    'sent'    => $sent
  ));
})->bind('contact');

$app->run();

?>
