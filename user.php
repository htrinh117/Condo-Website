<?php
require_once 'dbcon.php';
class USER
{ 
 public $unitid,$sessionid;
    
 private $conn;
 public function __construct()
 {
  $database = new Database();
  $db = $database->dbConnection();
  $this->conn = $db;
    }
    
    public function runQuery($sql)
 {
  $stmt = $this->conn->prepare($sql);
  return $stmt;
 }
    
    public function login($unitno,$upass)
 {
     
  try
  {
   $stmt = $this->conn->prepare("SELECT * FROM user WHERE unitno=:unitno_id");
   $stmt->execute(array(":unitno_id"=>$unitno));
   $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
   //if user exist
   if($stmt->rowCount() == 1)
   {
       //check password
     if($userRow['password']==$upass)
     {
      session_start();
      $_SESSION['userSession'] = $userRow['userid'];
      $_SESSION['role']=$userRow['role']; 
      $_SESSION['firstname']=$userRow['firstname']; 
      $_SESSION['lastname']=$userRow['lastname'];      
      return true;
     }
       //password is not correct
     else
     {
      //goto login error page
      header("Location: logInPage.html?errorMessage=Wrong username or password");
      exit;
     }
    
   }
      
    //if user is not exist  
   else
   {
    //goto login error page
     header("Location: logInPage.html?errorMessage=User is not exist");
    exit;
   }  
  }//try
     
     
     
  catch(PDOException $ex)
  {
   echo $ex->getMessage();
  }
 }
    
 public function is_logged_in()
 {
  if(isset($_SESSION['userSession']))
  {
   return true;
  }
 }
    
 public function redirect($url)
 {
  header("Location: $url");
 }   
    
 public function logout()
 {
  session_destroy();
  $_SESSION['userSession'] = false;
 }   
    
public function send_mail($to, $subject, $message)
 {   
     // Additional headers
$headers[] = 'To:'. $to;
$headers[] = 'From:TSCC2316 Condo';

    // To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
     if(mail($to,$message ,$subject , implode("\r\n", $headers)))
         return true;
     else return false;
         
         
 }     
    
}

?>