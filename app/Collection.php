<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $fillable = ['title','preview'];

    /**
     * Get all of the comics for the Collection
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comics(): HasMany
    {
        return $this->hasMany(Comic::class);
    }
}
