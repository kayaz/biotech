<?php

namespace App\Http\Controllers\Admin\Technology;

use App\Http\Controllers\Controller;

//CMS
use App\Repositories\TechnologyRepository;
use App\Services\TechnologyService;

use App\Http\Requests\TechnologyFormRequest;

use App\Models\Technology;

class IndexController extends Controller
{
    private TechnologyRepository $repository;
    private TechnologyService $service;

    public function __construct(TechnologyRepository $repository, TechnologyService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index()
    {

        return view('admin.technology.index', ['list' => $this->repository->allSort('ASC')]);
    }

    public function create()
    {
        return view('admin.technology.form', [
            'cardTitle' => 'Dodaj technologie',
            'backButton' => route('admin.technology.index')
        ])->with('entry', Technology::make());
    }

    public function store(TechnologyFormRequest $request)
    {
        $technology = $this->repository->create($request->validated());

        if ($request->hasFile('file')) {
            $this->service->upload($request->name, $request->file('file'), $technology);
        }

        return redirect(route('admin.technology.index'))->with('success', 'Nowa technologia dodana');
    }

    public function edit(int $id)
    {
        if(request()->get('lang')) {
            app()->setLocale(request()->get('lang'));
        }

        return view('admin.technology.form', [
            'entry' => Technology::find($id),
            'cardTitle' => 'Edytuj technologię',
            'backButton' => route('admin.technology.index')
        ]);
    }

    public function update(TechnologyFormRequest $request, int $id)
    {
        if(request()->get('lang')) {
            app()->setLocale(request()->get('lang'));
        }

        $technology = $this->repository->find($id);
        $this->repository->update($request->validated(), $technology);

        if ($request->hasFile('file')) {
            $this->service->upload($request->name, $request->file('file'), $technology, true);
        }

        return redirect(route('admin.technology.index'))->with('success', 'Wpis zaktualizowany');
    }

    public function destroy(int $id)
    {
        $this->repository->delete($id);
        return response()->json('Deleted');
    }
}
