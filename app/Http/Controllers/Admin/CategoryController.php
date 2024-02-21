<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interface\CategoryInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $repository;
    public function __construct(CategoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function index(Request $request)
    {
        return $this->repository->index($request);
    }
    public function create()
    {
        return $this->repository->create();
    }
    public function store(){
        return $this->repository->store();
    }
    public function edit(){
        return $this->repository->edit();
    }
    public function update(){
        return $this->repository->update();
    }
    public function destroy(){
        return $this->repository->destroy();
    }
}
