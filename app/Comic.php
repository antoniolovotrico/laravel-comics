<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Comic extends Model
{
    protected $fillable = ['title','description','price','slug','availability','cover','showim'];
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get the user associated with the Comic
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function detail(): HasOne
    {
        return $this->hasOne(Detail::class);
    }

    /**
     * The artists that belong to the Comic
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function artists(): BelongsToMany
    {
        return $this->belongsToMany(Artist::class);
    }

    /**
     * The writers that belong to the Comic
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function writers(): BelongsToMany
    {
        return $this->belongsToMany(Writer::class);
    }

}
