//Assignment 3
//Mohammed Abdulkadir
// Testing connection
<?php

require_once('Connect.php');

class ConnectTest extends PHPUnit_Framework_TestCase
{
  public function setUp(){ }
  public function tearDown(){ }

  public function testConnectionIsValid()
  {
    // test to ensure that the object from an fsockopen is valid
    $connObj = new Connect();
    $serverName = 'dbserv.siu.edu';
    $this->assertTrue($connObj->connectToServer($serverName) == true);
  }
}
?>
