<?php

namespace App\Http\Repository;

use App\Http\Interface\CategoryInterface;
use App\Models\Category;

class CategoryRepository implements CategoryInterface
{

    public function index($request)
    {
        $query = $request->input('query');

        if($query != '')
        {
            $categories = Category::where('name', 'LIKE', "%{$query}%")->paginate(10);
        }
        else
        {
            $categories = Category::paginate(10);
        }

        return view('admin.pages.category.index',compact('categories'));
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function store()
    {
        // TODO: Implement store() method.
    }

    public function edit()
    {
        // TODO: Implement edit() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function destroy()
    {
        // TODO: Implement delete() method.
    }
}
