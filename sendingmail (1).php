<?php


if(isset($_GET['fullname']))
 {
    echo "<script>alert('klklk')</script>";

    
 }

$variables = array();

$variables['name'] = $_GET['fullname'];
$variables['email'] = $_GET['email'];
$variables['phone'] = $_GET['mobile'];
$variables['gender'] = $_GET['gender'];
$variables['age'] = $_GET['age'];
$variables['bloodgroup'] = $_GET['bloodgroup'];
$variables['place'] = $_GET['place'];
$variables['lastdate'] = $_GET['lastdate'];





$template = file_get_contents("mails/adminBloodReq.html");
//$template = "<html><body>{name}</body></html>";

foreach($variables as $key => $value)
{
    $template = str_replace('{'.$key.'}', $value, $template);
}

//echo $template;

$template1 = file_get_contents("mails/bloodReqUser.html");
$template1 = str_replace('{name}', $variables['name'], $template1);

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

if(mail($variables['email'],'no subject',$template1,$headers))
{
  mail('theja.gatla@gmail.com','no subject',$template,$headers);
  echo "<script>alert('Thanks for Giving blood Request <br> If we need help our team will get back to you...!')</script>";
  echo "<script>window.location.href = 'http://mmhhfoundation.com'</script>";


}

//echo $template1;

?>