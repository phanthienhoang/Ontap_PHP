<?php
    namespace Model;
    
    class ProductDB
    {
        public $connection;

        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        // lấy dữ liệu database 
        public function getAll()
        {
            $sql = "SELECT * FROM products";
            $statement = $this->connection->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();
            $array = [];
            foreach ($result as $row){
                $product = new product($row['id'],$row['productName'],$row['productLine'],$row['productVendor'],$row['description'],$row['quantity'],$row['price']);
                $array[] = $product;
            }
            return $array;
        }

        // thêm mới sản phẩm
        public function create($create)
        {
            $sql = 'INSERT INTO `products`(`productName`, `productLine`, `productVendor`, `description`, `quantity`, `price`) VALUES (?,?,?,?,?,?)';
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $create->productName);
            $statement->bindParam(2, $create->productLine);
            $statement->bindParam(3, $create->productVendor);
            $statement->bindParam(4, $create->description);
            $statement->bindParam(5, $create->quantity);
            $statement->bindParam(6, $create->price);
            return $statement->execute();
        }
    }