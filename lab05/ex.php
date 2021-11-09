<?php
    class Page{
        private $page = '';
        private $title = '';
        private $year ;
        private $copyright = '';

        function __construct($title,$year,$copyright){
            $this->title = $title;
            $this->year = $year;
            $this->copyright = $copyright;
        }

        private function addHeader() {
            
        }
        public function addContent($content) {
            $this->page = $content;
        }
        private function addFooter() {

        }
        public function get(){
            return $this->page;
        }
    }

    $page = new Page("Page1",2021,"Name");
    $page->addContent("<br>This is a normal page.</br>");
    print ($page->get());
?>