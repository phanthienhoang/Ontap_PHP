<?php

    namespace Repositoris;
    use Repositories\Repository;

    interface CustomerRepository extends Repository
    {
        public function getAll();
        public function create($customer);
        public function getId($id);
        public function delete($id);
        public function update($customer, $id);
    }