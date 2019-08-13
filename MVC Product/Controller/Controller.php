<?php

    namespace Controller;
    use Model\DBConnection;
    use Model\Product;
    use Model\ProductDB;

    class Controller
    {
        public $productDB;

        public function __construct()
        {
            $connection = new DBConnection("mysql:host = localhost;dbname=product_data;charset=utf8mb4", "root", "");
            $this->productDB = new ProductDB ($connection->connect());
        }

        // hiển thị giữ liệu ra view
        public function index()
        {
            $array = $this->productDB->getAll();
            include 'View/list.php';
        }
        // thêm mới sản phẩm 
        public function add()
        {
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                include 'View/add.php';
            } else {
                $productName = $_POST['productName'];
                $productLine = $_POST['productLine'];
                $productVendor = $_POST['productVendor'];
                $description = $_POST['description'];
                $quantity = $_POST['quantity'];
                $price = $_POST['price'];

                $product = new Product( $productName, $productLine,$productVendor,$description,$quantity,$price);
                $this->productDB->create($product);
                $message = 'tạo mới thành công';
                include 'View/add.php';
            }
        }
    }
