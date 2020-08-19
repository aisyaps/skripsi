 <?php

namespace App\Exports;
use App\Pktkse;
use Maatwebsite\Excel\Concerns\FromCollection;

class PktkseExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pktkse::all();
    }
}
