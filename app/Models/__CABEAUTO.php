<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class __CABEAUTO extends Model
{
    use HasFactory;
    protected $table ='__CABEAUTO';
    protected $fillable = [
        'NOMCLI',
        'REFERENCIA',
        'CODCLI',
        'SERIE'
    ];
}
