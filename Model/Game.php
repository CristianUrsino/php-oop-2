<?php
include __DIR__.'/Genre.php';
include __DIR__.'/Product.php';

class Game extends Product {

    public function __construct($_id, $_title, $_img) {
        parent::__construct($_id, $_title, $_img);
    }

    public function printCard(){
        $image = $this->img;
        $title = $this->title;
        include __DIR__.'/../Views/cardGame.php';
    }

    public static function fetchgames() {
        $gameString = file_get_contents(__DIR__.'/steam_db.json');
        $gameList = json_decode($gameString, true);
        $games = [];
        foreach ($gameList as $game) {
            $games[] = new game($game['appid'], $game['name'], $game['img_logo_url']);
        }
        return $games;
    }
}
?>