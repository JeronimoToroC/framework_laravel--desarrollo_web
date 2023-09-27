<?php
include_once "vendor/autoload.php";

use App\Models\IMCCalculator;
use App\Models\DateCalculator;
use Dompdf\Dompdf;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$onSubmit = "";
if (isset($_POST["onSubmit"])) $onSubmit = $_POST["onSubmit"];

if ($onSubmit) {
}
$user = new IMCCalculator($_POST["weight"], $_POST["height"], $_POST["name"], $_POST["lastname"]);
$dates = new DateCalculator($_POST["startDate"], $_POST["endDate"]);
$html = "<!DOCTYPE html>
  <html>
  <head>
      <title>Índice de Masa Corporal</title>
  </head>
  <body>
      <h1>El índice de masa corporal de {$user->getName()} {$user->getlastname()} en {$dates->daysDifference($dates->getStartDate(),$dates->getEndDate())} días fue de {$user->calculate()}</h1>

  </body>
  </html>";
$dompdf = new Dompdf();
$dompdf->loadhtml($html);
$dompdf->render();
$dompdf->stream("documento.pdf", array("Attachment" => "0"));
$mail = new PHPMailer(true);
try {
  //Server settings
  $mail->SMTPDebug = 2;
  $mail->isSMTP();
  $mail->Host       = 'smtp.gmail.com';
  $mail->SMTPAuth   = true;
  $mail->Username   = 'jeronimo.1701921567@ucaldas.edu.co';
  $mail->Password   = 'gbthbnleptakjcrd';
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
  $mail->Port       = 465;

  //Recipients
  $mail->setFrom('jeronimo.1701921567@ucaldas.edu.co');
  $mail->addAddress('jeronimo.1701921567@ucaldas.edu.co');

  //Content
  $mail->isHTML(true);
  $mail->Subject = 'Email autogenerado';
  $mail->Body    = '$html';

  $mail->send();
  echo 'Message has been sent';
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
