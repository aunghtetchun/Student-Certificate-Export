<?php


namespace App;


class Custom
{
    public static $info =  [

        "name" => "Student Certificate",
        "short_name" => "Certificate",
        "phone" => "09796519052",
        "email_link" => "https://premium70.web-hosting.com:2096/",
        "facebook_link" => "https://www.facebook.com/kyalphyufashion/",
        "description" => "Welcome from Student Certificate Project",
        "welcome" => "Welcome from Student Certificate Project",
        "logout" => "You Logout",
        "type" => "Student Certificate",
        "address" =>"Yangon",
        "meta-img" => "dashboard/images/mms-logo.jpg",
        "mms-logo" => "dashboard/images/mms-logo.jpg",
        "c-logo" => "dashboard/images/mms-logo.jpg",
        "main_css" => "dashboard/css/app.css",
    ];



    public static $role = ["Administrator","Student"];

    public static $requestStatus = ["pending","confirm","cancel"];

    public static $requestStatusColor = ["primary","success","danger"];




    public static function makePassword($length=8){
        $str = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $arr = str_split($str);
        $passArr = [];
        for ($i = 0; $i < $length; $i++) {
            $n = $arr[rand(0, count($arr)-1)];
            array_push($passArr,$n);
        }
        return implode("",$passArr);
    }

    public static function toShort($text,$max=10){
        if(strlen($text) >= $max){
            return substr($text,0,$max)."...";
        }else{
            return $text;
        }
    }

    public static function serial_number($lenght = 12) {
        // uniqid gives 13 chars, but you could adjust it to your needs.
        if (function_exists("random_bytes")) {
            $bytes = random_bytes(ceil($lenght / 2));
        } elseif (function_exists("openssl_random_pseudo_bytes")) {
            $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
        } else {
            throw new Exception("no cryptographically secure random function available");
        }
        $result =  substr(bin2hex($bytes), 0, $lenght);

        return strtoupper($result);
    }

}
