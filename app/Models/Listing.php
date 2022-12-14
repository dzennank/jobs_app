<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public function scopeFIlter($query, array $filters) {
        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%');
        }   
    }
}
