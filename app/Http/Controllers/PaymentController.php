<?php

namespace App\Http\Controllers;
use App\Models\Expense;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // public function paid()
    // {    
    //     return view('payment_paid.payment_paid_view');
    // }
    public function addExpense(Request $request)
    {
        // dd($request);
            $request->validate([
                'name' => 'required|string',
                'type' => 'required',
                'description' => 'required',
                'amount' => 'required',
                'date' => 'required'
            ]);
          $expense = Expense::create($request->only('name', 'type','description','amount','date'));
          return redirect()->back()->with('message', 'Expense Added Successfully');
    }
    public function viewExpense(Request $request)
    {
        dd($request);
        $expense = Expense::where('is_delete' , 0)->get();
       
        return view('payment_paid.payment_paid_view', compact('expense'));
    }
   
}
