<?php

//    phpinfo();
    require '../vendor/autoload.php';
/*    $tring = 'Ma chaine de caractère';
    $integer = 10;
    $array = ['bibi', 'baba'];
    $array2 = [
            'title' => 'Mon livre',
            'author' => 'Gotlib'
    ];

    kint::dump($array2);
*/
//git remote add origin https://github.com/elrioche/php.git
    $transport = Swift_SmtpTransport::newInstance('mail.server.com', 1025);

    $mailer = Swift_Mailer::newInstance($transport);

    $message = Swift_Message::newInstance('Wonderful Subject')
    ->setFrom(array('john@doe.com' => 'John Doe'))
    ->setTo(array('receiver@domain.org', 'other@domain.org' => 'A name'))
    ->setBody('Here is the message itself')
    ;
    $result = $mailer->send($message);

?>
l


