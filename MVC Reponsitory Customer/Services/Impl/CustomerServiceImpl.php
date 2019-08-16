<?php
namespace Services\Impl;
use Model\DBConnection;
use Repositoris\Impl\CustomerRepositoryImpl;
use Services\CustomerService;

class CustomerServiceImpl implements CustomerService
{
    protected $CustomerRepositoryImpl;

    public function __construct()
    {   
        $connection = new DBConnection("mysql:host=localhost;dbname=ban_hang_online", "root", "");
        $this->CustomerRepositoryImpl = new CustomerRepositoryImpl($connection->connect());
    }

    public function getAll()
    {
        $customers = $this->CustomerRepositoryImpl->getAll();

        return $customers;
    }


    public function create($customer)
    {
        $customers = $this->CustomerRepositoryImpl->create($customer);
        return $customers;
    }

    public function getId($id)
    {
        $customers = $this->CustomerRepositoryImpl->getId($id);
        return $customers;
    }

    public function delete($id)
    {
        $customers = $this->CustomerRepositoryImpl->delete($id);
        return $customers;
    }

    public function update($id,$customer)
    {
        $customers = $this->CustomerRepositoryImpl->update($id,$customer);
        return $customers;
    }

}