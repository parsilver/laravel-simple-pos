<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot as PivotModel;

class ProductCategoryPivot extends PivotModel
{
    protected $table = 'product_category';

    /**
     * Product relationship
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    /**
     * Category relationship
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
