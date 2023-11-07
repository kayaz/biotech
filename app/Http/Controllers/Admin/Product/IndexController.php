<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFormRequest;
use App\Models\Product;
use App\Repositories\ProductRepository;
use App\Services\ProductService;

class IndexController extends Controller
{
    private ProductRepository $repository;
    private ProductService $service;

    public function __construct(ProductRepository $repository, ProductService $service)
    {
//        $this->middleware('permission:box-list|box-create|box-edit|box-delete', [
//            'only' => ['index','store']
//        ]);
//        $this->middleware('permission:box-create', [
//            'only' => ['create','store']
//        ]);
//        $this->middleware('permission:box-edit', [
//            'only' => ['edit','update']
//        ]);
//        $this->middleware('permission:box-delete', [
//            'only' => ['destroy']
//        ]);

        $this->repository = $repository;
        $this->service = $service;
    }

    public function index()
    {

        return view('admin.product.index', ['list' => $this->repository->allSort('ASC')]);
    }

    public function create()
    {
        return view('admin.product.form', [
            'cardTitle' => 'Dodaj produkt',
            'backButton' => route('admin.product.index')
        ])->with('entry', Product::make());
    }

    public function store(ProductFormRequest $request)
    {
        $product = $this->repository->create($request->validated());

        if ($request->hasFile('file')) {
            $this->service->upload($request->name, $request->file('file'), $product);
        }

        return redirect(route('admin.product.index'))->with('success', 'Nowy produkt dodany');
    }

    public function edit(int $id)
    {
        if(request()->get('lang')) {
            app()->setLocale(request()->get('lang'));
        }

        return view('admin.product.form', [
            'entry' => Product::find($id),
            'cardTitle' => 'Edytuj produkt',
            'backButton' => route('admin.product.index')
        ]);
    }

    public function update(ProductFormRequest $request, int $id)
    {
        if(request()->get('lang')) {
            app()->setLocale(request()->get('lang'));
        }

        $product = $this->repository->find($id);
        $this->repository->update($request->validated(), $product);

        if ($request->hasFile('file')) {
            $this->service->upload($request->name, $request->file('file'), $product, true);
        }

        return redirect(route('admin.product.index'))->with('success', 'Produkt zaktualizowany');
    }

    public function destroy(int $id)
    {
        $this->repository->delete($id);
        return response()->json('Deleted');
    }
}
