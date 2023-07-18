<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use \Bkwld\Cloner\Cloneable;

class Slide extends Model {
   protected $guarded = [];
   use \Bkwld\Cloner\Cloneable;
   protected $cloneable_relations = ['sliders'];
   public function sliders () {
    return $this->belongsToMany(Slider::class);
   }
}
