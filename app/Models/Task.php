<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    protected $fillable = [
        'status',
        'title',
        'description',
        'is_urgent',
        'preferred_date',
        'location',
        'category_id',
        'subcategory_id',
        'client_id'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function booking(): HasOne
    {
        return $this->hasOne(Booking::class);
    }
}
