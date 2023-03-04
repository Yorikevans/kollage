<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class korzina extends Model
{
    use HasFactory;
    protected $fillable = ["id_prod", "id_user"];

    public function product()
    {
        return $this->hasOne(product::class, 'id', 'id_prod');
    }
}
