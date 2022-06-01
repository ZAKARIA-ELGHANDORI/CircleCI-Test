<?php 
 
 use PHPUNIT\Framwork\TestCase;

class mainTest extends PHPUnit\Framework\TestCase
  { 
    
    public function test() 
    {
      $string1='testing';
      $string2='testing';
      $this->assertSame($string1,$string2);

      if(!preg_match('/testing/',$string2)) throw new \Exception('invalid string ');       
    }
  }
?>




          
