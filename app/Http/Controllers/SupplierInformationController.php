<?php

namespace App\Http\Controllers;

use App\Supplier;
use Auth;
use Illuminate\Http\Request;
use App\IncomeTax;

class SupplierInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = Supplier::all();
        return view('supplier.index', compact('supplier'));
    }



    public function suppliers()
    {
        try {
            $supplier = Supplier::all();
            return view('supplier.index', compact('supplier'));
        } catch (\Throwable $th) {
            flash(__('Something went wrong'))->error();
            return back();
        }
    }


    public function suppliercategory()
    {
        try {
            $supplier = Supplier::all();
            return view('supplier.index', compact('supplier'));
        } catch (\Throwable $th) {
            flash(__('Something went wrong'))->error();
            return back();
        }
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supplier = new Supplier();
        $supplier->supplier_name = $request->supplier_name;
        $supplier->contact_name = $request->contact_name;
        $supplier->designation = $request->designation;
        $supplier->address = $request->address;
        $supplier->city = $request->city;
        $supplier->country = $request->country;
        $supplier->mobile_number = $request->mobile_number;
        $supplier->telephone_number = $request->telephone_number;
        $supplier->fax_number = $request->fax_number;
        $supplier->email = $request->email;
        $supplier->trade_license = $request->trade_license;
        $supplier->vat_reg_no = $request->vat_reg_no;
        $supplier->vat_rate = $request->vat_rate;
        $supplier->status = 1;
        $supplier->created_by = Auth::user()->id;
        $supplier->save();

        if ($supplier->save()) {
            flash(__('Supplier has been inserted successfully'))->success();
            return redirect()->route('supplier.index');
        }
        flash(__('Something went wrong'))->error();
        return back();
    }

    public function search(Request $request)
    {
        $supplier = Supplier::where('supplier_name', 'like', '%' . $request->search . '%');
        return view('supplier.index', compact('supplier'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SupplierInformation  $supplierInformation
     * @return \Illuminate\Http\Response
     */
    public function show(SupplierInformation $supplierInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SupplierInformation  $supplierInformation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::findOrFail(decrypt($id));
        return view('supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SupplierInformation  $supplierInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id);
        $supplier->supplier_name = $request->supplier_name;
        $supplier->contact_name = $request->contact_name;
        $supplier->designation = $request->designation;
        $supplier->address = $request->address;
        $supplier->city = $request->city;
        $supplier->country = $request->country;
        $supplier->mobile_number = $request->mobile_number;
        $supplier->telephone_number = $request->telephone_number;
        $supplier->fax_number = $request->fax_number;
        $supplier->email = $request->email;
        $supplier->trade_license = $request->trade_license;
        $supplier->vat_reg_no = $request->vat_reg_no;
        $supplier->vat_rate = $request->vat_rate;
        $supplier->status = $request->status;
        $supplier->updated_by = Auth::user()->id;
        $supplier->save();

        if ($supplier->save()) {
            flash(__('Supplier has been updated successfully'))->success();
            return redirect()->route('supplier.index');
        }
        flash(__('Something went wrong'))->error();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SupplierInformation  $supplierInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();
        flash(__('Supplier deleted successfully'))->success();
        return redirect()->route('supplier.index');
    }
}
