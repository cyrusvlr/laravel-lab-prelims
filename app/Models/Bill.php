<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $table = 'cyrus_bill';

    protected $fillable = [
        'Firstname',
        'Lastname',
        'Middle_Initial',
        'Email',
        'Contact_No',
        'Street',
        'City',
        'Province',
        'Country',
        'ZIP',
        'No_of_watts',
        'Sub_Type',
        'Energy_charge',
        'Disconnection',
        'Late_Payment',
        'Total_Bill',
    ];
}
