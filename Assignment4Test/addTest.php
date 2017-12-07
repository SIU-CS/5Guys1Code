<?php
class addTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PDO
     */
    private $pdo;
    public function setUp()
    {
        $this->pdo = new PDO($GLOBALS['dbserv.siu.edu'], $GLOBALS['mabdulkadir'], $GLOBALS['']);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->query("CREATE TABLE items (what VARCHAR(50) NOT NULL)");
    }
    public function tearDown()
    {
        $this->pdo->query("DROP TABLE items");
    }
    public function testadd()
    {
        $add = new added($this->pdo);
        $this->assertEquals('buy milk', $add->items());
    }

}
