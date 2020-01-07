<?php


namespace App\CreanArchitecture\Domain;


class RequestUser
{
    private string $supplierName;
    private string $userName;
    private string $email;
    private string $tel;

    public function __construct(string $supplierName, string $userName, string $email, string $tel)
    {
        // TODO ホントはここでバリデーションしたい
        $this->supplierName = $supplierName;
        $this->userName = $userName;
        $this->email = $email;
        $this->tel = $tel;
    }

    public function getSupplierName()
    {
        return $this->supplierName;
    }

    public function getUserName()
    {
        return $this->userName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getTel()
    {
        return $this->tel;
    }
}
