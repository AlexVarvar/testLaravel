<?php

namespace App\Http\Controllers\Product;

use App\Http\Requests\EditProduct;
use App\Http\Requests\StoreProduct as StoreProductAlias;
use App\Http\Requests\UpdateProduct;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Repository;

class ProductController extends Controller
{
    /**
     * @var Product
     */
    protected $model;

    public function __construct(Product $product)
    {
        $this->model = new Repository($product);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Product[]|Repository[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        $data['products'] = $this->model->paginate(15);

        return view('product.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProductAlias $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductAlias $request)
    {
        $validated = $request->validated();
        $result = $this->model->create($validated);

        if ($result) return redirect()->route('products');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->model->show($id);

        return view('product.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param EditProduct $request
     * @return \Illuminate\Http\Response
     */
    public function edit(EditProduct $request)
    {
        $validated = $request->validated();
        $product = $this->model->show($validated['id']);

        return view('product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProduct $request
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProduct $request)
    {
        $validated = $request->validated();
        $result = $this->model->update($validated, $request->get('id'));

        if ($result) return redirect()->route('products');
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

        if ($result) return redirect()->route('products');
    }
}
