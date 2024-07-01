<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Quote extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'zip',
        'product_type',
        'service_type',
        'description',
        'is_view',
    ];

    /*
    |---------------------------------------------------------------
    | Scopes
    |---------------------------------------------------------------
    */
    public function scopeUnseen($query)
    {
        return $query->where('is_view', 0);
    }

    public function scopeSeen($query)
    {
        return $query->where('is_view', 1);
    }

    public function scopeSort($query, $value)
    {
        return $query->orderBy('created_at', $value);
    }

    /*
    |---------------------------------------------------------------
    | Accessors
    |---------------------------------------------------------------
    */
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->toFormattedDateString();
    }
}
