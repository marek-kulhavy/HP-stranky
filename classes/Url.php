<?php

/**
 * 
 * Přesměrovává na zadanou url adresu
 * 
 * @param string $path - adresa, na kterou se má přesměrovat
 * 
 * @return void
 * 
 * 
 *  */ 


 class Url {
    
    public static function redirectURL($path) {
        // Detekce protokolu (HTTP/HTTPS)
        $url_protocol = (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] != "off") ? "https" : "http";
        
        // Sestavení kompletní URL a přesměrování
        header("Location: $url_protocol://" . $_SERVER["HTTP_HOST"] . $path);
        exit();
    }    
}
