<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Writer extends Model
{
    protected $fillable = ['name'];
    /**
     * The comics that belong to the Writer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function comics(): BelongsToMany
    {
        return $this->belongsToMany(Comic::class);
    }
}
