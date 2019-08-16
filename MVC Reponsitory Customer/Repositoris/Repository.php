<?php
    namespace Repositories;

    interface Repository
    {
        public function getAll();
        public function create($customer);
        public function getId($id);
        public function delete($id);
        public function update($customer, $id);
    }