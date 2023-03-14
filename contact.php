<?php
$field_name = $_POST['Name'];
$field_email = $_POST['E-Mail'];
$field_message = $_POST['Message'];
$field_subject = $_POST['Subject'];


$mail_to = 'mr0088@mix.wvu.edu';
$subject = 'Message from .$field_name';

$body_message = 'From: .$field_name."\r\n"';
$body_message .= 'E-mail: .$field_email."\r\n"';
$body_message .= 'Subject: .$field_subject."\r\n"';
$body_message .= 'Message: .$field_message."\r\n"';

$mail_status = mail($mail_to, $subject, $body_message);

if ($mail_status) { ?>
  <script language="javascript" type="text/javascript">
  alert('Thank you! Your message has been sent.');
  window.location = 'contact.html';
  </script>


  <?php
}

else { ?>
  <script language="javascript" type="text/javascript">
  alert('Something went wrong sending your message. Please try again later.');
  window.location = 'contact.html';
  </script>

<?php
}
?>
