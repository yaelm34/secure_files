<?php

class Security {
    private static $seed = 'CvMYvMlqvQ';

    /*
      Hash and salt password
      @param $clear_text String password to encrypt
      @return $encrypted_text
    */
    static function encrypt($clear_text) {
      $text_seed = self::$seed . $clear_text;
      $encrypted_text = hash('sha256', $text_seed);
      return $encrypted_text;
    }


    static public function getSeed() {
      return self::$seed;
    }

    static function generateRandomHex() {
        // Generate a 32 digits hexadecimal number
        $numbytes = 16; // Because 32 digits hexadecimal = 16 bytes
        $bytes = openssl_random_pseudo_bytes($numbytes);
        $hex   = bin2hex($bytes);
        return $hex;
    }

}

?>
