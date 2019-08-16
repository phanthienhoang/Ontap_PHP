<?php
namespace Model;

class Customer
{
    public $id;
    public $name;
    public $email;
    public $ngaysinh;

    public function __construct($name, $email, $ngaysinh)
    {
        $this->name = $name;
        $this->email = $email;
        $this->ngaysinh = $ngaysinh;
    }
}