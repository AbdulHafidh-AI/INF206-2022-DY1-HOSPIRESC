<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post dialiaskan dengan class menolong
 * @package App\Models
 * @mixin Model
 * 
 */
class Post extends Model
{
    use HasFactory;

    // Fields
    private $id;
    private $user_id;
    private $request_id;

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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function request(){
        return $this->belongsTo(Request::class);
    }
    
    /**
     * Sebuah Method untuk mengambil data dari tabel posts
     * @param Unused
     * @return Array<int, string> Meretrieve semua data dari tabel posts
     */
    public function getPosts(){
        return $this->all();
    }

    /**
     * Sebuah Method untuk menambahkan data ke tabel posts
     * @param $user_id, $request_id
     * @return nothing (void)
     */
    public function addPost($user_id, $request_id){
        $this->user_id = $user_id;
        $this->request_id = $request_id;
        $this->save();
    }

    /**
     * Sebuah Method untuk menghapus data dari tabel posts
     * 
     */
    public function deletePost($id){
        $this->where('id', $id)->delete();
    }
    
    


   
}
