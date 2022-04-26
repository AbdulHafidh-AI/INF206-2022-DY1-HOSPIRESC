<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class User dialiaskan dengan class Rumah Sakit
 * @package App\Models
 * @mixin Authenticatable
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Fields
    private $id;
    private $name;
    private $email;
    private $password;
    private $kode_user;
    private $alamat;
    private $no_telp;
    private $no_izin;

    /**
     * satu user atau satu rumah sakit dapat memberikan banyak bantuan
     * kardinalitas: one(user) to many(post)
     */
    public function posts(){
        return $this->hasMany(Post::class);
    }

    /**
     * satu user atau satu rumah sakit dapat menerima banyak bantuan
     * kardinalitas: one-to=many
     */
    public function requests(){
        return $this->hasMany(Request::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'kode_user',
        'alamat',
        'no_telp',
        'no_izin',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Sebuah Method untuk mendapatakan nama dari tabel yang digunakan.
     * @var string 
     * @return name of table in datagbase
     */
    public function getName($id){
        $user = User::find($id);
        return $user->name;

    }

    /**
     * Sebuah method untuk mendapatkan email dari tabel yang digunakan.
     * @var string
     * @return email of table in datagbase
     */
    public function getEmail($id){
        $user = User::find($id);
        return $user->email;
    }

    /**
     * Sebuah Method untuk mendapatkan nomor izin dari tabel yang digunakan.
     * @var int
     * @return no_izin of table in datagbase
     */
    public function getNoIzin($id){
        $user = User::find($id);
        return $user->no_izin;
    }

    /**
     * Sebuah Method untuk mendapatkan nomor telepon dari tabel yang digunakan.
     * @var string
     * @return no_telp of table in datagbase
     */
    public function getNoTelp($id){
        $user = User::find($id);
        return $user->no_telp;
    }
    
}
