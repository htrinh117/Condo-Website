<?php
session_start();
require_once 'user.php';
$user = new USER();

 $email = $_POST['email'];
 $stmt = $user->runQuery("SELECT * FROM user WHERE email=:email LIMIT 1");
 $stmt->execute(array(":email"=>$email));
 $row = $stmt->fetch(PDO::FETCH_ASSOC); 
 if($stmt->rowCount() == 1)
 {
  $id = $row['userid'];
  
  $message= "
  
  <html>
<head>
  <title>Reset Password</title>
</head>
<body>
       <p>Hello ,</p> $email
      <p> We got requested to reset your password, if you do this then just click the following link to reset your password, if not just ignore this email,</p>
       <p>Click Following Link To Reset Your Password </p>
       <a href='https://tscc2316.000webhostapp.com/resetPassword.html?id=$id'>click here to reset your password</a>
       <p>thank you :)</p>
       </body>
</html>
       ";
  $subject = "Password Reset";
  
  if($user->send_mail($email,$message,$subject))
      header("Location: presetsuccess.html");
 }
 else
 {
      header("Location: emailVerify.html?errorMessage=Email is not exist");
     
 }

?>