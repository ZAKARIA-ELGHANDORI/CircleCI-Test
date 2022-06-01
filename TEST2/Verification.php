 
<?php 
 use PHPUNIT\Framwork\TestCase;
 session_start();
 include_once('Connection.php'); 
 class Verification extends PHPUnit\Framework\TestCase {
   public  $cnx;
   public $dsn;
   public $username;
   public $pass; 
   public $host; 
   public function testVerification() {
    $username="root"; 
    $this->assertSame($username,'root');
 $pass="root";
    $this->assertSame($pass,'root');
 $host="localhost"; 
     $this->assertSame($host,'localhost');
 $db="APP1"; 
     $this->assertSame($db,'APP1');
    $dsn="mysql:host=$host;dbname=$db";
    $cnx= new PDO($dsn , $username , $pass);

$sql ='SELECT * FROM `users` ';
if($this->assertSame("SELECT * FROM `users` ",$sql)) throw new \Exception('invalid Requéte ');
//Recherche des données
$sth = $cnx->query($sql);
// On voudrait les résultats sous la forme d’un tableau associatif
      $result = $sth->fetchAll(PDO::FETCH_ASSOC);
?>

<?php if(isset($_GET['submit']) AND isset($_GET['login']) AND isset($_GET['password']))  : ?>
 
      <?php
           $username=$_GET['login'];
           $password=$_GET['password'];
        ?>
            <?php foreach($result as $row) { ?>
          <?php  if(($_GET['login']==$row['login']) AND ($_GET['password']==$row['password'])) : ?>
               <?php 
                  $_SESSION['login']=$username;
                  $_SESSION['password']=$password;
               header('Location: formulaire.php');
                 break;   
                 ?> 
                
                   <?php else : ?>
                     <?php header('Location: PageLogin.php');                      
                    ?>
                    
                     
                        

          <?php endif; ?>
             
      <?php } ?>   
<?php endif;
 }
}
?>
