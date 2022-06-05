<?php

namespace App\Contracts;

interface CreateNewCustomer
{

    /**
     * Validation rules for creating a new customer.
     * 
     * @return array
     */
    public function rules(): array;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return mixed
     */
    public function create(array $input);
}
