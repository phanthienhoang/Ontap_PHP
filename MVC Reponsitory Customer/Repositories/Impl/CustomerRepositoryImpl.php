<?php
namespace Repositories\Impl;

use Model\Customer;
use Repositories\CustomerRepository;
use Repositories\Eloquent\EloquentRepository;

class CustomerRepositoryImpl extends EloquentRepository  implements CustomerRepository
{
    /**
     * get Model
     * @return string
     */
    public function getModel()
    {
        $model = Customer::class;
        return $model;
    }
}