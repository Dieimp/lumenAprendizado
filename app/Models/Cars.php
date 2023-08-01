<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model{


    protected $table = 'TB_CARS';

    protected $fillable = [
        'nome',
        'descricao',
        'modelo',
        'data_Modelo'

    ];

    protected $casts = [
        'date' => 'Timestamp'
    ];

    public $timestamps = false;




}
