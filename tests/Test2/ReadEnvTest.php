<?php


namespace App\Tests\Test2;


use App\ReadEnv;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ReadEnvTest extends WebTestCase
{
    public function testGetEnv(): void
    {
        self::bootKernel();
        $reader = self::$container->get(ReadEnv::class);
        $this->assertSame('From phpunit.xml.dist - test2', $reader->readEnv());
    }

}
