<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\shopClient;

class Savdo extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function client($id)
   {
        // dd("bolim");
        return shopClient::find($id)->name;
   }
}
