<?php

namespace App\Http\Controllers;

use App\Models\CarYear;
use App\Models\LiterCombination;
use Illuminate\Http\Request;

/**
 * Class LiterCombinationController
 * @package App\Http\Controllers
 */
class LiterCombinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $literCombinations = LiterCombination::paginate();

        return view('content.liter-combination.index', compact('literCombinations'))
            ->with('i', (request()->input('page', 1) - 1) * $literCombinations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $literCombination = new LiterCombination();
        $years = CarYear::all();
        return view('content.liter-combination.create', compact('literCombination','years'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'liter.*' => 'required|string|max:255',
            'car_year_id.*' => 'required',
            'car_brand_id.*' => 'required',
            'car_model_id.*' => 'required',
            'engine_id.*' => 'required',
        ]);
        foreach ($request->liter as $index => $liter) {
            $car = new LiterCombination();
            $car->liter = $liter;
            $car->car_year_id = $request->car_year_id[$index];
            $car->car_brand_id = $request->car_brand_id[$index];
            $car->car_model_id = $request->car_model_id[$index];
            $car->engine_id = $request->engine_id[$index];
            $car->save();
        }
        return redirect()->route('catalog.liter-combinations.index')
            ->with('success', 'LiterCombination created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $literCombination = LiterCombination::find($id);

        return view('content.liter-combination.show', compact('literCombination'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $literCombination = LiterCombination::find($id);

        return view('content.liter-combination.edit', compact('literCombination'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  LiterCombination $literCombination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LiterCombination $literCombination)
    {
        request()->validate(LiterCombination::$rules);

        $literCombination->update($request->all());

        return redirect()->route('catalog.liter-combinations.index')
            ->with('success', 'LiterCombination updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $literCombination = LiterCombination::find($id)->delete();

        return redirect()->route('catalog.liter-combinations.index')
            ->with('success', 'LiterCombination deleted successfully');
    }
}
