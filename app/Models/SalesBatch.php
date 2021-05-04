<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesBatch extends Model
{
    use HasFactory;

    protected $fillable=array(
        'count',
        'batchFile',
        'user_id'
    );

    public function users(){
        return $this->belongsTo(User::class);
    }
}
