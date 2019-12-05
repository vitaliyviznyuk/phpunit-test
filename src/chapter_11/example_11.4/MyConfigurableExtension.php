<?php declare(strict_types=1);
/**
 * @author Vitaliy Viznyuk <vitaliyviznyuk@gmail.com>
 * @copyright Copyright (c) 2019 Vitaliy Viznyuk
 */

namespace Vendor;

use PHPUnit\Runner\BeforeFirstTestHook;
use PHPUnit\Runner\AfterLastTestHook;

final class MyConfigurableExtension implements BeforeFirstTestHook, AfterLastTestHook
{
    protected $config_value_1 = '';

    protected $config_value_2 = 0;

    public function __construct(string $value1 = '', int $value2 = 0)
    {
        $this->config_value_1 = $value1;
        $this->config_value_2 = $value2;
    }

    public function executeBeforeFirstTest(): void
    {
        if (strlen($this->config_value_1)) {
            echo 'Testing with configuration value: ' . $this->config_value_1;
        }
    }

    public function executeAfterLastTest(): void
    {
        if ($this->config_value_2 > 10) {
            echo 'Second config value is OK!';
        }
    }
}
