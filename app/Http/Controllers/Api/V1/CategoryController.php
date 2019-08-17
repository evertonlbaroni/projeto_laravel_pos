<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Categories\CategoryFormRequest;
use App\Services\CategoryService;
use App\Repositories\CategoryRepository;

class CategoryController extends Controller
{
    public function __construct(
        CategoryService $service,
        CategoryRepository $repository
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

    public function store(CategoryFormRequest $request)
    {
        $this->service->create($request->all());
        return response()->json([], 200);
    }

    public function update($id, CategoryFormRequest $request)
    {
        $this->service->update($id, $request->all());
        return response()->json([], 200);
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
