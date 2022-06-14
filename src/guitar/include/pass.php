<?php
    class pass{
        private $db;

        function __construct($config){
            $this->db = $config;
        }

        public function getSongs(){
            $sql = "SELECT * FROM song ";
            $results = $this->db->query($sql);
            return $results;
        }

        public function getTopSongs(){
            $sql = "SELECT * FROM song  o inner join singer i on o.SingerID = i.SingerID WHERE Top5 = 1";
            $results = $this->db->query($sql);
            return $results;
        }

        public function getFeatureSongs(){
            $sql = "SELECT * FROM song  o inner join singer i on o.SingerID = i.SingerID WHERE Feature = '1'";
            $results = $this->db->query($sql);
            return $results;
        }

        public function getSongDetail($id){
            $sql = "SELECT * FROM song  o inner join singer i on o.SingerID = i.SingerID WHERE SongID = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            $results = $stmt->fetch();
            return $results;
        }

        public function getSingers(){
            $sql = "SELECT * FROM singer";
            $results = $this->db->query($sql);
            return $results;
        }

        public function printLyrics($id){
            $sql = "SELECT text FROM song";
            
        }
    }
?>