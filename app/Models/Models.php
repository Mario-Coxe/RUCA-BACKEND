<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Brands;
class Models extends Model
{
    use HasFactory;

    protected $table = 'models';

    protected $fillable = [
        'name',
        'brand_id',
    ];


    public function brands(): BelongsTo
    {
        return $this->belongsTo(Brands::class, 'brand_id');
    }
}
