<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, HasUlids, SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_id',
        'content_id',
        'title',
        'is_active',
        'published_at',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'meta_canonical_url',
        'og_title',
        'og_description',
        'og_type',
        'og_image',
        'og_url',
        'twitter_title',
        'twitter_description',
        'twitter_image',
        'twitter_card'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
