<?php
    use PHPUnit\Framework\TestCase;
    // mengambil dari file Wordcount.php sebelumnya
    require_once "Wordcount.php";
    // membuat class yang di extends dari testcase
    class Simpletest extends TestCase {
        public function testcountword (){
            // membuat object baru
            $wc = new wordcount();

            $TestSentence = "My name is alfan";
            $Wordcount = $wc ->countWords($TestSentence);
            
            $this -> assertEquals(4, $Wordcount);
        }
    }
?>