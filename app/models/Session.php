<?php

class Session {


    public static function init() {
        return session_start();
    }

    public static function set($key, $value) {
        return $_SESSION[$key] = $value;
    }

    public static function get($key) {
        return $_SESSION[$key];
    }

    public static function destroy() {
        return session_destroy();
    }

}