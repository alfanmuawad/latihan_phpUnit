<?php
// membuat class countWords
class wordcount{
    // membuat fungsi countword
    public function countWords($sentence){
        // menembalikan count
        // memecah string berdasarkan koma ( ). 
        // Hasilnya adalah array yang berisi kata-kata yang terpisah
        return count(explode(" ",$sentence));
     }
}
?>