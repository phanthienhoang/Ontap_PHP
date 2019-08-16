<?php
    namespace Repositoris\Impl;
    use Model\Customer;
    use Repositories\Eloquent\EloquentRepository;
    use Repositoris\CustomerRepository;
    
    class CustomerRepositoryImpl extends EloquentRepository  implements CustomerRepository
    {
        public function getModel()
        {
            $this->model = Customer::class;
        }
    }