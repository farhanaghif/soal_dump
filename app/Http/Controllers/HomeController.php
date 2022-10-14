<?php

namespace App\Http\Controllers;

use App\Exports\BanksExport;
use App\Models\Bank;
use App\Models\BankQuestion;
use App\Models\Category;
use App\Models\Option;
use App\Models\Question;
use App\Models\Type;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function export()
    {
        return Excel::download(new BanksExport, 'bank.xlsx');
    }

    public function category()
    {
        $categories = Category::with('banks')->get();
        // return response()->json($categories);
        return view('home', compact('categories'));

    }

    public function banktype()
    {
        // $banks = Bank::with('types')->get();
        $banks = Bank::get()->groupBy('category');
        return response()->json($banks);
        // return view('bank-type', compact('banks'));
    }
    
    public function typequestion($bankId)
    {
        $types = Type::with('bank')->where('bank_id', $bankId)->get();
        // return response()->json($types);
        return view('type-question', compact('types'));
    }

    public function question($bankId,$type)
    {
        $types = Type::with('questions.options')->where('bank_id',$bankId)->where('type',$type)->first();

        // $options = Question::with('options')->get();
        // return response()->json($types);
        return view('question', compact('types'));
    }

}
