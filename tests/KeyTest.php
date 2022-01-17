<?php

namespace Tests;

use Kaiopiola\Keygen\Key;
use PHPUnit\Framework\TestCase;

class KeyTest extends TestCase
{

    /**
     * @test
     *
     * @return void
     */
    public function generate_return_a_string(): void
    {
        //Arrange
        $key = new Key();
        //Act
        $result = $key->generate();

        //Assert
        self::assertIsString($result);
    }

}
