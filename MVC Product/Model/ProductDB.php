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
                $product = new product($row['productName'],$row['productLine'],$row['productVendor'],$row['description'],$row['quantity'],$row['price']);
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

            // var_dump($statement->execute());
        }

        // lấy id sản phẩm 
        public function get($id)
        {
            $sql = "SELECT * FROM products WHERE productName = ?";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $id);
            $statement->execute();
            $row = $statement->fetch();
            $product = new Product($row['productName'],$row['productLine'],$row['productVendor'],$row['description'],$row['quantity'],$row['price']);
            $product->productName = $row['productName'];
            return $product;
        }
        // xóa sản phẩm 
        public function delete($id)
        {
            $sql = "DELETE FROM products WHERE productName = ?";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $id);
            $statement->execute();
        }

        // update sản phẩm
        public function update($id, $product){ 
            $sql = "UPDATE products SET  productName = ?, productLine = ?, productVendor = ?, description = ?, quantity = ?, price = ? WHERE productName = ?";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $product->productName);
            $statement->bindParam(2, $product->productLine);
            $statement->bindParam(3, $product->productVendor);
            $statement->bindParam(4, $product->description);
            $statement->bindParam(5, $product->quantity);
            $statement->bindParam(6, $product->price);
            $statement->bindParam(7, $id);
            return $statement->execute();
          }
    }