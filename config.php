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
        'title'       => 'mi3DP branding',
        'description' => 'Branding Development of an icon and logotype as well as a family of sub brand graphics to accompany the company logo and icon for a startup I was involved in.',
        'link'        => 'https://www.behance.net/gallery/24946671/mi3DP',
        'link_text'   => 'See more on Behance',
        'image'       => 'img/mi3dp.png'
      ),
      array(
        'title'       => 'Mellow Mind package design',
        'description' => 'This pack was designed for a brief surrounding the idea of an existing Museum Victoria exhibition. I chose the exhibition on The Mind and circulated it around managing anxiety. The brief asked us to design the contents and graphics on an existing pack template.',
        'link'        => 'https://www.behance.net/gallery/21925379/Mellow-Mind',
        'link_text'   => 'See more on Behance',
        'image'       => 'img/mellow.png'
      ),
      array(
        'title'       => 'Power Parcel vector illustrations',
        'description' => 'Power Parcel is a quarterly box of social good, designed to help you discover emerging social enterprises and change instigators. Check it out on powerparcel.com.au',
        'link'        => 'https://www.behance.net/gallery/21925379/Mellow-Mind',
        'link_text'   => 'See more on Behance',
        'image'       => 'img/powerparcel.png'
      ),
      array(
        'title'       => "Ralph's branding",
        'description' => 'Re-brand Development of an icon and logotype as well as a family to accompany the brand image. The family consisted of a literal ‘family’ of other main figureheads of this real-life family-owned butcher in South Melbourne. These were then applied to promotional materials such as stationery and branded merchandise.',
        'link'        => 'https://www.behance.net/gallery/21925305/Ralphs-Meat-Company-Re-Brand',
        'link_text'   => 'See more on Behance',
        'image'       => 'img/ralphs.png'
      ),
      array(
        'title'       => 'Educational app interface',
        'description' => 'A recent university project for a subject based around info graphics and interfaces, designed for iPad.',
        'link'        => 'https://www.behance.net/gallery/16881991/The-Praying-Mantis-App-Interface-Design',
        'link_text'   => 'See more on Behance',
        'image'       => 'img/appinterface.png'
      ),
      array(
        'title'       => 'Storio - web interface',
        'description' => 'I created a solution to a faux community and story-telling website whereby the main aim was to be responsive to different devices and window sizes. My target market spanned from 14-18 years old and I was inspired by the colours used on Vine - the popular video sharing app - as well as the concept of websites such as HelloGiggles and Cowbird.',
        'link'        => 'https://www.behance.net/gallery/21925331/Storio-Responsive-Web-Design',
        'link_text'   => 'See more on Behance',
        'image'       => 'img/storio.png'
      ),
      array(
        'title'       => 'Sukin - advertisement posters',
        'description' => 'A socially responsible campaign to further align Sukin’s brand image through the simplicity of caring - whether it be the purpose of the product of skin ‘care’, or the fact they simply align themselves as an environmentally (and socially) conscious brand.',
        'link'        => 'https://www.behance.net/gallery/24953163/Sukin-We-Give-Back',
        'link_text'   => 'See more on Behance',
        'image'       => 'img/sukin.png'
      )
    )
  );
?>
