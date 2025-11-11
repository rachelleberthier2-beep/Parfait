<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
    'name' => 'required|string',
    'email' => 'required|email',
    'subject' => 'required|string',
    'message' => 'required|string',
]);

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'parfaitdavilla04@gmail.com'; // ton adresse Gmail
    $mail->Password = 'ldsh ighx vpnn smum'; // mot de passe d'application
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // 🔹 L'adresse d'envoi reste ton adresse Gmail
    $mail->setFrom('parfaitdavilla04@gmail.com', 'Formulaire du site');

    // 🔹 Mais quand tu réponds, ça répondra au visiteur
    $mail->addReplyTo($request->email, $request->name);

    // 🔹 Adresse de réception (toi)
    $mail->addAddress('parfaitdavilla04@gmail.com', 'Tozo Parfait');

    $mail->isHTML(true);
    $mail->Subject = $request->subject;
    $mail->Body    = "
        <strong>Nom :</strong> {$request->name}<br>
        <strong>Email :</strong> {$request->email}<br><br>
        <strong>Message :</strong><br>" . nl2br(e($request->message));

    $mail->send();

    return back()->with('success', 'Message envoyé avec succès !');
} catch (Exception $e) {
    return back()->with('error', "Erreur lors de l'envoi : {$mail->ErrorInfo}");
}
}
}
