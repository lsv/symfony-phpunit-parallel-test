<?php


namespace App\Tests\Test1;


use App\ReadEnv;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ReadEnvTest extends WebTestCase
{
    public function testGetEnv(): void
    {
        $this->assertSame('Test1', ReadEnv::readEnv());
    }

}
