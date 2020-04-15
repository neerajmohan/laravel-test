<?php

namespace App\Exceptions;

use Exception;

class ProductNotFoundException extends Exception
{
    //
    public function report()
    {
        \Log::debug('Product not found');
    }
}
