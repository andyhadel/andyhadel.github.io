<!DOCTYPE html>
<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css">

<title>mailform</title>
</head>

<body>

mailform Happy.<br>
<a href="index.html">page1</a>
<a href="second.html">page2</a>
<a href="mailformExtra.php">eMail</a>
<br><br>
<?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  $email = $_REQUEST['email'] ;
  $telephone = $_REQUEST['telephone'] ;
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ;
  mail("ahadel@ramapo.edu", "Subject: $subject",
  "TEL: $telephone \n \n $message", "From: $email");
  echo "Thanks and back at you soon";
  }
else
//if "email" is not filled out, display the form
  {
  echo "<form method='post' action='mailformExtra.php'>
  Email: <input name='email' type='text' /><br />
  Telephone: <input name='telephone' type='text' /><br /><br />
  Subject: <input name='subject' type='text' /><br />
  Message:<br />
  <textarea name='message' rows='15' cols='40'>
  </textarea><br />
  <input type='submit' />
  </form>";
  }
?>

</body>
<html>