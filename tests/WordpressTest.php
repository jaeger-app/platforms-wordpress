<?php
/**
 * Jaeger
 *
 * @copyright	Copyright (c) 2015-2016, mithra62
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./tests/WordpressTest.php
 */
namespace JaegerApp\tests;

use JaegerApp\Platforms\Wordpress;

/**
 * Jaeger - WordPress object Unit Tests
 *
 * Contains all the unit tests for the \JaegerApp\Platforms\Wordpress object
 *
 * @package mithra62\Tests
 * @author Eric Lamb <eric@mithra62.com>
 */
class WordpressTest extends \PHPUnit_Framework_TestCase
{

    public function testInit()
    {
        $wp = new Wordpress();
        $this->assertTrue(method_exists($wp, 'getDbCredentials'));
        $this->assertTrue(method_exists($wp, 'getEmailConfig'));
        $this->assertTrue(method_exists($wp, 'getCurrentUrl'));
        $this->assertTrue(method_exists($wp, 'getSiteName'));
        $this->assertTrue(method_exists($wp, 'getTimezone'));
        $this->assertTrue(method_exists($wp, 'getSiteUrl'));
        $this->assertTrue(method_exists($wp, 'getEncryptionKey'));
        $this->assertTrue(method_exists($wp, 'getConfigOverrides'));
        $this->assertInstanceOf('JaegerApp\\Platforms\\AbstractPlatform', $wp);
    }
}