<?php

namespace App\Exports;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\dst_lrms_rent_agreements;
use Maatwebsite\Excel\Concerns\FromCollection;

class FactsheetExcelExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return dst_lrms_rent_agreements::all();
    }

   
}
