<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = "skills";
    protected $fillable = [
        "name", "cv_id", "level"
    ];

    public function cv()
    {
        return $this->belongsTo(CV::class);
    }
}