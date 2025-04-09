<?php
class StringController {
    function getRandomString($n) {
        $characters = '12434';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }  
}
?>