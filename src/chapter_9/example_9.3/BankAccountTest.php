<?php declare(strict_types=1);
/**
 * @author Vitaliy Viznyuk <vitaliyviznyuk@gmail.com>
 * @copyright Copyright (c) 2019 Vitaliy Viznyuk
 */

namespace vitaliyviznyuk\PHPUnitTest;

use PHPUnit\Framework\TestCase;

class BankAccountTest extends TestCase
{
    protected $ba;

    protected function setUp(): void
    {
        $this->ba = new BankAccount;
    }

    /**
     * @covers \BankAccount::getBalance
     */
    public function testBalanceIsInitiallyZero()
    {
        $this->assertSame(0, $this->ba->getBalance());
    }

    /**
     * @covers \BankAccount::withdrawMoney
     */
    public function testBalanceCannotBecomeNegative()
    {
        try {
            $this->ba->withdrawMoney(1);
        }

        catch (BankAccountException $e) {
            $this->assertSame(0, $this->ba->getBalance());

            return;
        }

        $this->fail();
    }

    /**
     * @covers \BankAccount::depositMoney
     */
    public function testBalanceCannotBecomeNegative2()
    {
        try {
            $this->ba->depositMoney(-1);
        }

        catch (BankAccountException $e) {
            $this->assertSame(0, $this->ba->getBalance());

            return;
        }

        $this->fail();
    }

    /**
     * @covers \BankAccount::getBalance
     * @covers \BankAccount::depositMoney
     * @covers \BankAccount::withdrawMoney
     */
    public function testDepositWithdrawMoney()
    {
        $this->assertSame(0, $this->ba->getBalance());
        $this->ba->depositMoney(1);
        $this->assertSame(1, $this->ba->getBalance());
        $this->ba->withdrawMoney(1);
        $this->assertSame(0, $this->ba->getBalance());
    }
}
