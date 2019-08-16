<?php
    namespace Controller;
    use Model\Customer;
    use Services\Impl\CustomerServiceImpl;

    class CustomerController
    {
        protected $CustomerServiceImpl;

        public function __construct()
        {
            $this->CustomerServiceImpl = new CustomerServiceImpl;
        }

        public function index()
        {
            $customers = $this->CustomerServiceImpl->getAll();
            include 'View/list.php';
        }

        public function add()
        {
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                include 'View/add.php';
            } else {

                $name = $_POST['name'];
                $email = $_POST['email'];
                $ngaysinh = $_POST['ngaysinh'];

                $customer = new Customer($name, $email, $ngaysinh);
                $this->CustomerServiceImpl->create($customer);
                $message = 'Customer created';
                include 'View/add.php';
            }
        }

        public function delete()
        {
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $customer = $this->CustomerServiceImpl->getId($id);
            include 'View/delete.php';
            } else {
                $id = $_POST['id'];
                $this->CustomerServiceImpl->delete($id);
                header('Location: index.php');
            }
        }

        public function edit()
        {
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                $id = $_GET['id'];
                $customer =  $this->CustomerServiceImpl->getId($id);
                include 'View/edit.php';
            } else {
                $id = $_POST['id'];
                $customer = new Customer($_POST['name'], $_POST['email'], $_POST['ngaysinh']);
                $this->CustomerServiceImpl->update($id, $customer);
                header('Location: index.php');
            }
        }
    }