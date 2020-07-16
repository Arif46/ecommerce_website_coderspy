<?php

namespace App\Exports;

use App\Perfume;
use Maatwebsite\Excel\Concerns\FromCollection; 
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportPerfume implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Perfume::select('name','position','company','country','education','website','about')->get();
    }
    public function headings(): array
    {
        return [
            'Name',
            'Position',
            'Company',
            'Country',
            'Education',
            'Website',
            'About',
        ];
    }
}
