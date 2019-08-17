<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ProductService;
use App\Http\Requests\Products\ProductFormRequest;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    public function __construct(
        ProductService $service,
        ProductRepository $repository
    ) {
        $this->service = $service;
        $this->repository = $repository;
    }

    public function index()
    {
        return response()->json([
            'data' => $this->repository->all()
        ]);
    }

    public function store(ProductFormRequest $request)
    {
        $this->service->create($request->all());
        return response()->json('', 201);
    }

    public function update($id, ProductFormRequest $request)
    {
        $this->service->update($id, $request->all());
        return response()->json('', 204);
    }

    public function show($id)
    {
        return response()->json([
            'data' => $this->repository->findByID($id, true)
        ], 200);
    }

    public function destroy($id)
    {
        $this->repository->destroy(
            $this->repository->findByID($id, true)
        );
        return response()->json([], 200);
    }
}
