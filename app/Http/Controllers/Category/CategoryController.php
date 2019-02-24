<?php

namespace App\Http\Controllers\Category;

use App\Http\Requests\Category\EditCategoryRequest;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Repositories\Repository;

class CategoryController extends Controller
{
    const PER_PAGE = 15;

    /**
     * @var Category
     */
    protected $model;

    public function __construct(Category $model)
    {
        $this->model = new Repository($model);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Category[]|Repository[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        $data['categories'] = $this->model->paginate(self::PER_PAGE);

        return view('category.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProductAlias $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $validated = $request->validated();
        $result = $this->model->create($validated);

        if ($result) return redirect()->route('categories');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = $this->model->show($id);

        return view('category.show', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param EditCategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function edit(EditCategoryRequest $request)
    {
        $validated = $request->validated();
        $category = $this->model->show($validated['id']);

        return view('category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request)
    {
        $validated = $request->validated();
        $result = $this->model->update($validated, $request->get('id'));

        if ($result) return redirect()->route('categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return bool|int|null
     * @throws \Exception
     */
    public function destroy($id)
    {
        $result = $this->model->delete($id);

        if ($result) return redirect()->route('categories');
    }
}
