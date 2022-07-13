<?php 
    class Movie {
        public $id;
        public $name;
        public $director;
        public $cast = [];
    
        function __construct ($_id, $_name, $_director){
            $this->setId($_id);
            $this->setName($_name);
            $this->setDirector($_director);
        }
    
        public function setId ($_id){
            $this->id = $_id;
        }

        public function getId (){
            return $this->id;
        }
    
        public function setName ($_name){
            $this->name = $_name;
        }

        public function getname (){
            return $this->name;
        }
    
        public function setDirector ($_director){
            $this->director = $_director;
        }

        public function getDirector (){
            return $this->director;
        }
    
        public function addCast($role, $name){
            $this->cast[] = [
                "role" => $role,
                "name" => $name
            ];
        }

        public function getCast (){
            return $this->cast;
        }
    }
?>