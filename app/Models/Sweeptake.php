<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Sweeptake extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "numberif_winners",
        "end_date",
        "description",
    ];

    protected $keyType = "string";

    public $incrementing = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function(Model $model){
            if(empty($model->id)){
                $model->id = Str::uuid()->toString();
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
