<?php 
include __DIR__ . '/Views/header.php';
include __DIR__.'/Model/Book.php';
$books = book::fetchBooks();
// var_dump($books);
?>
<section>
    <div class="row">
        <?php
            foreach ($books as $book){
                $book->printCard();
            }
        ?>
    </div>
</section>
<?php
include __DIR__ . '/Views/footer.php';
?>