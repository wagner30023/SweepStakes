<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Participant;
use App\Traits\HasUUID;

class Sweepstake extends Model
{
    use HasFactory;
    use HasUUID;

    protected $fillable = [
        "user_id",
        "number_of_winnners",
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
                $model->id = Str::uuid();
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function participants()
    {
        return $this->hasMany(Participant::class);
    }
}
