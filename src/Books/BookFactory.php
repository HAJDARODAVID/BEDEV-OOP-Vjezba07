<?php

namespace App\Books;

use App\Books\Book;

class BookFactory{
    public static function create($name, $author){
        return new Book($name, $author);
    }
}