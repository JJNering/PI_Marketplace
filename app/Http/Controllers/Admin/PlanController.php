<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    private $repository;

    public function __construct(Plan $plan)
    {
        $this->repository = $plan;
    }

    public function index()
    {
        $plans = $this->repository->latest()->paginate();

        return view('admin.pages.plans.index', [
            'plans' => $plans,
        ]);
    }

    public function create()
    {
        return view('admin.pages.plans.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['url'] = Str::kebab($request->name);

        $this->repository->create($data);

        return redirect()->route('plans.index');
    }

    public function show($url)
    {
        // Recuperando o plano pela URL
        $plan = $this->repository->where('url', $url)->first();

        // Caso não encontre o plano, volta pra pagina anterior
        if (!$plan)
            return redirect()->back();

        return view('admin.pages.plans.show', [
            'plan' => $plan
        ]);
    }

    public function destroy($url)
    {
        // Recuperando o plano pela URL
        $plan = $this->repository->where('url', $url)->first();

        // Caso não encontre o plano, volta pra pagina anterior
        if (!$plan)
            return redirect()->back();

        // Exclui o plano selecionado
        $plan->delete();

        // Retorna para a página de planos
        return redirect()->route('plans.index');
    }
}
