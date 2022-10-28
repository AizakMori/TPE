<?php

    class AuthHelper{
        function checkLoggedIn(){
            session_start();
            if(!isset($_SESSION["logged"])){
                header("Location:".BASE_URL."login");
                die();
            }else{
                return $_SESSION["logged"];
            }
        }

        function isLoggedIn(){ 
            if(!isset($_SESSION)){
                session_start(); 
            } 
            else if(isset($_SESSION["logged"])){
                return $_SESSION["logged"];
            }else return null;
        }

        function logout(){
            session_start();
            session_destroy();
            header('location: ' . BASE_URL . 'home');
        }
    }