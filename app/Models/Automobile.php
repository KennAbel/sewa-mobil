<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automobile extends Model
{
    use HasFactory;

    protected $table = 'automobile';
    protected $primaryKey = 'Automobile_ID';
    public $timestamps = false; // Jika tabel tidak memiliki kolom created_at dan updated_at

    protected $fillable = [
        'Automobile_Year',
        'Automobile_Marque',
        'Automobile_Model_Name',
        'Automobile_Color',
        'Automobile_Code',
        'Transmission',
        'Status',
        'RentPerDay',
        'RentPerHour',
        'Actions',
    ];
}

