<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_model extends Model
{
    use HasFactory;
    protected $table = "category_1";
    protected $primaryKey = "id";
}
