<?php
require ('head.php');
require ('header.php');
require_once 'user.php';
$user = new USER();

if(empty($_GET['id']))
{
 $user->redirect('index.html');
}
if(isset($_POST['nPass'])){
  $id=$_GET['id'];
  $nPass=$_POST['nPass'];}
$stmt = $user->runQuery("UPDATE user SET password=:upass WHERE userid=:uid");
    if($stmt->execute(array(":upass"=>$nPass,":uid"=>$id)))
        echo '
   

  <body>
      <div class="form">
      <div>
        <div id="login">';
          if($stmt->execute(array(":upass"=>$nPass,":uid"=>$id)))
          echo '<h1 style="color:white">Your Password is reset successfully</h1>';
            else echo '<h1 style="color:white">Oops something went wrong. Try again ,Please</h1>';

         echo '<form  action ="logInPage.html" method="get">
          
          
          <input type="submit" class="button button-block" name="btn-login" value="Log In"> 
          </form>
        </div> 
      </div>   
    </div> 
</body>';

require('footer.php');
?>