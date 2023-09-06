<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use DOMDocument;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $table = 'h726d_content';
    protected $guarded = ['id'];
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';
    protected $appends = ['image'];

    protected static function boot()
    {
        parent::boot();

        Article::creating(function($model) {
            $model->images = '{}';
            $model->urls = '{}';
            $model->attribs = '{}';
            $model->metakey = '{}';
            $model->metadesc = '{}';
            $model->metadata = '{}';
            $model->xreference = '{}';
            $model->language = '{}';
            $model->hits = '0';
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'catid', 'id');
    }

    public function getIntrotextAttribute($value){
        return str_replace('src="images/', 'src="https://tnvrod.ru/images/', $value);
    }

    public function getImageAttribute($value){
        $dom = new DOMDocument();
        if($this->introtext) {
            $dom->loadHTML($this->introtext);
            $imgsrc = null;
            $images = $dom->getElementsByTagName('img');
            if ($images->length > 0) {
                $firstImage = $images->item(0);
                $src = $firstImage->getAttribute('src');
                $imgsrc = $src;
            }
            return $imgsrc;
        }
        else{
            return 'https://via.placeholder.com/809x466';
        }
    }
}
