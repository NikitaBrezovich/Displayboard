<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Slider extends Model {
   protected $guarded = [];

   public function slides () {
    return $this->belongsToMany(Slide::class);
   }
}
