<?php

namespace App;

use App\Product;
use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Auth;

class ProductsImport implements ToModel, WithHeadingRow, WithValidation
{
    public function model(array $row)
    {
        return new Product([
           'name'     => $row['name'],
           'added_by'    => Auth::user()->user_type == 'seller' ? 'seller' : 'admin',
           'user_id'    => Auth::user()->user_type == 'seller' ? Auth::user()->id : User::where('user_type', 'admin')->first()->id,
           'category_id'    => $row['category_id'],
           'subcategory_id'    => $row['subcategory_id'],
           'subsubcategory_id'    => $row['subsubcategory_id'],
           'brand_id'    => $row['brand_id'],
           'perfumer_id'    => $row['perfumer_id'],
           'barcode'    => $row['barcode'],
           'rebate'    => $row['rebate'],
           'capacity'    => $row['capacity'],
           'gender'    => $row['gender'],
           'sample'    => $row['sample'],
           'marketting'    => $row['marketting'],
           'country'    => $row['country'],
           'subscription'    => $row['subscription'],
           'subcription_price'    => $row['subcription_price'],
           'frag_family'    => $row['frag_family'],
           'frag_type'    => $row['frag_type'],
           'alcohol'    => $row['alcohol'],
           'poduct_length'    => $row['poduct_length'],
           'product_height'    => $row['product_height'],
           'product_width'    => $row['product_width'],
           'pack_type'    => $row['pack_type'],
           'uom'    => $row['uom'],
           'video_provider'    => $row['video_provider'],
           'video_link'    => $row['video_link'],
           'unit_price'    => $row['unit_price'],
           'purchase_price'    => $row['purchase_price'],
           'unit'    => $row['unit'],
           'current_stock' => $row['current_stock'],
           'colors' => json_encode(array()),
           'choice_options' => json_encode(array()),
           'variations' => json_encode(array()),
           'slug' => preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $row['slug'])).'-'.str_random(5),
        ]);
    }

    public function rules(): array
    {
        return [
             // Can also use callback validation rules
             'unit_price' => function($attribute, $value, $onFailure) {
                  if (!is_numeric($value)) {
                       $onFailure('Unit price is not numeric');
                  }
              }
        ];
    }
}
