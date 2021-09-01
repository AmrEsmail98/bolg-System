<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Post extends Model
{
    use HasFactory , Sluggable;


    protected $fillable = [
        'title',
        'description',
        'user_id',
    ];
    public function postCreator()
    {
       return $this->belongsTo(User::class, 'user_id');
    }

    public function user()

    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {

        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
