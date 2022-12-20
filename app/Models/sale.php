<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
    ];
    public function clients() {
        return $this->belongsTo(client::class);
    }
    public function detailsaleproducts() {
        return $this->hasMany(detailsaleproduct::class);
    }



}
