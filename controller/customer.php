<?php 


class customer {
    public function getClave(){
        $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $password = "";
        for($i=0;$i<10;$i++) {
            $password .= substr($str,rand(0,62),1);
    }
    return $password;
    }
}