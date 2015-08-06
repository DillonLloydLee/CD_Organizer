<?php
    class Cd
    {
        private $title;
        private $artist;
        private $price;

        function __construct($album_name, $band_name, $album_price)
        {
            $this->title = $album_name;
            $this->artist = $band_name;
            $this->price = $album_price;
        }

        function setPrice($new_price)
        {
            $this->price = $new_price;
        }

        function getPrice()
        {
            return $this->price;
        }

        function setTitle($new_title)
        {
            $this->title = $new_title;
        }

        function getTitle()
        {
            return $this->title;
        }

        function setArtist($new_artist)
        {
            $this->artist = $new_artist;
        }

        function getArtist()
        {
            return $this->artist;
        }

        function save() {
            array_push($_SESSION['list_of_cds'], $this);
        }

        static function getAll() {
            return $_SESSION['list_of_cds'];
        }

    }
 ?>
