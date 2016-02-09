<?php
    class JobOpening {

        private $title;
        private $description;
        private $contact_info;


        //setters;
        function setTitle($newTitle) {
            $this->title = $newTitle;
        }
        function setDescription($newDescription) {
            $this->description = $newDescription;
        }
        function setContactInfo($newContactInfo) {
            $this->contact_info = $newContactInfo;
        }

        //getters;
        function getTitle() {
            return $this->title;
        }
        function getDescription() {
            return $this->description;
        }
        function getContactInfo() {
            return $this->contact_info;
        }

        

    }




 ?>
