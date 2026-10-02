<?php

Class A{
    public static function miFuncion(){
        echo __CLASS__;
    }
    public static function otraFuncion(){
        static::miFuncion();
    }
}

Class B extends A{
    public static function miFuncion(){
        echo __CLASS__;
    }
}

B::otraFuncion();