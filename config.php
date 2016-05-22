<?php
  $CONFIG = array(
    // Turn on when in development
    'debug'       => false,
    'smtp'        => array(
      // SMTP host server
      'host'        => $_ENV['MAILGUN_SMTP_SERVER'],
      // SMTP port
      'port'        => $_ENV['MAILGUN_SMTP_PORT'],
      // SMTP username
      'username'    => $_ENV['MAILGUN_SMTP_LOGIN'],
      // SMTP password
      'password'    => $_ENV['MAILGUN_SMTP_PASSWORD'],
      // SMTP encryption
      'encryption'  => 'tls',
      // SMTP auth mode
      'auth_mode'   => 'plain'
    ),
    // Contact form destination email
    'sendTo'      => 'hello@laurenlopatko.com.au',
    // Projects page items
    'projects'    => array(
      array(
        'title'       => 'Various illustration work',
        'description' => 'Various digital vectors from a personal project whereby I created something everyday for 100 days. Check out the whole story on instagram.com/laurenlopatko',
        'link'        => 'https://www.behance.net/gallery/28170855/Iconic-Buildings',
        'link_text'   => 'See more on Behance',
        'image'       => 'img/building.png'
      ),
      array(
        'title'       => 'mi3DP',
        'description' => 'Branding Development of an icon and logotype as well as a family of sub brand graphics to accompany the company logo and icon for a startup I was involved in.',
        'link'        => 'https://www.behance.net/gallery/24946671/mi3DP',
        'link_text'   => 'See more on Behance',
        'image'       => 'img/mi3dp.png'
      ),
      array(
        'title'       => 'Power Parcel',
        'description' => 'Power Parcel is a quarterly box of social good, designed to help you discover emerging social enterprises and change instigators. Check it out on powerparcel.com.au',
        'link'        => 'https://www.behance.net/gallery/37461747/Power-Parcel?',
        'link_text'   => 'See more on Behance',
        'image'       => 'img/powerparcel.png'
      ),
      array(
        'title'       => 'Storio',
        'description' => 'I created a solution to a faux community and story-telling website whereby the main aim was to be responsive to different devices and window sizes. My target market spanned from 14-18 years old and I was inspired by the colours used on Vine - the popular video sharing app - as well as the concept of websites such as HelloGiggles and Cowbird.',
        'link'        => 'https://www.behance.net/gallery/21925331/Storio-Responsive-Web-Design',
        'link_text'   => 'See more on Behance',
        'image'       => 'img/storio.png'
      ),
      array(
        'title'       => 'Travel illustration series - Asia, the letter H',
        'description' => 'As part of my 100 day project as seen on instagram.com/laurenlopatko, I found myself not only travelling to places coincedentally all with the letter H, but also finding myself incredibly inspired to make some quality designs.',
        'link'        => 'https://www.behance.net/gallery/37468347/Asian-travel-series-the-letter-H?',
        'link_text'   => 'See more on Behance',
        'image'       => 'img/ramen.png'
      ),
      array(
        'title'       => 'Weather App Interface',
        'description' => 'University project at Swinburne University, 2014. We were to create a realistic and believable interface  design for a hypothetical app that was to be as user friendly as possible. It needed to contain obvious tap points as well as obvious navigation tools.',
        'link'        => 'https://www.behance.net/gallery/16882331/Weather-App-Interface-Design',
        'link_text'   => 'See more on Behance',
        'image'       => 'img/weather.png'
      )
    )
  );
?>
