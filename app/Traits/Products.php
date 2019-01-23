<?php
/**
 * Created by PhpStorm.
 * User: ipeople
 * Date: 23.01.19
 * Time: 11:06
 */
namespace App\Traits;

use App\Repositories\ProductRepository;

trait Products
{

    private $productsRepo;

    public function __construct()
    {
        $this->productsRepo = new ProductRepository();
    }

    public function getAllProducts()
    {
        return $this->productsRepo->getAll();
    }
}