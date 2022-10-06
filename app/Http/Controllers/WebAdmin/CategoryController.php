<?php

namespace App\Http\Controllers\WebAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Services\CategoryService;

class CategoryController extends Controller
{
    private $service;

    public function __construct(CategoryService $service) {
        parent::__construct();
        $this->service = $service;
    }

    public function index()
    {
        $title = "Category";
        $data = $this->service->get($this->params);

        return view('web-admin/pages/category.category', compact('title', 'data'));
    }

    public function store(StoreCategoryRequest $request)
    {
        $_data = array_merge($request->validated());
        $_data = $this->service->create($_data);

        return redirect()
            ->route('category.index')
            ->with('success', $this->message::afterInsert(true));
    }

    public function update(UpdateCategoryRequest $request, $id)
    {
        $_data = $this->service->update(['id', $id], $request->validated());
        return redirect()->route('category.index')->with('success', $this->message::afterUpdate(true));
    }

    public function destroy($id)
    {
        $_data = $this->service->destroy($id);
        return back()->with('success', $this->message::afterDestroy(true));
    }

}
