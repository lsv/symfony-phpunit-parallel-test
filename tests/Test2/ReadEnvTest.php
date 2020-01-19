<?php


namespace App\Tests\Test2;


use App\ReadEnv;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ReadEnvTest extends WebTestCase
{
    public function testGetEnv(): void
    {
        $this->assertSame('Test2', ReadEnv::readEnv());
    }

}
