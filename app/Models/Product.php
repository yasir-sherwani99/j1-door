<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, HasSlug;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'sub_title',
        'category_id',
        'description',
        'is_specification',
        'is_feature',
        'features',
        'is_support',
        'support',
        'warranty',
        'is_active',
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->doNotGenerateSlugsOnUpdate();
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /*
    |---------------------------------------------------------------
    | Relations
    |---------------------------------------------------------------
    */
    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }

    public function specifications()
    {
        return $this->hasMany(ProductSpecification::class, 'product_id');
    }

    public function documents()
    {
        return $this->hasMany(ProductDocument::class, 'product_id');
    }

    /*
    |---------------------------------------------------------------
    | Scopes
    |---------------------------------------------------------------
    */
    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    public function scopeResidential($query)
    {
        return $query->whereIn('category_id', [1,2,3,4]);
    }

    public function scopeCommercial($query)
    {
        return $query->whereIn('category_id', [5,6,7,8]);
    }

    public function scopeSort($query, $value)
    {
        return $query->orderBy('created_at', $value);
    }
}
