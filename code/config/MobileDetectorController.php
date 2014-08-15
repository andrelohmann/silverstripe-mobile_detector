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
        'IsWebKit',
        'IsSafari',
        'IsChromium',
        'IsChrome',
        'IsOperaMini',
        'IsOpera',
        'IsFirefox'
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
        if(stripos($ua,'iPad') !== false) {
            return true;
        }
        return false;
    }
    
    public function IsIphone(){
        $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
        if(stripos($ua,'iPhone') !== false) {
            return true;
        }
        return false;
    }
    
    public function IsWebKit(){
        $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
        if(stripos($ua,'AppleWebKit') !== false) {
            return true;
        }
        return false;
    }
    
    public function IsSafari(){
        $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
        if(stripos($ua,'Safari') !== false) {
            return true;
        }
        return false;
    }
    
    public function IsChromium(){
        $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
        if(stripos($ua,'Chromium') !== false) {
            return true;
        }
        return false;
    }
    
    public function IsChrome(){
        $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
        if(stripos($ua,'Chrome') !== false) {
            return true;
        }
        return false;
    }
    
    public function IsOperaMini(){
        $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
        if(stripos($ua,'Opera Mini') !== false) {
            return true;
        }
        return false;
    }
    
    public function IsOpera(){
        $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
        if(stripos($ua,'Opera') !== false) {
            return true;
        }
        return false;
    }
    
    public function IsFirefox(){
        $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
        if(stripos($ua,'Firefox') !== false) {
            return true;
        }
        return false;
    }
}