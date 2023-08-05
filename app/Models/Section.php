<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $guarded = ['id'];

    public function pages(){
        return $this->hasMany(Page::class);
    }
}
