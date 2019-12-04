<?php declare(strict_types=1);
/**
 * @author Vitaliy Viznyuk <vitaliyviznyuk@gmail.com>
 * @copyright Copyright (c) 2019 Vitaliy Viznyuk
 */

namespace PHPUnit\Framework;

use PHPUnit\Framework\TestCase;

abstract class Assert
{
    // ...

    /**
     * Asserts that a condition is true.
     *
     * @param  boolean $condition
     * @param  string  $message
     * @throws PHPUnit\Framework\AssertionFailedError
     */
    public static function assertTrue($condition, $message = '')
    {
        self::assertThat($condition, self::isTrue(), $message);
    }

    // ...

    /**
     * Returns a PHPUnit\Framework\Constraint\IsTrue matcher object.
     *
     * @return PHPUnit\Framework\Constraint\IsTrue
     * @since  Method available since Release 3.3.0
     */
    public static function isTrue()
    {
        return new PHPUnit\Framework\Constraint\IsTrue;
    }

    // ...
}
