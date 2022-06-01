<?php 

use PHPUNIT\Framwork\TestCase;

class Connection  extends \PHPUnit\Framework\TestCase 
  {
      public $username;
      public $pass; 
      public $host; 
      public $db;
      public $dsn;
  public function testconnectionestablish(){
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

try { 
    $cnx= new PDO($dsn , $username , $pass);
    if($cnx) {
        echo ""; 
    }
} catch(PDOEXception $e) {
    $error_cnx = $e->getMessage(); 
    echo $error_cnx;
    echo " ";
    echo "May your server is off or ur data is incorrecte";
    exit();
   } 
}
  }

?>