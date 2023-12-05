<?php
    class Product{
        protected int $id;
        protected string $title;
        protected string $img;
        protected function __construct($_id,$_title,$_img){
            $this->id = $_id;
            $this->title = $_title;
            $this->img = $_img;
        }
    }
?>