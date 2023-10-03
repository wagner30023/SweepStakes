<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Sweepstake;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        "sweepstake_id",
        "name",
        "email",
        "awarded_at",
    ];

    public function sweepstakes()
    {
        return $this->belongsTo(Sweepstake::class);
    }


}
