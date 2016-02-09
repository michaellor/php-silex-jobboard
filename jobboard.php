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

        function __construct($job_title, $job_description, $job_contact_info) {
          $this->title = $job_title;
          $this->description = $job_description;
          $this->contact_info = $job_contact_info;
        }

    }


?>
