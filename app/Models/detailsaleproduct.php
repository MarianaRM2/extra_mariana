<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailsaleproduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'sale_id',
        'product_id',
    ];
    public function sales() {
        return $this->belongsTo(client::class);
    }
    public function products() {
        return $this->belongsTo(client::class);
    }
}
