<?php
    class Cd
    {
        private $title;
        private $artist;
        private $cover_art;
        private $price;

        function __construct($album_name, $band_name, $image_path, $album_price)
        {
            $this->title = $album_name;
            $this->artist = $band_name;
            $this->cover_art = $image_path;
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

        function setCoverArt($new_cover_art)
        {
            $this->cover_art = $new_cover_art;
        }

        function getCoverArt()
        {
            return $this->cover_art;
        }

        function save() {
            array_push($_SESSION['list_of_cds'], $this);
        }

        static function getAll() {
            return $_SESSION['list_of_cds'];
        }

    }
 ?>
