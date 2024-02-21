<?php

namespace App\Http\Interface;

interface CategoryInterface
{
    public function index($request);
    public function create();
    public function store();
    public function edit();
    public function update();
    public function destroy();

}
