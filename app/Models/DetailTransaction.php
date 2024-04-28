<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaction extends Model
{
    use HasFactory;

    protected $table = 'detail_transactions';

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable   = [
        'nota',
        'id_stuff',
        'count',
        'price',
        'discount',
    ];
}
