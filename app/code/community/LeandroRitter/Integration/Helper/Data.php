<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 12/12/17
 * Time: 17:10
 */ 
class LeandroRitter_Integration_Helper_Data extends Mage_Core_Helper_Abstract {

    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
        return $randomString;
    }
}