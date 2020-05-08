<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;
use App\Models\Product\product;

interface ProductsRepositoryInterface
{
    public function index();

    public function show($id);

    public function store(Request $request);

    public function update(Request $request, $id);

    public function delete(Request $request,$id);
}