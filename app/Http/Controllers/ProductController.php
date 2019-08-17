<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use App\Services\ProductService;
use App\Http\Requests\Products\ProductFormRequest;

class ProductController extends Controller
{

    public function __construct(
        CategoryRepository $categoryRepository,
        ProductRepository $repository,
        ProductService $service
    )
    {
        $this->categoryRepository = $categoryRepository;
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index()
    {
        $products = $this->repository->all();
        return view("product.index", compact('products'));
    }

    public function create()
    {
        $categories = $this->categoryRepository->all();
        return view("product.create", compact('categories'));
    }

    public function store(ProductFormRequest $request)
    {
        $this->service->create($request->all());
        return redirect('/product');
    }

    public function edit($id)
    {
        $categories = $this->categoryRepository->all();
        $product = $this->repository->findByID($id);
        return view("product.edit", compact('categories', 'product'));
    }

    public function update($id, ProductFormRequest $request)
    {
        $this->service->update($id, $request->all());
        return redirect('/product');
    }

    public function show($id)
    {
        $product = $this->repository->findByID($id);
        return view("product.show", compact('product'));
    }

}
