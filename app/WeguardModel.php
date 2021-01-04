<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeguardModel extends Model
{
    //
    protected $table = 'db_weguard_contact';
    public $timestamps = false;
    protected $fillable = [
        'Wec_Title',
        'Wec_FName',
        'Wec_FLame',
        'Wec_Email',
        'Wec_Phone',
        'Wec_Tel',
        'Wec_Company',
        'Wec_Job',
        'Wec_Date_Start',
        'Wec_Date_Expire',
        'Wec_Type',
        'Wec_Quantity',
    ];
}
