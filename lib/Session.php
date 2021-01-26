<?php

class Session {

    /*
      Check if a given login corresponds to the current user
      @param $login Number login to check
      @return boolean
    */
    public static function isUser($login) {
        return (!empty($_SESSION['user_id']) && ($_SESSION['user_id'] === $login));
    }

    /*
      Check if the current user is admin
      @param $login Number login to check
      @return boolean
    */
    public static function isAdmin() {
        return (!empty($_SESSION['user_id']) && $_SESSION['admin']);
    }
}

?>
