<?php

    class Voiture extends Vehicule
    {
        private int $doors;
        private int $hoursePower; 
        private string $color;   

        public function setID(int $id) : void
        {
            $id > 0 ? $this->id = $id : trigger_error("L'ID doit être supérieur à 0", E_USER_ERROR);
        } 

        public function getID() : int
        {
            return $this->id;
        }

        public function setname(string $name) : void
        {
            !empty($name) ? $this->name = $name : trigger_error("Le vehicule doit avoir un nom", E_USER_ERROR);
        }

        public function getname() : string
        {
            return $this->name;
        }

        public function setEngine(string $engine) : void
        {
            !empty($engine) ? $this->engine = $engine : trigger_error("Le vehicule doit avoir un moteur", E_USER_ERROR);
        }

        public function getEngine() : string
        {
            return $this->engine;
        }
        
        public function setBrand(string $brand) : void
        {
            !empty($brand) ? $this->brand = $brand : trigger_error("Le vehicule doit avoir une marque", E_USER_ERROR);
        }

        public function getBrand() : string
        {
            return $this->brand;
        }
        
        public function setDoors(int $doors) : void
        {
            $doors > 0 ? $this->doors = $doors : trigger_error("Le vehicule doit avoir au moins une porte", E_USER_ERROR);
        }

        public function getDoors() : int
        {
            return $this->doors;
        }

        public function setHoursePower(int $hoursePower) : void
        {
            $hoursePower > 0 ? $this->hoursePower = $hoursePower : trigger_error("Le vehicule doit avoir au moins un chevaux", E_USER_ERROR);
        }

        public function getHoursePower() : int
        {
            return $this->hoursePower;
        }

        public function setColor(string $color) : void
        {
            !empty($color) ? $this->color = $color : trigger_error("Le vehicule doit avoir une couleur", E_USER_ERROR);
        }

        public function getColor() : string
        {
            return $this->color;
        }
    }