<?php declare(strict_types=1);
/**
 * @author Vitaliy Viznyuk <vitaliyviznyuk@gmail.com>
 * @copyright Copyright (c) 2019 Vitaliy Viznyuk
 */

namespace vitaliyviznyuk\PHPUnitTest;

use PHPUnit\Framework\TestCase;
use stdClass;

class ClassHasAttributeTest extends TestCase
{
    public function testFailure()
    {
        $this->assertClassHasAttribute('foo', stdClass::class);
    }
}
