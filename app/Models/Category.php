<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $table = 'h726d_categories';
    protected $guarded = ['id'];
    const CREATED_AT = 'created_time';
    const UPDATED_AT = 'modified_time';

    protected static function boot()
    {
        parent::boot();

        Category::creating(function($model) {
            $model->params = '{}';
            $model->metadesc = '';
            $model->metakey = '';
            $model->metadata = '';
            $model->language = '*';
            $model->note = '';
        });
    }

    public function articles()
    {
        return $this->hasMany(Article::class, 'catid', 'id');
    }
}
