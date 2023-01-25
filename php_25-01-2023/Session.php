<?php

    class Session {

        public function __construct(){
            if (!isset($_SESSION)){
                session_start();
            }
        }

        public function setAttribute($attribute, $value){
            if (is_string($attribute)){
                $_SESSION[$attribute] = $value;
            }
        }

        public function getAttribute($attribute){
            if (isset($_SESSION[$attribute]) && is_string($attribute)){
                return $_SESSION[$attribute];
            }
        }

        public function deleteAttribute($attribute){
            if (isset($_SESSION[$attribute]) && is_string($attribute)){
                unset($_SESSION[$attribute]);
            }
        }

        public function destroySession(){
            session_destroy();
        }

    }


?>