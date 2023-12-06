<?php 
include __DIR__ . '/Views/header.php';
include __DIR__.'/Model/Movie.php';
try{
    $movies = Movie::fetchMovies();
}catch(Exception $e){
    echo 'exception: '. $e;
}
?>
<section>
    <div class="row">
        <?php
            foreach ($movies as $movie){
                $movie->printCard();
            }
        ?>
    </div>
</section>
<?php
include __DIR__ . '/Views/footer.php';
?>