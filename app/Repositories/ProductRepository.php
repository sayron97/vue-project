<?php
/**
 * Created by PhpStorm.
 * User: ipeople
 * Date: 23.01.19
 * Time: 11:05
 */
namespace App\Repositories;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class ProductRepository implements BasicRepository
{
    public function update($arr)
    {
        // TODO: Implement update() method.
    }
    public function post($arr)
    {
        // TODO: Implement post() method.
    }
    public function getByValue($field, $value)
    {
        // TODO: Implement getByValue() method.
    }
    public function getByArray($arr)
    {
        // TODO: Implement getByArray() method.
    }
    public function getAll()
    {
        $products = DB::table('product')
            ->join('images', 'product.main_img', '=', 'images.id')
            ->get();
        return $products;
    }
    public function get($arr)
    {
        // TODO: Implement get() method.
    }
    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}