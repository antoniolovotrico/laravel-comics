<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comic extends Model
{
    protected $fillable = ['title','description','price','slug','availability','cover','showim','collection_id'];
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

   /**
    * Get the collection that owns the Comic
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function collection(): BelongsTo
   {
       return $this->belongsTo(Collection::class);
   }

}
