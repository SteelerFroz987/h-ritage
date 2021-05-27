<?php

include 'class_hello.php';

class deux extends un {
    public function meteo() {
        $meteo = "Il fait beaux ! Aujourd'hui !";
        return $meteo;
    }
}