<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Banyak pertolongan dapat diberikan oleh satu rumah sakit
     * kardinalitas: one-to=many
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     * Banyak rumah sakit dapat menolonongi satu pertolongan
     * kardinalitas: one (request) to many (post)
     */
    public function request(){
        return $this->belongsTo(Request::class);
    }
    


   
}
