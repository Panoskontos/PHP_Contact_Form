<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
   

<div>
    <h1>Get in touch</h1>
    <p>Please fill in the fields</p>
    <form action="index.php" method="post">

        <input type="text" name="name" placeholder="Full name">
        <input type="email" name="email" placeholder="E-mail">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" placeholder="message" cols="30" rows="10"></textarea>
       
        <button type="submit" name="submit">SEND</button>
    </form>
</div>


<?php 
if (isset($_POST["submit"])){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);


    $mymail = "panos96el@gmail.com";
    $header = "From:" . $email;
    $message2 = "You have received a message from ". $name . ". \n\n";
    // we need a function called mail to send email
    // Where, Subject, Message 
    mail($mymail, $subject, $message2, $header);
    header("Location: index.php?mailsent");

}
?>





</body>


</html>




