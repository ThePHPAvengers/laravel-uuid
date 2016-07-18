<?php

namespace ThePHPAvengers\LaravelUUID;

use Mockery;
use ThePHPAvengers\LaravelUUID\LaravelUUIDServiceProvider;

/**
 * Class LaravelUUIDServiceProviderTest
 *
 * @package ThePHPAvengers\LaravelUUID
 * @author James Kirkby <hello@jameskirkby.com>
 */
class LaravelUUIDServiceProviderTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var
     */
    protected $LaravelUUIDProviderMock;

    /**
     * @var LaravelUUIDProvider
     */
    protected $LaravelUUIDProvider;

    protected function setUp()
    {
        $this->setUpMocks();

        $this->LaravelUUIDProvider = new LaravelUUIDServiceProvider($this->LaravelUUIDProviderMock);

        parent::setUp();
    }

    protected function setUpMocks()
    {
        $this->LaravelUUIDProviderMock = Mocker::mock(Application::class);
    }
}
