<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bolim;

class Tavar extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $table = 'bolims';

   public function bolim($id)
   {
        // dd("bolim");
        return Bolim::find($id)->name;
   }
}


?>
