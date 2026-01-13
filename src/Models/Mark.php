<?php

declare(strict_types=1);

namespace SKulich\Markable\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Mark extends Model
{
    protected $fillable = [
        'user_id',
        'markable_id',
        'markable_type',
        'type',
        'meta',
    ];

    protected $casts = [
        'meta' => 'array',
    ];

    public function markable(): MorphTo
    {
        return $this->morphTo();
    }
}
