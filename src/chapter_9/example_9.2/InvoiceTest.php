<?php declare(strict_types=1);
/**
 * @author Vitaliy Viznyuk <vitaliyviznyuk@gmail.com>
 * @copyright Copyright (c) 2019 Vitaliy Viznyuk
 */

namespace vitaliyviznyuk\PHPUnitTest;

use PHPUnit\Framework\TestCase;

/**
 * @covers \Invoice
 * @uses \Money
 */
class InvoiceTest extends TestCase
{
    protected $subject;

    protected function setUp(): void
    {
        $this->subject = new Invoice();
    }

    public function testAmountInitiallyIsEmpty()
    {
        $this->assertEquals(new Money(), $this->subject->getAmount);
    }
}
