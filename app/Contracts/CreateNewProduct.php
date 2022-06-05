<?php

namespace App\Contracts;

use App\Models\Product;

interface CreateNewProduct
{
    /**
     * Validation rules for creating a new product.
     * 
     * @return array
     */
    public function rules(): array;

    /**
     * Validate and create a newly product.
     *
     * @param  array  $input
     * @return \App\Models\Product
     */
    public function create(array $input): Product;
}
