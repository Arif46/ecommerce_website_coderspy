<?php

namespace App\Exports;

use App\Brand;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportBrand implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Brand::select('name','top', 'slug', 'meta_title', 'meta_description', 'country', 'brands_activity', 'brands_parent_company', 'about', 'website')->get();
    }


    public function headings(): array
    {
        return [
            'Name',
            'Top',
            'Slug',
            'Meta Title',
            'Meta Description',
            'Country',
            'Brands Activity',
            'Brands Parent Company',
            'about',
            'Website'
        ];
    }
}
