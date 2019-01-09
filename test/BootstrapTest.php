<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class BootstrapTest extends TestCase
{
    public function setUp()
    {
        require_once $this->varienAutoloaderClassPath();
    }

    public function testRequiresComposerAutoloaderWhenBasePathConstantsDefined(): void
    {
        define('BP', realpath(__DIR__ . '/../'));
        $autoloader = new Varien_Autoload();
        $this->assertTrue(COMPOSER_AUTOLOADER_LOADED);
    }

    public function testRequiresComposerAutoloaderWhenBasePathConstantsUndefined(): void
    {
        $autoloader = new Varien_Autoload();
        $this->assertTrue(COMPOSER_AUTOLOADER_LOADED);
    }

    protected function varienAutoloaderClassPath(): string
    {
        return implode(DIRECTORY_SEPARATOR, ['app', 'code', 'community', 'Varien', 'Autoload.php']);
    }
}
