<?php

namespace App\Models;



use App\Models\User;
use App\Models\Image;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Advertisement extends Model
{
    use HasFactory, Searchable;
    protected $fillable = [
        "title","body","price","cover","user_id","category_id", "category",'is_accepted'
    ];



    public function toSearchbleArray()
    {
        $category = $this->category;
        $array = [
            'id'=> $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'category' => $category,
        ];
        return $array;
    }
    public function user(){
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
    public function images(){
        return $this->hasMany(Image::class);

    }
}
