<?php

namespace App\Http\Controllers;

use App\BankAccount;
use App\BankTransaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Mockery\Matcher\Not;

class BankController extends Controller
{

    public function bankledgerreport()
    {
        $BankAccount = BankAccount::all();
        return view('bank.bank_ledger_report', compact('BankAccount'));
    }

    public function getBankLedger(){
        $start_date = Input::get('start_date');
        $end_date = Input::get('end_date');
        $bank_id = Input::get('bank_id');

        if($end_date < $start_date){
            flash(__('Date not correct'))->error();
            return redirect()->back(); 
        }

        if($bank_id == null){
            flash(__('Bank not select'))->error();
            return redirect()->back(); 
        }

        $ledgers = BankTransaction::with(['bankAccount'])
                        ->whereBetween('date', [$start_date, $end_date])
                        ->where('bank_id', $bank_id)
                        ->get();

                     
        $BankAccount = BankAccount::all();
        return view('bank.bank_ledger_report', compact('BankAccount','ledgers'));
    }
  
    public function bankindex()
    {
        $BankAccount = BankAccount::all();
        return view('bank.index', compact('BankAccount'));
    }


    public function bankcreate()
    {
        $BankAccount = BankAccount::all();
        return view('bank.create', compact('BankAccount'));
    }

    public function bankstore(Request $request)

    {
       // dd($request);exit;
            $validator = Validator::make($request->all(), [
            'bank_name' => 'required',
            'ac_name' => 'required',
            'ac_number' => 'required',
        ]);
        $bank = new BankAccount;
        $bank->bank_name = $request->bank_name;
        $bank->ac_name = $request->ac_name;
        $bank->ac_number = $request->ac_number;
        $bank->branch = $request->branch;
        $bank->active_status = $request->active_status;
       
  
         if($request->hasFile('Signature')){
            $bank->Signature = $request->file('Signature')->store('public/uploads/signature');
        }
   
            if($bank->save()){
                flash(__('Bank has been inserted successfully'))->success();
                return redirect()->route('bank.index');
            }
             flash(__('Something went wrong'))->error();
        return back();
        }

       
    public function bankedit($id)
    {
        
        $bank = BankAccount::findOrFail(decrypt($id));
        return view('bank.edit', compact('bank'));
    }

   
    public function bankupdate(Request $request,$id)
    {

        $bank = BankAccount::find($id);
        $bank->bank_name = $request->bank_name;
        $bank->ac_name = $request->ac_name;
        $bank->ac_number = $request->ac_number;
        $bank->branch = $request->branch;
        $bank->active_status = $request->active_status;

        if($request->hasFile('Signature')){
            $bank->Signature = $request->file('Signature')->store('public/uploads/signature');
        }

        if($bank->save()){
            flash(__('Bank has been Updated successfully'))->success();
            return redirect()->route('bank.index');
        }
                else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }

    public function bankdestroy($id)
    {
        $bank = BankAccount::find($id);
        $bank->delete();
        flash(__('Bank Deleted successfully'))->success();
        return redirect()->route('bank.index');
    }


        public function banktransactionindex()
    {
        $BankTransaction = BankTransaction::with('bankAccount')->get();
        return view('bank.transaction_index', compact('BankTransaction'));
    }


    public function banktransactioncreate()
    {
        $BankAccount = BankAccount::all();
        return view('bank.transaction_create', compact('BankAccount'));
    }

     public function banktransactionstore(Request $request)

    {
       // dd($request);exit;
            $validator = Validator::make($request->all(), [
            'bank_id' => 'required',
            'transaction_type' => 'required',
            'amount' => 'required',
        ]);
        $bank = new BankTransaction;
        $bank->date = $request->date;
        $bank->bank_id = $request->bank_id;
        $bank->deposit_type = $request->deposit_type;
        $bank->amount = $request->amount;
        $bank->transaction_type = $request->transaction_type;
        $bank->description = $request->description;
        $bank->active_status = $request->active_status;
       
 
            if($bank->save()){
                flash(__('Bank Transaction has been inserted successfully'))->success();
                return redirect()->route('banktransaction.index');
            }
             flash(__('Something went wrong'))->error();
        return back();
        }

       
    public function banktransactionedit($id)
    {
        $BankAccount = BankAccount::all();
        $BankTransaction = BankTransaction::findOrFail(decrypt($id));
        return view('bank.transaction_edit', compact('BankTransaction','BankAccount'));
    }

   
    public function banktransactionupdate(Request $request,$id)
    {

        $bank = BankTransaction::find($id);
        $bank->date = $request->date;
        $bank->bank_id = $request->bank_id;
        $bank->deposit_type = $request->deposit_type;
        $bank->amount = $request->amount;
        $bank->transaction_type = $request->transaction_type;
        $bank->description = $request->description;
        $bank->active_status = $request->active_status;

        if($bank->save()){
            flash(__('Bank Transaction has been inserted successfully'))->success();
            return redirect()->route('banktransaction.index');
        }
                else{
            flash(__('Something went wrong'))->error();
            return back();
        }
    }

        public function banktransactiondestroy($id)
    {
        $bank = BankTransaction::find($id);
        $bank->delete();
        flash(__('Bank Transaction Deleted successfully'))->success();
        return redirect()->route('banktransaction.index');
    }
}
