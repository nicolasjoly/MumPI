<?php
// Syntax: settingname = value
// // for comments
// whitespaces before and after key or value (line or =) will be ignored
// 1 for true, 0 for false

// Debug? - This should be turned off for production sites.
$debug = false;

// allow freely calling data for a web serverviewer? http://mumble.sourceforge.net/Channel_Viewer_Protocol
// it can be called via URL pointed to the main dir (where this settings file is located) + ?view=json&serverId=1
$allowChannelViewerWebservice = true;
// This is recommended to be true to prevent spam/abuse by bots etc. This requires the php gd extension (image manipulation). The captcha is used for user-registration.
$useCaptcha = true;
// Show a link to the admin section in the user section?
$showAdminLink = true;
// currently available: en, de ; en is recommended
$defaultLanguage = 'en';
// only “default” right now
$theme	= 'default';

// Interface to use. Currently available: ice
$dbInterface_type		= 'ice';
$dbInterface_address	= 'Meta:tcp -h 127.0.0.1 -p 6502';
// if you set an icesecret password in your murmur.ini file, specify it here
$dbInterface_icesecrets = array(
    // for 1.2.2 if you set “icesecret” set “secret” to your value.
    // for versions later than 1.2.2 (currently only snapshots/self-builds) your “icesecretread” and/or “icesecretwrite” will be specified only as secret here.
    //   This means you can only use one value for both (this was tested on snapshot 02071e), not different values for them. (Still, no value + one value is ok.)
    'secret' => '',
  );

// db type for Interface functionality
// (does not have anything to do with mumble/murmur)
// specify one of the following: filesystem
// later, the following will be implemented:
$dbType		= 'filesystem';

$site_title = 'Mumble Interface';
$site_description='Mumble Interface to register on a mumble server and edit your account as well as upload a user-texture for the overlay.';
$site_keywords='mumble,murmur,web-interface,registration,account,management,voip,kcode';

// For the interface to be able to send emails, make sure your php is set up
//   to be able to send mails correctly. If it does not work or you want to use
//   different settings from the default ones for this interface,
//   set the corresponding following values (uncomment them):
// Windows:
//ini_set('SMTP', '');				// e.g. localhost or smtp.sample.com	// Windows only setting
//ini_set('smtp_port', '');			// 										// Windows only
//ini_set('sendmail_from', '');		// e.g. admin@yourdomain.com			// Windows only
// Linux/Unix:
//ini_set('sendmail_path', '');		// Path to sendmail program, see http://php.net/manual/en/mail.configuration.php#ini.sendmail-path

// The server configuration can also be done from the Admin Section of the interface.
//   No need to do it here.
// If you disallow login and registration, the server will only be viewable in the admin section of the interface.
//   Allowing one of them will display it on the corresponding page.
// For Each Server set:
//$servers[<serverid>]['name']              = '<server name in the interface>';
//$servers[<serverid>]['allowlogin']        = true;
//$servers[<serverid>]['allowregistration'] = true;
//$servers[<serverid>]['forcemail']         = false;
//$servers[<serverid>]['authbymail']        = false;
// <serverid> is the virtual servers ID, the default server ID (first server of process) is 1
// forceemail: force to enter a mail address. This is always true if authbymail is true.
// authbymail: account has to be activated with a code sent to the mail address
$servers = array();

$servers[1]['name'] = 'my server';
$servers[1]['allowlogin'] = true;
$servers[1]['allowregistration'] = true;
$servers[1]['forcemail'] = true;
$servers[1]['authbymail'] = false;

$servers[2]['name'] = 'my private server';
$servers[2]['allowlogin'] = true;
$servers[2]['allowregistration'] = false;
$servers[2]['forcemail'] = true;
$servers[2]['authbymail'] = true;

?>