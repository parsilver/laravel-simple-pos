<?php

namespace App\Actions\Customer;

use App\Contracts\CreateNewCustomer;
use App\Events\CustomerCreated;
use App\Models\Customer;

class CreateAndIdentifyFromPhone implements CreateNewCustomer
{
    /**
     * Validation rules for creating a new customer.
     * 
     * @return array
     */
    public function rules(): array
    {
        return [
            'phone' => 'required|unique:customers,phone',
        ];
    }

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return mixed
     */
    public function create(array $input)
    {
        return tap(Customer::create($input), function (Customer $customer) {
            CustomerCreated::dispatch($customer);
        });
    }
}
