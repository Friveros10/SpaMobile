<?php

namespace App\Exports;

use App\registros;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{

    public function collection()
    {
        return registros::all();
    }
}
