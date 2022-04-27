<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Class category dialiaskan dengan class minta tolong agar mengetahui jenis pertolongan
 */
class category extends Model
{
    use HasFactory;
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
