<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;

class ComplexQueryTest extends TestCase
{
    use TestCaseTrait;

    public function testComplexQuery()
    {
        $queryTable = $this->getConnection()->createQueryTable(
            'myRegisteredUsers', 'SELECT registered_users...'
        );
        $expectedTable = $this->createFlatXmlDataSet("RegUsers.xml")
                              ->getTable("myRegisteredUsers");
        $this->assertTablesEqual($expectedTable, $queryTable);
    }
}
?>