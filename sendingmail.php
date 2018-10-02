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

echo $template1;
?>