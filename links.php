<?php
$form-floating-1 = $_POST['form-floating-1'];
$form-floating-2 = $_POST['form-floating-2'];
$form-floating-3 = $_POST['form-floating-3'];
$form-floating-4 = $_POST['form-floating-4'];

$to = "gorishi723@gmail.com";
$subject = "Mail From codeconia";
$txt = "form-floating-1 = ". $form-floating-1 . "\r\nform-floating-2 = " . $form-floating-2 . "\r\nform-floating-3 = ". $form-floating-3 . "\r\nform-floating-4 = ". $form-floating-4;

$headres = "Form: noreply@codeconia.com" . "\r\n".
"CC: somebodyelse@example.com";
if($email!=NULL){
  mail($to,$subject,$txt,$headers);
}
header("Location:thankyou.html");




  // $links = array(
  //   'js' => 'lib/waypoints/waypoints.min.js'
  // );

?>
