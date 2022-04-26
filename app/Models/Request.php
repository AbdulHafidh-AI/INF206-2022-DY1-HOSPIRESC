<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Request dialiaskan dengan class Mengajukan Pertolongan
 * @package App\Models
 * @mixin Model
 */
class Request extends Model
{
    use HasFactory;

    // FIelds
    private $id;
    private $user_id;
    private $title;
    private $description;
    private $item_name;
    

    /**
     * Banyak Pengajuan dapat diberikan oleh satu rumah sakit
     * kardinalitas: one(user) to many(request)
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     * Satu pengajuan dapat ditolong oleh banyak rumah sakit
     * kardinalitas: one (request) to many (post)
     */
    public function posts(){
        return $this->hasMany(Post::class);
    }

   



}
