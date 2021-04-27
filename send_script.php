<?php
// // echo htmlspecialchars($_SERVER["PHP_SELF"]);
//include("upload.php");

//VARIANTA 1
// if (isset($_POST['send_message_btn'])) {

//   $to = 'raluux007@gmail.com';                 // Adresa unde va fi trimis mesajul
//   $subiect = 'Mesaj de pe site';
//   $name = $_POST['name'];
//   $pren = $_POST['pren'];
//   $email = $_POST['email'];
//   $telefon = $_POST['telefon'];
//   $adresa = $_POST['adresa'];
//   $judet = $_POST['judet'];
//   $localitate = $_POST['localitate'];
//   $codp = $_POST['codp'];
//   $msg = $_POST['msg'];
//   // Content-Type helps email client to parse file as HTML 
//   // therefore retaining styles
//   $headers =  'MIME-Version: 1.0' . "\r\n";
//   $headers .= 'From:  raluux007@gmail.com' . "\r\n";
//   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


//   // $headers = "MIME-Version: 1.0" . "\r\n";
//   // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//   $message = "<html>
//   <head>
//   	<title>New message from website contact form</title>
//   </head>
//   <body>
//   <h1>" . $subiect . "</h1>
//   	<p>" . $msg . "</p>
//   </body>
//   </html>";
//   if (mail($to, $subiect, $message, $headers)) {
//     include("mesaj.php");
//   } else {
//     echo "Failed to send email. Please try again later";
//   }
// }
//VARIANTA 2
// if (isset($_POST['email']) && isset($_POST['mesaj'])) {
//   $to = 'raluux007@gmail.com';                 // Adresa unde va fi trimis mesajul
//   $subiect = 'Mesaj de pe site';
//   $mesaj = $_POST['mesaj'];
//   $from = 'From: '. $_POST['email'];
//   header("Location: mailto:raluux007@gmail.com");

//   // PHP trimite datele la serverul de e-mail
//   if (mail($to, $subiect, $mesaj, $from)) {
//     echo 'Mesajul a fost trimis cu succes.';
//   }
//   else {
//     echo 'Eroare, mesajul nu a putut fi expediat.';
//   }
// }
//VARIANTA FUNCTIONALA
//header("Location: mailto:raluux007@gmail.com");
//VARIANTA CU TABEL BAZA DATE

?>
