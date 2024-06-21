<?php


    // Library System 

    class LibrarySystem{

        //  Class Properties
        protected $title;
        protected $author;
        protected $publishDate;

        // Constructor Method
        public function __construct($title,$author,$publishDate)
        {
            $this->title = $title;
            $this->author = $author;
            $this->publishDate = $publishDate;
        }


        // Class Methods to get Book Details

        public function getTitle(){
            return "Title of the book: {$this->title}";
        }
        public function getAuthor(){
            return "Author of the book: {$this->author}";
        }
        public function getPublishDate(){
            return "Publish Date of the book: {$this->publishDate}";
        }

    }


    class Book extends LibrarySystem{

        private $genre;
        public function __construct($title,$author,$publishDate,$genre)
        {
            // Parent Contructor Call
            parent::__construct($title,$author,$publishDate);
            $this->genre = $genre;
        }

        public function getBookGenre(){
            return "Genre Of your book is: {$this->genre}";
        }

    }

    class DVD extends LibrarySystem{
        private $duration;

        public function __construct($title,$author,$publishDate,$duration)
        {
            parent::__construct($title,$author,$publishDate);
            $this->duration = $duration;
        }

        public function getBookDuration(){
            return "Total Book Reading is of: {$this->duration} Minutes about.";
        }
    }


    // Creating Objects

    $dvd1 = new DVD("Harry Potter and Philospher Stone","JK Rowling",1985,120);

    // echo $dvd1->getTitle();
    // echo $dvd1->getAuthor();
    // echo $dvd1->getBookDuration();
    echo $dvd1->getPublishDate();