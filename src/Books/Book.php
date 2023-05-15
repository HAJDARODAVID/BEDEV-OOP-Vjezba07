<?php

namespace App\Books;

class Book{
    private $bookName;
    private $bookAuthor;

    public function __construct($name, $author){
        $this->bookName = $name;
        $this->bookAuthor = $author;
    }
    
    public function getNameAndAuthor(){
        return $this->bookName . ' - ' . $this->bookAuthor."\n";
    }

}