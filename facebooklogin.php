<html>
<head>
<title></title>
</head>
<body>
<?php
session_start();

 include("Facebook/autoload.php");



$fb = new Facebook\Facebook([
  'app_id' => '1550181251959634',
  'app_secret' => '18d8107f76df13866c1b431be2221983',
  'default_graph_version' => 'v2.5',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/demoproject/facebooklogincallback.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';

// $fb = new Facebook\Facebook([
//   'app_id' => '{app-id}',
//   'app_secret' => '{app-secret}',
//   'default_graph_version' => 'v2.5',
//   ]);

// $helper = $fb->getRedirectLoginHelper();
    print_r($_SESSION);
?>

</body>

</html>