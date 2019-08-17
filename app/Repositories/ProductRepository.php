<?php

namespace App\Repositories;

use App\Entities\Product;

class ProductRepository extends AbstractRepository
{
    protected $model = Product::class;
}
