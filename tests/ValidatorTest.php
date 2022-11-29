<?php

namespace Cedula\Validator\Tests;

use Cedula\Validator\Validator;
use PHPUnit\Framework\TestCase;

class ValidatorTest extends TestCase
{
    public Validator $validator;

    public function setUp(): void
    {
        $this->validator = Validator::make(new FakeClient());
    }

    /**
     * @dataProvider validCedulas
     */
    public function testCedulaIsValid(string $id):void
    {
        $this->assertTrue($this->validator->isValid($id));
    }

    public function validCedulas(): array
    {
        return [
            ['40221232423'],
            ['402-2123242-3'],
        ];
    }

    public function testCedulaIsInValid():void
    {
        $this->assertFalse($this->validator->isValid('40221232422'));
    }
}
