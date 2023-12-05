<?php 
include __DIR__ . '/Views/header.php';
include __DIR__.'/Model/Game.php';
$games = Game::fetchGames();
?>
<section>
    <div class="row">
        <?php
            foreach ($games as $game){
                $game->printCard();
            }
        ?>
    </div>
</section>
<?php
include __DIR__ . '/Views/footer.php';
?>