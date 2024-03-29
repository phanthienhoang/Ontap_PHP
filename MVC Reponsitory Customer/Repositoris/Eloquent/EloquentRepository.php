<?php
namespace Repositories\Eloquent;
use Repositories\Repository;
use Model\DBConnection;
use Model\Customer;

abstract class EloquentRepository implements Repository
{
    public $connection;
    public $model;
    
    public function __construct($connection)
    {   $this->connection = $connection;
        $this->setModel();
    }
    
    abstract public function getModel();
   
    public function setModel()
    {
        $this->model = $this->getModel();
    }

    public function getAll()
    {
    $sql = "SELECT * FROM customer";
    $statement = $this->connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
    $customers = [];
    foreach ($result as $row) {
        $customer = new Customer($row['name'], $row['email'], $row['ngaysinh']);
        $customer->id = $row['id'];
        $customers[] = $customer;
      }
        return $customers;
    }

    public function create($customer)
    {
        $sql = "INSERT INTO customer (name,ngaysinh,email) VALUES (?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $customer->name);
        $statement->bindParam(2, $customer->ngaysinh);
        $statement->bindParam(3, $customer->email);
        return $statement->execute();
    } 

    public function getId($id)
    {
        $sql = "SELECT * FROM customer WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $customer = new Customer($row['name'], $row['email'], $row['ngaysinh']);
        $customer->id = $row['id'];
        return $customer;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM customer WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    public function update($id, $customer)
    {
        $sql = "UPDATE customer SET name = ?, email = ?, ngaysinh = ? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $customer->name);
        $statement->bindParam(2, $customer->email);
        $statement->bindParam(3, $customer->ngaysinh);
        $statement->bindParam(4, $id);
        return $statement->execute();
    }
}