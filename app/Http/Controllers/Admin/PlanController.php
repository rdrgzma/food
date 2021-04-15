<?php

namespace App\Http\Controllers\Admin;

use App\Models\Plan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdatePlanRequest;

class PlanController extends Controller
{
    private $repository;

    /**
     * Class constructor.
     */
    public function __construct(Plan $plan)
    {
        $this->repository = $plan;
    }
    public function index(){
        $plans = $this->repository->simplePaginate();
        return view('admin.pages.plans.index', ['plans' => $plans]);
    }

    public function create(){

        return  view('admin.pages.plans.create');
    }

    public function store(StoreUpdatePlanRequest $request){
        $this->repository->create( $request->all());
        return  redirect()->route('plans.index');
    }

    public function show($url){     
        $plan = $this->repository->where('url',$url)->first();

        if(!$plan)
            return redirect()->back();
        return view('admin.pages.plans.show', ['plan' => $plan]);
    }

    public function destroy($url){     
        $plan = $this->repository->with('details')->where('url',$url)->first();

        if(!$plan)
            return redirect()->back();

        if($plan->details->count() > 0){
            return redirect()->back()->with('error', 'Existem detalhes vinculados a esse plano, portanto ele não pode ser deletado');
        }
        
            $plan->delete();
        return  redirect()->route('plans.index');
    }

    public function search(StoreUpdatePlanRequest $request){
        $filters = $request->except('_token');
        $plans = $this->repository->search($request->filter);
        return view('admin.pages.plans.index', [
            'plans' => $plans,
            'filters' => $filters
            ]);
    }

    public function edit($url){     
        $plan = $this->repository->where('url',$url)->first();

        if(!$plan)
            return redirect()->back();
        
            return view('admin.pages.plans.edit', [
                'plan' => $plan
                ]);
    }

    public function update(StoreUpdatePlanRequest $request, $url){     
        $plan = $this->repository->where('url',$url)->first();

        if(!$plan)
            return redirect()->back();
        $plan->update($request->all());   

        return  redirect()->route('plans.index');
    }
}
