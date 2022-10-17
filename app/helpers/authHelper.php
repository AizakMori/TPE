<?php

    class AuthHelper{
        function checkLoggedIn(){
            session_start();
            if(!isset($_SESSION["logged"])){
                header("Location:".BASE_URL."login");
                die();
            }
        }

        function isLoggedIn(){ 
            if(!isset($_SESSION)){ 
                session_start(); 
            } 
            else if(isset($_SESSION["email"])){
                return $_SESSION["email"];
            }else return null;
        }

        function logout(){
            session_start();
            session_destroy();
        }
    }