<?php

namespace App\Http\Controllers;

use PDF;
use Auth;
use App\IncomeTax;
use App\BankAccount;
use App\PurchaseUnit;
use App\BankTransaction;
use App\PurchaseProduct;
use Mockery\Matcher\Not;
use App\PurchaseCategory;
use App\PurchaseSubCategory;

use Illuminate\Http\Request;
use PHPExcel_Worksheet_Drawing;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use App\PurchaseSubCategoryProductDetails;

class PurchaseController extends Controller
{
    public function purchaseCategory()
    {
        $categories = PurchaseCategory::all();
        return view('purchase.category.index', compact('categories'));
    }
    public function purchaseCategoryCreate()
    {
        return view('purchase.category.create');
    }
    public function purchaseCategoryStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',

        ]);


        $category = new PurchaseCategory();
        $category->name = $request->category;
        $category->active_status = $request->active_status;
        $category->created_by = Auth()->id();
        if ($category->save()) {
            flash(__('Purchase Category has been inserted successfully'))->success();
            return redirect()->route('purchase.category');
        }
        flash(__('Something went wrong'))->error();
        return back();
    }
    public function purchaseCategoryEdit($id)
    {
        $category = PurchaseCategory::findOrFail(decrypt($id));
        return view('purchase.category.edit', compact('category'));
    }
    public function purchaseCategoryUpdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',

        ]);

        $category = PurchaseCategory::find($id);
        $category->name = $request->category;
        $category->active_status = $request->active_status;
        $category->updated_by = Auth()->id();
        if ($category->save()) {
            flash(__('Purchase Category has been updated successfully'))->success();
            return redirect()->route('purchase.category');
        }
        flash(__('Something went wrong'))->error();
        return back();
    }
    public function purchaseCategoryDestroy($id)
    {
        $category = PurchaseCategory::find($id);
        $category->delete();
        flash(__('Purchase category Info Deleted successfully'))->success();
        return back();
    }
    public function purchaseSubCategory()
    {
        try {
            $title="Manage Purchase Subcategories";
            $categories = PurchaseSubCategory::all(); 
            return view('purchase.subcategory.index', compact('categories', 'title'));
        } catch (\Throwable $th) {
            Log::info($th->getMessage());
            return redirect()->back();
        }
    }
    public function purchaseSubCategoryCreate()
    {
        $categories = PurchaseCategory::all();
        return view('purchase.subcategory.create', compact('categories'));
    }
    public function purchaseSubCategoryStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',

        ]);


        $subcategory = new PurchaseSubCategory();
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category;
        $subcategory->active_status = $request->active_status;
        $subcategory->created_by = Auth()->id();
        if ($subcategory->save()) {
            flash(__('Purchase Category has been inserted successfully'))->success();
            return redirect()->route('purchase.subcategory');
        }
        flash(__('Something went wrong'))->error();
        return back();
    }
    public function purchaseSubCategoryEdit($id)
    {
        $categories = PurchaseCategory::all();
        $subcategory = PurchaseSubCategory::findOrFail(decrypt($id));
        return view('purchase.subcategory.edit', compact('subcategory', 'categories'));
    }





    public function purchaseSubCategoryUpdate(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        $subcategory = PurchaseSubCategory::find($request->sub_id);
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category;
        $subcategory->active_status = $request->active_status;
        $subcategory->updated_by = Auth()->id();
        if ($subcategory->save()) {
            flash(__('Purchase subcategory has been updated successfully'))->success();
            return redirect()->route('purchase.subcategory');
        }
        flash(__('Something went wrong'))->error();
        return back();
    }



    public function purchaseSubCategoryDestroy($id)
    {
        $category = PurchaseSubCategory::find($id);
        $category->delete();
        flash(__('Purchase subcategory Info Deleted successfully'))->success();
        return back();
    }

    public function purchaseUnit()
    {
        try {
            $units = PurchaseUnit::all();
            return view('purchase.unit.index', compact('units'));
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
    public function purchaseUnitCreate()
    {
        return view('purchase.unit.create');
    }
    public function purchaseUnitStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',

        ]);


        $unit = new PurchaseUnit();
        $unit->name = $request->unit;
        $unit->active_status = $request->active_status;
        $unit->created_by = Auth()->id();
        if ($unit->save()) {
            flash(__('Purchase unit has been inserted successfully'))->success();
            return redirect()->route('purchase.unit');
        }
        flash(__('Something went wrong'))->error();
        return back();
    }
    public function purchaseUnitEdit($id)
    {
        $unit = PurchaseUnit::findOrFail(decrypt($id));
        return view('purchase.unit.edit', compact('unit'));
    }
    public function purchaseUnitUpdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',

        ]);

        $unit = PurchaseUnit::find($id);
        $unit->name = $request->unit;
        $unit->active_status = $request->active_status;
        $unit->updated_by = Auth()->id();
        if ($unit->save()) {
            flash(__('Purchase unit has been updated successfully'))->success();
            return redirect()->route('purchase.unit');
        }
        flash(__('Something went wrong'))->error();
        return back();
    }
    public function purchaseUnitDestroy($id)
    {
        $unit = PurchaseUnit::find($id);
        $unit->delete();
        flash(__('Purchase unit Info Deleted successfully'))->success();
        return back();
    }
    public function purchaseProduct()
    {
        $products = PurchaseProduct::all();
        $subcategories = PurchaseSubCategoryProductDetails::all();
        return view('purchase.product.index', compact('products', 'subcategories'));
    }
    public function purchaseProductCreate()
    {
        $categories = PurchaseCategory::all();
        $subcategories = PurchaseSubCategory::all();
        $units = PurchaseUnit::all();
        return view('purchase.product.create', compact('categories', 'subcategories', 'units'));
    }
    public function purchaseProductStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'code' => 'required',
            'stock' => 'required',
            'category' => 'required',
            'unit' => 'required',

        ]);


        $product = new PurchaseProduct();
        $product->name = $request->name;
        $product->code = $request->code;
        $product->stock = $request->stock;
        $product->active_status = $request->active_status;
        $product->category_id = $request->category;
        $product->unit_id = $request->unit;
        $product->created_by = Auth()->id();
        $result = $product->save();
        if ($request->subcategory != "") {
            $subcategories = $request->subcategory;
            foreach ($subcategories as $sub) {
                $s = new PurchaseSubCategoryProductDetails();
                $s->subcategory_id = $sub;
                $s->purchase_product_id = $product->id;
                $s->save();
            }
        }
        if ($result) {
            flash(__('Purchase product has been inserted successfully'))->success();
            return redirect()->route('purchase.products');
        }
        flash(__('Something went wrong'))->error();
        return back();
    }
    public function purchaseProductEdit($id)
    {
        $categories = PurchaseCategory::all();
        $subcategories = PurchaseSubCategory::all();
        $units = PurchaseUnit::all();
        $product = PurchaseProduct::findOrFail(decrypt($id));
        return view('purchase.product.edit', compact('product', 'categories', 'subcategories', 'units'));
    }
    public function purchaseProductUpdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'code' => 'required',
            'stock' => 'required',
            'category' => 'required',
            'unit' => 'required',

        ]);


        $product = PurchaseProduct::find($id);
        $product->name = $request->name;
        $product->code = $request->code;
        $product->stock = $request->stock;
        $product->active_status = $request->active_status;
        $product->category_id = $request->category;
        $product->unit_id = $request->unit;
        $product->created_by = Auth()->id();
        $result = $product->save();
        if ($request->subcategory != "") {
            $subcategories = $request->subcategory;
            foreach ($subcategories as $sub) {
                $s = PurchaseSubCategoryProductDetails::where('purchase_product_id', $product->id)

                    ->update(['subcategory_id' => $sub]);
            }
        }
        if ($result) {
            flash(__('Purchase product has been Updated successfully'))->success();
            return redirect()->route('purchase.products');
        }
        flash(__('Something went wrong'))->error();
        return back();
    }
    public function purchaseProductDestroy($id)
    {
        $product = PurchaseProduct::find($id);
        $product->delete();
        flash(__('Purchase product Info Deleted successfully'))->success();
        return back();
    }
}
