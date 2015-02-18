<?php
$EmailFrom = "david.shepherd@lightstream-i.com";
$EmailTo = "davidshepherd@me.com";
$Subject = "Lightstream Contact";
$Name = Trim($_POST[Name]); 
$Email = Trim($_POST[Email]); 
$Budget = Trim($_POST[Budget]); 
$Phone = Trim($_POST[Phone]); 
$Details = Trim($_POST[Details]); 


// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= "$Name";
$Body .= "\n";
$Body .= "Email: ";
$Body .= "$Email";
$Body .= "\n";
$Body .= "Budget: ";
$Body .= "$Budget";
$Body .= "\n";
$Body .= "Phone: ";
$Body .= "$Phone";
$Body .= "\n";
$Body .= "Details: ";
$Body .= "$Details";
$Body .= "\n";


//if ((!$FirstName) || (!$Surname) || (!$Email) || (!is_numeric($Telephone)) || (strlen($Telephone) < 11))
//{ 
//    print "<meta http-equiv=\"refresh\" content=\"0;URL=response/index.php\">"; 
//} else {
    $success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
//}


// redirect to success page 
if ($success){
  //print "<meta http-equiv=\"refresh\" content=\"0;URL=thankyou\">";
  header('Location: thankyou'); 
}
else{
  //print "<meta http-equiv=\"refresh\" content=\"0;URL=error\">";
  header('Location: error'); 
}

?>