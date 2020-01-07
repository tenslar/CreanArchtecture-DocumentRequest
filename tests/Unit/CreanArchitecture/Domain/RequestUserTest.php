<?php

namespace Tests\Unit\CreanArchitecture\Domain;

use PHPUnit\Framework\TestCase;
use App\CreanArchitecture\Domain\RequestUser;

class RequestUserTest extends TestCase
{
    /**
     * @var RequestUser
     */
    private RequestUser $testInstance;
    private const SUPPLIER_NAME =  'HOGECompany';
    private const USER_NAME = 'あいうえお';
    private const EMAIL = 'test@hogecompany.email.example.com';
    private const TEL = '0123456789';
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testGetSupplierName()
    {
        $supplier_name = $this->testInstance->getSupplierName();
        $this->assertEquals(self::SUPPLIER_NAME, $supplier_name);
    }

    public function testGetUserName()
    {
        $user_name = $this->testInstance->getUserName();
        $this->assertEquals(self::USER_NAME, $user_name);
    }

    public function testGetEmail()
    {
        $email = $this->testInstance->getEmail();
        $this->assertEquals(self::EMAIL, $email);
    }

    public function testGetTel()
    {
        $tel = $this->testInstance->getTel();
        $this->assertEquals(self::TEL, $tel);
    }

    protected function setUp(): void
    {
        $this->testInstance = new RequestUser(
            self::SUPPLIER_NAME,
            self::USER_NAME,
            self::EMAIL,
            self::TEL,
        );
    }
}
