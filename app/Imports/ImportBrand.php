<?php

namespace App\Imports;

use App\Brand;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportBrand implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Brand([
            'name'           => $row[0],
            'top'        => $row[1],
            'slug'        => $row[2],
            'meta_title'      => $row[3],
            'meta_description'        => $row[4],
            'country'          => $row[5],
            'brands_activity'=> $row[6],
            'brands_parent_company'     => $row[7],
            'about'     => $row[8],
            'website'     => $row[9],

            'name','top', 'slug', 'meta_title', 'meta_description', 'country', 'brands_activity', 'brands_parent_company', 'about', 'website'
        ]);
    }
}
