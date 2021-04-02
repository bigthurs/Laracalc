<?php

namespace App\Http\Controllers;

use App\Calculation;
use Illuminate\Http\Request;

class CalculationController extends Controller
{
    public function index()
    {
        $calculations = Calculation::latest()->paginate(10);

        return view('calc.index', [
            'calculations' => $calculations
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'input_1' => 'required|max:255',
            'input_2' => 'required|max:255',
            'operator' => 'required'
        ]);

        switch ($request->operator) {
            case '+':
                $result = $request->input_1 + $request->input_2;
                break;
            case '-':
                $result = $request->input_1 - $request->input_2;
                break;
            case '*':
                $result = $request->input_1 * $request->input_2;
                break;
            case '/':
                $result = $request->input_1 / $request->input_2;
                break;
        }

        Calculation::create([
            'input_1' => $request->input_1,
            'input_2' => $request->input_2,
            'operator' => $request->operator,
            'result' => $result,
        ]);

        return back()->with('success', $result);
    }
}
