<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

}
