<?php
### Mail
$wgSMTP = [
    'host'     => 'smtp.office365.com', // could also be an IP address. Where the SMTP server is located. If using SSL or TLS, add the prefix "ssl://" or "tls://".
    'IDHost'   => 'smtp.office365.com',      // Generally this will be the domain name of your website (aka mywiki.org)
    'port'     => 587,                // Port to use when connecting to the SMTP server
    'auth'     => true,               // Should we use SMTP authentication (true or false)
    'username' => get_secret("mail_username"),     // Username to use for SMTP authentication (if being used)
    'password' => get_secret("mail_password")       // Password to use for SMTP authentication (if being used)
];

$wgPasswordSender = "admin@wiki.staedelschule.de"; // this also applies to other notifications
$wgEmergencyContact = "karl.kliem@staedelschule.de";
