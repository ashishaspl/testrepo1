<?php
$to ="waxoge7304@sesxe.com";
$subject = "test mail";
$message ="hey..this is a test mail";
$from = "homaw41056@ipnuc.com";
$headers ="From : $from";

 mail($to, $subject ,$message ,$headers);
if (mail($to, $subject ,$message ,$headers) == true)
{
    echo "mail sent";
}
else{
    echo "mail not send";
}
