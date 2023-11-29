<?php

namespace App\Models;

use App\Models\Advertisement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Advertisement extends Model
{
    use HasFactory, Searchable;
    protected $fillable = [
        "title", "body", "price", "cover", "user_id", "category_id",
    ];

   /*  @return array */
    public function toSearchableArray()
    {
        $category = $this->category;
        $array = [
            'id' => $this->id,
            'titile' => $this->title,
            'body' => $this->body,
            'category'=>$category,
        ];
        return $array;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function setAccepted($value)
    {
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public static function toBeRevisionedCount()
    {

        return Advertisement::where('is_accepted', null)->count();
    }
}
