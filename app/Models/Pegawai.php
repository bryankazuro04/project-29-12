<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeSearch($query, array $filters) {
        $query->when($filters['search'] ?? false, function($query, $filters) {
            return $query->where(function($query) use($filters) {
                $query->where('nama', 'like', '%' . $filters . '%');
            });
        });
    }
}