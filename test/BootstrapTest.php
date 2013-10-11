<?php

class BootstrapTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        require_once $this->varienAutoloaderClassPath();
    }

    public function testRequiresComposerAutoloaderWhenBasePathConstantsDefined()
    {
        define('BP', realpath(dirname(__FILE__) . '/../'));
        $autoloader = new Varien_Autoload();
        $this->assertTrue(COMPOSER_AUTOLOADER_LOADED);
    }

    public function testRequiresComposerAutoloaderWhenBasePathConstantsUndefined()
    {
        $autoloader = new Varien_Autoload();
        $this->assertTrue(COMPOSER_AUTOLOADER_LOADED);
    }

    /**
     * @return string
     */
    protected function varienAutoloaderClassPath()
    {
        $ds = DIRECTORY_SEPARATOR;
        return 'app' . $ds . 'code' . $ds . 'community' . $ds . 'Varien' . $ds . 'Autoload.php';
    }
}
