<?php
require_once 'Mail.php';
require_once 'Mail/RFC822.php';
function send_email($to, $from, $subject, $body, $is_body_html = false) {
 $smtp = array();
 // **** You must change the following to match your
 // **** SMTP server and account information.
 $smtp['host'] = 'ssl://smtp.gmail.com';
 $smtp['port'] = 465;
 $smtp['auth'] = true;
 $smtp['username'] = 'phucnvhcntt@gmail.com';
 $smtp['password'] = 'tandaica123';
 $mailer = Mail::factory('smtp', $smtp);
 if (PEAR::isError($mailer)) {
 throw new Exception('Could not create mailer.');
 }
 // Add the email address to the list of all recipients
 $recipients = array();
 $recipients[] = $to;
 // Set the headers
 $headers = array();
 $headers['From'] = $from;
 $headers['To'] = $to;
 $headers['Subject'] = $subject;
 if ($is_body_html) {
 $headers['Content-type'] = 'text/html';
 }
 // Send the email
 $result = $mailer->send($recipients, $headers, $body);
 // Check the result and throw an error if one exists
 if (PEAR::isError($result)) {
 throw new Exception('Error sending email: ' .
 htmlspecialchars($result->getMessage()));
 }
}
$from = 'phucnvhcntt@gmail.com';
$to = $customer_address;
$subject = 'LIPTON Shop xin thông báo ';
$body = 'Cảm ơn quý khách đã mua hàng tại LIPTON shop, chúc quý khách một ngày vui vẻ. ';
try {
	send_email($to, $from, $subject, $body);
 echo "<h3>Đã gửi mail thanh toán thành công.</h3>";
} catch (Exception $exc) {
 echo '<h3>' . $exc->getMessage() . '</h3>';
}


