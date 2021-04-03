<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    
    protected $fillable = ['name', 'founded', 'description'];

    public function phoneModels() {
    	return $this->hasMany(PhoneModel::class);
    }
}
