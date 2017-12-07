<?php
require_once('signup.php');
class ConnectTest extends PHPUnit_Framework_TestCase
{
  public function setUp(){ }
  public function tearDown(){ }
  public function testConnectionIsValid()
  {
    // test to ensure that the object from an fsockopen is valid
    $connObj = new TestConnect();
    $serverName = 'dbserv.siu.edu';
    $this->assertTrue($connObj->connectToServer($serverName) == true);
  }
}
?>