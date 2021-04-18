<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kategori',
        'merek',
        'harga',
        'stok'
        
    ];

    public static function getDataBooks(){
        $books = Book::all();
        $books_filter = [];
        $no = 1;

        for($i=0; $i<$books->count();$i++){
            $books_filter[$i]['no'] = $no++;
            $books_filter[$i]['nama'] = $books[$i]->nama;
            $books_filter[$i]['kategori'] = $books[$i]->kategori;
            $books_filter[$i]['merek'] = $books[$i]->merek;
            $books_filter[$i]['harga'] = $books[$i]->harga;
            $books_filter[$i]['stok'] = $books[$i]->stok;
            

        }
        return $books_filter;
    }
}
