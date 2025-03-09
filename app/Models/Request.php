<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Request extends Model
{
    protected $fillable = ["collect_date","employee_id","comment","status"];
    public function employee():BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
