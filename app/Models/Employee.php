<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    protected $fillable = ["name","telegram_name","telegram_id","clinic_id","request_id"];

    public function clinic():BelongsTo
    {
        return $this->belongsTo(Clinic::class);
    }
    public function request():HasMany
    {
        return $this->hasMany(Request::class);
    }
}
