<?php declare(strict_types=1);
/**
 * @author Vitaliy Viznyuk <vitaliyviznyuk@gmail.com>
 * @copyright Copyright (c) 2019 Vitaliy Viznyuk
 */

namespace vitaliyviznyuk\PHPUnitTest;

use PHPUnit\DbUnit\TestCase;

class GuestbookIntegrationTest extends TestCase
{
    /**
     * @coversNothing
     */
    public function testAddEntry()
    {
        $guestbook = new Guestbook();
        $guestbook->addEntry("suzy", "Hello world!");

        $queryTable = $this->getConnection()->createQueryTable(
            'guestbook', 'SELECT * FROM guestbook'
        );

        $expectedTable = $this->createFlatXmlDataSet("expectedBook.xml")
                              ->getTable("guestbook");

        $this->assertTablesEqual($expectedTable, $queryTable);
    }
}
