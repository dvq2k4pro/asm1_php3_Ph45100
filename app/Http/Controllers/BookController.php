<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function home(){
        // 8 sản phẩm có giá cao nhất 
        $bookdesc = DB::table('books')
            ->orderByDesc('Price')
            ->limit(4)
            ->get();
        // 8 sản phẩm có giá thấp nhất
        $books =  DB::table('books')
            ->orderBy('Price')
            ->limit(8)
            ->get();
        // hiển thị ra view
        $list = DB::table('books')
        
        ->get();
        return view('home', compact('bookdesc','books','list'));
    }
    //Hiển thị danh sách bài viết theo danh mục categories
    public function list($id)
    {
        $books = DB::table('books')
            ->where('category_id', $id)
            ->get();

        return view('list-product', compact('books'));
    }
    //Hiển thị chi tiết bài viết
    public function detail($id)
    {
        $book = DB::table('books')
            ->where('id', $id)
            ->first();

        return view('detail', compact('book'));
    }
    public function shop(){
        // 8 sản phẩm có giá cao nhất 
        $bookdesc = DB::table('books')
        ->orderByDesc('Price')
        ->limit(12)
        ->get();
        // 8 sản phẩm có giá thấp nhất
        $books =  DB::table('books')
        ->orderBy('Price')
        ->limit(12)
        ->get();
        // hiển thị ra view
        return view('shop', compact('bookdesc','books'));
        }
}
