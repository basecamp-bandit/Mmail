# Mmail
PHP script for sending emails
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

A simple script for sending PHP emails. To run the script simply type the name of the function along with the variables you'd like to pass. Will return a simple "form-success" on succesful send and "form-error" on failure. 

Syntax: send_email( $to, $from_email, $from_name, $subject, $message, $cc, $bcc, $copy_to_self )

$to - Who you want to send to. Accepts single or multiple values. Multiple values need to be seperated by commas (,)

$from_meail - The email you're sending from
$from_name - The name of the sender

$subject - Subject of the email

$message - Your message. Can include HTML if you desire.

$cc - Emails of who will recieve a CC of the email. Accepts single or multiple values. Multiple values need to be seperated by commas (,)

$bcc - Emails of who will recieve a BCC of the email. Accepts single or multiple values. Multiple values need to be seperated by commas (,)

$copy_to_self - If set to 'true' will BCC you a copy of the email.
