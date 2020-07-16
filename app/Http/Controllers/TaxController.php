<?php

namespace App\Http\Controllers;

use App\BankAccount;
use App\BankTransaction;
use App\IncomeTax;
use Auth;
use PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Mockery\Matcher\Not;
use Maatwebsite\Excel\Facades\Excel; 
use Illuminate\Support\Facades\Crypt;
use PHPExcel_Worksheet_Drawing;

class TaxController extends Controller
{


  
            public function taxindex()
            {
                $IncomeTax = IncomeTax::all();
                return view('tax.index', compact('IncomeTax'));
            }


        public function incometaxPdf(){
            $IncomeTax = IncomeTax::all();
             $pdf = PDF::loadView('tax.income_tax_pdf', compact('IncomeTax'))->setPaper('a4', 'portrait');  
            return $pdf->download('incometax.pdf');


           }
     
        public function import(Request $request){
           Excel::import(new IncomeTax(), request()->file('file'));
         
          return back();
        }


    public function export(){
        return Excel::download(new IncomeTax(), 'income tax.xlsx');
    }


    public function taxcreate()
    {
        
        return view('tax.create');
    }

    public function taxstore(Request $request)

    {
       // dd($request);exit;
            $validator = Validator::make($request->all(), [
            'start_amount' => 'required',
            'end_amount' => 'required',
            'tax_rate' => 'required',
        ]);
        $IncomeTax = new IncomeTax;
        $IncomeTax->start_amount = $request->start_amount;
        $IncomeTax->end_amount = $request->end_amount;
        $IncomeTax->tax_rate = $request->tax_rate;
        $IncomeTax->active_status = $request->active_status;
       
 
            if($IncomeTax->save()){
                flash(__('Tax has been inserted successfully'))->success();
                return redirect()->route('tax.index');
            }
             flash(__('Something went wrong'))->error();
        return back();
        }

       
    public function taxedit($id)
    {
        
        $IncomeTax = IncomeTax::findOrFail(decrypt($id));
        return view('tax.edit', compact('IncomeTax'));
    }

   
    public function taxupdate(Request $request,$id)
    {

        $IncomeTax = IncomeTax::find($id);
        $IncomeTax = new IncomeTax;
        $IncomeTax->start_amount = $request->start_amount;
        $IncomeTax->end_amount = $request->end_amount;
        $IncomeTax->tax_rate = $request->tax_rate;
        $IncomeTax->active_status = $request->active_status;

   

        if($IncomeTax->save()){
            flash(__('Tax has been Updated successfully'))->success();
            return redirect()->route('tax.index');
        }
                else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }

    public function taxdestroy($id)
    {
        $IncomeTax = IncomeTax::find($id);
        $IncomeTax->delete();
        flash(__('Tax Info Deleted successfully'))->success();
        return redirect()->route('tax.index');
    }







  
}
