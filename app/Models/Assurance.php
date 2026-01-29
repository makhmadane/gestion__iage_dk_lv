<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assurance extends Model
{
    use HasFactory;

    public function typeIage()
    {
        return $this->belongsTo(TypeAssurance::class, 'type_assurance_id');
    }
}
