<?php

    namespace Services;

    interface CustomerService
{
    public function getAll();
    public function getId($id);
    public function create($customer);
    public function update($customer, $id);
    public function delete($id);
}