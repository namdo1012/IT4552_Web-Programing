<?php 
    class Page{
        private $page,$title,$content,$year,$copyright;   

        function __construct($title, $year, $copyright){
            $this->page = '';
            $this->title = $title;
            $this->year = $year;
            $this->copyright = $copyright;
            $this->addHeader();
        }

        private function addHeader(){
            $this->page .= <<<EOD
            <html>
            <head>
            <title>$this->title</title>
            </head>
            <body>
            <h2 align="center">$this->title</h2>
EOD;
        }

        public function addContent($content){
            $this->page .= $content;
        }

        private function addFooter(){
            $this->page .= <<<EOD
            <div class="footer" align="center">&copy; $this->year $this->copyright</div>
            </body>
            </html>
EOD;
        }
        //Get the contents of the page
        //When we come to fetch the finished page, the footer is added automatically.
        public function get(){
            //Keep a copy of $page with no footer
            $temp = $this->page;
            $this->addFooter();
            //Restore $page for the next call to get
            $page = $this->page;
            $this->page = $temp;
            return $page;
            //if not needed, use $this->addFooter(); return $this->page;
        }
    }
?>