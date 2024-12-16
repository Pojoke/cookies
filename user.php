<?php
if(isset($_COOKIE['name'])){
    echo 'Привет, '.$_COOKIE["name"].'!';
}