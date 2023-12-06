<?php
include __DIR__.'/Genre.php';
include __DIR__.'/Product.php';
include __DIR__.'/DrawCard.php';//CREARE CARTELLA TRAITS

class Book extends Product {
    use DrawCard;
    private string $description;
    private array $authors;

    public function __construct($_id, $_title, $_img, $_description, $_authors) {
        parent::__construct($_id, $_title, $_img);
        $this->description = $_description;
        $this->authors = $_authors;
    }

    public function formatCard(){
        $cardItem=[
            'image' => $this->img,
            'title' => $this->title,
            'content' => $this->description,
            'authors' => $this->authors,
        ];
        return $cardItem;
    }

    public static function fetchBooks() {
        $bookString = file_get_contents(__DIR__.'/books_db.json');
        $bookList = json_decode($bookString, true);
        $books = [];
        foreach ($bookList as $book) {
            $books[] = new Book($book['_id'], $book['title'], $book['thumbnailUrl'], $book['longDescription'], $book['authors']);
        }
        return $books;
    }
}
?>