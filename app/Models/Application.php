<?php

namespace App\Models;

use App\Models\User;
use App\Models\Position;
use App\Models\Education;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Application extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function certificate()
    {
        return $this->hasMany(Certificate::class);
    }

    public function interviewer()
    {
        return $this->belongsTo(User::class, 'interviewer_id', 'id');
    }
}
