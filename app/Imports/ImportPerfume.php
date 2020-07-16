<?php

namespace App\Imports;

use App\Perfume;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportPerfume implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Perfume([
            'name'           => $row[0],
            'img'            => $row[1],
            'position'       => $row[2],
            'company'        => $row[3],
            'country'        => $row[4],
            'education'      => $row[5],
            'website'        => $row[6],
            'about'          => $row[7],
            'number_database'=> $row[8],
            'created_by'     => $row[9],
            'updated_by'     => $row[10],
            'created_at'     => $row[11],
            'updated_at'     => $row[10],
        ]);

    }
}
