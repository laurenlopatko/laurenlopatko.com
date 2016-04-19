<?php

  var_dump($_ENV);exit;

  $CONFIG = array(
    // Turn on when in development
    'debug'       => false,

    'smtp'        => array(
      // SMTP host server
      'host'        => 'smtp.gmail.com',

      // SMTP port
      'port'        => 465,

      // SMTP username
      'username'    => 'you@email.com',

      // SMTP password
      'password'    => 'password',

      // SMTP encryption
      'encryption'  => 'ssl',

      // SMTP auth mode
      'auth_mode'   => 'login'
    ),

    // Contact form destination email
    'sendTo'      => 'vl.lapikov@gmail.com',

    // Projects page items
    'projects'    => array(
      array(
        'title'       => 'mi3DP',
        'description' => 'Branding Development of an icon and logotype as well as a family of sub brand graphics to accompany the company logo and icon for a startup I was involved in.',
        'link'        => 'https://www.behance.net/gallery/24946671/mi3DP">',
        'link_text'   => 'See more on Behance',
        'image'       => 'img/mi3dp.png'
      ),
      array(
        'title'       => 'Mellow Minds',
        'description' => 'This pack was designed for a brief surrounding the idea of an existing Museum Victoria exhibition. I chose the exhibition on The Mind and circulated it around managing anxiety. The brief asked us to design the contents and graphics on an existing pack template.',
        'link'        => 'https://www.behance.net/gallery/24946671/mi3DP',
        'link_text'   => 'See more on Behance',
        'image'       => 'img/mellow.png'
      ),
      array(
        'title'       => "Ralph's",
        'description' => 'Re-brand Development of an icon and logotype as well as a family to accompany the brand image. The family consisted of a literal ‘family’ of other main figureheads of this real-life family-owned butcher in South Melbourne. These were then applied to promotional materials such as stationery and branded merchandise.',
        'link'        => 'https://www.behance.net/gallery/21925305/Ralphs-Meat-Company-Re-Brand',
        'link_text'   => 'See more on Behance',
        'image'       => 'img/ralphs.png'
      ),
      array(
        'title'       => 'App Interface',
        'description' => 'A recent university project for a subject based around info graphics and interfaces, designed for iPad.',
        'link'        => 'https://www.behance.net/gallery/16881991/The-Praying-Mantis-App-Interface-Design',
        'link_text'   => 'See more on Behance',
        'image'       => 'img/appinterface.png'
      ),
      array(
        'title'       => 'Storio',
        'description' => 'I created a solution to a faux community and story-telling website whereby the main aim was to be responsive to different devices and window sizes. My target market spanned from 14-18 years old and I was inspired by the colours used on Vine - the popular video sharing app - as well as the concept of websites such as HelloGiggles and Cowbird.',
        'link'        => 'https://www.behance.net/gallery/21925331/Storio-Responsive-Web-Design',
        'link_text'   => 'See more on Behance',
        'image'       => 'img/storio.png'
      ),
      array(
        'title'       => 'Sukin',
        'description' => 'A socially responsible campaign to further align Sukin’s brand image through the simplicity of caring - whether it be the purpose of the product of skin ‘care’, or the fact they simply align themselves as an environmentally (and socially) conscious brand.',
        'link'        => 'https://www.behance.net/gallery/24953163/Sukin-We-Give-Back',
        'link_text'   => 'See more on Behance',
        'image'       => 'img/sukin.png'
      )
    )
  );

?>
