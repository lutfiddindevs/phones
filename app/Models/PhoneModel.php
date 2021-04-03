<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    public function phone() {
    	return $this->belongsTo(Phone::class);
    }
}
