<?php

namespace App;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;
use App\Suplier;

class Suplier extends Model
{
    use AutoNumberTrait;
    
    protected$table = 'supliers';
    protected$guarded = [];

    public function getAutoNumberOptions()
    {
        return [
            'kode_suplier' => [
                'format' => function() {
                    return 'SPLR/'.date('Ymd').'/?';
                }, 'length' => 5]
            ];
    }

    public function suplier()
    {
        return $this->belongsTo(Suplier::class);
    }
}

