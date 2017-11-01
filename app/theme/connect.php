// Assignment 3 Connect
//Mohammed Abdulkadir

<?php
class Connect
{
  public function connectToServer($serverName=null)
  {
    if($serverName==null){
      throw Exception('wrong server name!');
    }
    $fp = fsockopen($serverName,50);
    return ($fp) ? true : false;
  }
  public function returnSampleObject()
  {
    return $this;
  }
}
?>
