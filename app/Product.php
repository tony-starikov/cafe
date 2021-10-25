<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
//    public function getCategory()
//    {
//        return Category::find($this->category_id);
//    }

    protected $fillable = ['category_id', 'name', 'code', 'description', 'image', 'price', 'new', 'sale'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPriceForCount()
    {
        if (is_null($this->pivot)) {
            return $this->price;
        }
        return $this->pivot->count * $this->price;
    }

    public function setNewAttribute($value)
    {
        $this->attributes['new'] = $value === 'on' ? 1 : 0;
    }

    public function setSaleAttribute($value)
    {
        $this->attributes['sale'] = $value === 'on' ? 1 : 0;
    }

    public function isNew()
    {
        return $this->new === 1;
    }

    public function isSale()
    {
        return $this->sale === 1;
    }
}
