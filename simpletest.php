<?php
    use PHPUnit\Framework\TestCase;
    require_once "Wordcount.php";
    class Simpletest extends TestCase {
        public function testcountword (){
            $wc = new wordcount();

            $TestSentence = "My name is alfan";
            $Wordcount = $wc ->countWords($TestSentence);
            
            $this -> assertEquals(4, $Wordcount);
        }
    }
?>