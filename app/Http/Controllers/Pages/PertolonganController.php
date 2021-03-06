<?php

namespace App\Http\Controllers\Pages;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class PertolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session_start();
        $user_id = $_SESSION['id'];

        DB::table('categories')->insert([
            'user_id' => $user_id,
            'title' => $request->title,
            'description' => $request->description,
            'item_name' => $request->item_name,
        ]);

        // Using sweetalert2 for notification
        Alert::success('Success', 'Pertolongan anda berhasil dikirim ke forum kami');
        return redirect('/pages/forum');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        session_start();
        $pertolongan = Category::where('id', $id)->first();
        return view('pages.info', [
            "title" => "Info",
            "pertolongan" => $pertolongan
        ]);
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        session_start();
        // Melakukan Filtering hanya pada model Post (menolong) saja
        $pertolongan = Post::where('id', $id)->first();
        $category = Category::where('id', $pertolongan->category_id)->first();
        return view('pages.detail', [
            "title" => "detail",
            "pertolongan" => $pertolongan,
            "category" => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        session_start();
        // Memasukkan id user ke tabel post sebagai foreign key
        $user_id = $_SESSION['id'];
        // Mengedit atribut pada tabel categories dengan mengubah status menjadi true
        DB::table('categories')->where('id', $id)->update([
            'status' => true,
        ]);

        // Memasukkan data ke dalam database
        DB::table('posts')->insert([
            'user_id' => $user_id,
            'category_id' => $id,
        ]);
        Alert::success('Sukses', 'Terima kasih telah bersedia untuk menolong');
        return redirect('/pages/riwayat');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        session_start();
        $user_id = $_SESSION['id'];
        // Menghapus data pertolongan yang telah dikirimkan
        DB::table('categories')->where('id', $id)->delete();
        Alert::success('Success', 'Pertolongan anda telah dihapus');
        return redirect('/pages/forum');

    }
}
