<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $categories =  $this->repository->all();
        return view("category.index", compact('categories'));
    }

    public function create()
    {
        return view("category.create");
    }

    public function store(CategoryFormRequest $request)
    {
        $this->service->create($request->all());
        return redirect('/category');
    }

    public function edit($id)
    {
        $category = $this->repository->findByID($id, true);
        return view("category.edit", compact('category'));
    }

    public function update($id, CategoryFormRequest $request)
    {
        $this->service->update($id, $request->all());
        return redirect('/category');
    }

    public function destroy($id)
    {
        $this->repository->destroy(
            $this->repository->findByID($id, true)
        );
        return redirect('/category');
    }

    public function show($id)
    {
        $category = $this->repository->findByID($id);
        return view("category.show", compact('category'));
    }

}
