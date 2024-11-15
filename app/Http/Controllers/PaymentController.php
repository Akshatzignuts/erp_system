<?php

namespace App\Http\Controllers;
use App\Models\Expense;
use Yajra\DataTables\DataTables;
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
          return response()->json($expense);
    }
    public function viewExpense(Request $request)
    {
        // dd($request);
        $expense = Expense::select('id', 'name', 'type', 'description', 'amount', 'date')
        ->where('is_delete', 0)
        ->get();
    
        return DataTables::of($expense)
        ->addColumn('action', function($expense) {
            // Generate the Edit button with a link to the Edit page
            $editUrl = route('expense.edit', $expense->id);
            $editButton = '<a href="' . $editUrl . '" class="btn btn-primary btn-round">Edit</a>';
    
            // Generate the Delete button with a data-id attribute for the expense
            $deleteButton = '<button class="delete-btn btn btn-danger btn-round" data-id="' . $expense->id . '">Delete</button>';
    
            // Return both buttons together in one column
            return $editButton . ' ' . $deleteButton;
        })
        ->rawColumns(['action'])  // This ensures that the HTML content in the 'option' column is rendered as HTML
        ->make(true);
       
    }
    public function editExpense()
    {

    }
   
}
