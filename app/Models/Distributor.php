<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'category',
        'email',
        'phone',
        'website',
        'address',
        'latitude',
        'longitude',
        'description',
        'is_active',
    ];

    /*
    |---------------------------------------------------------------
    | Scopes
    |---------------------------------------------------------------
    */
    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
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
