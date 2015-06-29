<?php

/**
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class MobileDetectorController extends Extension {
    
    private static $allowed_actions = array(
        'IsAndroid',
        'IsIpad',
        'IsIphone',
        'IsIos',
        'IsWebKit',
        'IsSafari',
        'IsChromium',
        'IsChrome',
        'IsOperaMini',
        'IsOpera',
        'IsFirefox',
        'IsGooglebot'
    );
    
    public function IsAndroid(){
        $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
        if(stripos($ua,'android') !== false) {
            return true;
        }
        return false;
    }
    
    public function IsIpad(){
        $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
        if(stripos($ua,'ipad') !== false) {
            return true;
        }
        return false;
    }
    
    public function IsIphone(){
        $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
        if(stripos($ua,'iphone') !== false) {
            return true;
        }
        return false;
    }
    
    public function IsIos(){
        $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
        return (stripos($ua,'iphone') !== false || stripos($ua,'ipad') !== false)?true:false;
    }
    
    public function IsWebKit(){
        $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
        if(stripos($ua,'applewebkit') !== false) {
            return true;
        }
        return false;
    }
    
    public function IsSafari(){
        $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
        if(stripos($ua,'safari') !== false) {
            return true;
        }
        return false;
    }
    
    public function IsChromium(){
        $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
        if(stripos($ua,'chromium') !== false) {
            return true;
        }
        return false;
    }
    
    public function IsChrome(){
        $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
        if(stripos($ua,'chrome') !== false) {
            return true;
        }
        return false;
    }
    
    public function IsOperaMini(){
        $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
        if(stripos($ua,'opera mini') !== false) {
            return true;
        }
        return false;
    }
    
    public function IsOpera(){
        $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
        if(stripos($ua,'opera') !== false) {
            return true;
        }
        return false;
    }
    
    public function IsFirefox(){
        $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
        if(stripos($ua,'firefox') !== false) {
            return true;
        }
        return false;
    }
    
    public function IsGooglebot(){
        // https://support.google.com/webmasters/answer/1061943?hl=de
        if(
            strstr(strtolower($_SERVER['HTTP_USER_AGENT']), "googlebot") ||
            strstr(strtolower($_SERVER['HTTP_USER_AGENT']), "http://www.google.com/bot.html") ||
            strstr(strtolower($_SERVER['HTTP_USER_AGENT']), "Mediapartners-Google") ||
            strstr(strtolower($_SERVER['HTTP_USER_AGENT']), "AdsBot-Google")
        ){
            return true;
        }
    }
}