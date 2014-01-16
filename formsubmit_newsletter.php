<?php
// subject of the email to be sent.
// set the default subject here
// if there is a <input type="hidden" name="subject" value="My Custom Subject"> this will be used instead
$default_subject = "Schedule Appointment"; 
$email_title = "Schedule Appointment";
// the to, cc, and bcc email addresses.
// seperate them by commas if you want to use multiple
$to="bullcityveterinaryhospital@gmail.com"; //change this to your email
//$cc="info@youremail.com";
//$bcc="info@youremail.com";
// the default redirect.
// if you set <input type="hidden" name="redirect" value="foo.htm"> it will override this
$redirect = "thank_you.php";
// required form fields, if any of these are missing then the
// form will not submit and an error message will be shown.
// set <input type="hidden" name="required" value="field1,field2,field3"> to override these
$required = array(
        "date",
        "name",
        "time",
        "phone",
);
// these are the fields to ignore in the email that comes through
$ignorefields = array(
    "submit",
    "message",
    "petname",
    "redirect",
    "subject",
    "email_to",
    "required",
	
);

function f_safe_string($s){
    return preg_replace( '((?:\n|\r|\t|%0A|%0D|%08|%09)+)i' , '', $s);
}
// the default from email address that this form gets sent from.
// if the user specifies a "name" or "email" field then this will be used instead.
if($_REQUEST['name'] && $_REQUEST['date']){
    $from = f_safe_string($_REQUEST['name']) . " <".f_safe_string($_REQUEST['date']).">";
}else{
    $from="Contact Website <info@".$_SERVER['HTTP_HOST'].">";
}

if($to == 'example@example.com'){
	$to = 'info@'.$_SERVER['HTTP_HOST'];
}
// this part checks for required fields:
$missing = array();
if(isset($_REQUEST['required']) && strlen($_REQUEST['required'])){
    $required = array();
    foreach(explode(",",$_REQUEST['required']) as $field){
        if(trim($field)){
            $required [] = trim($field);
        }
    }
}
foreach($required as $req){
    if(!$_REQUEST[$req]){
        $missing [] = $req;
    }
}
// this is the error message that gets displayed 
// when they dont fill in all their required fields, wrap your design around this.
if(count($missing)){ 
	include("formsubmit_error.php");
    die();
	exit;
}
if($_REQUEST['subject'])$subject = f_safe_string($_REQUEST['subject']);
else $subject = $default_subject;
$boundary='--' . md5( uniqid("formsubmit_boundary") );
$charset="iso-8859-1";
$ctencoding="8bit";
$sep= chr(13) . chr(10);
$disposition="inline";
$header.="From: $from\n";
if($cc)$header.="CC: $cc\n";
if($bcc)$header.="BCC: $bcc\n";
$header.="Mime-Version: 1.0\nContent-Type: multipart/mixed;\n boundary=\"$boundary\"\n";
$header.="Content-Transfer-Encoding: $ctencoding\nX-Mailer: Php/libMailv1.3\r\n\r\n";
// build the message
$message = "This is a multi-part message in MIME format.\n--$boundary\n";
$message .= "Content-Type: text/html; charset=$charset\n";
$message .= "Content-Transfer-Encoding: $ctencoding\n\n";
$message .= "<h2>$email_title:</h2>";
$message .= '<table width="100%">';
foreach($_POST as $pkey => $value){
    if((!in_array(strtolower($pkey),$ignorefields))){
    	$key = '';
    	$val = '';
        if(is_array($value)){
            $key = ucwords(str_replace("_"," ",$pkey));
            foreach($value as $k=>$v){
                $val .= $k ." = " . $v . "<br>\n";
            }
        }else{
            $key = ucwords(str_replace("_"," ",$pkey));
            $val = $value . "\n";
        }
    	$message .= '<tr style="border-bottom:1px solid #CCCCCC;"><td width="180"><b>' . $key . ':</b></td><td>' . $val . '</td></tr>';
    }
}
$message .= '</table>';
$message .= "\n\n";


mail($to,$subject,$message,$header);
if(isset($_REQUEST['redirect'])){
    $redirect = $_REQUEST['redirect'];
}
header("Location: $redirect");
exit;
?>