<?php

echo $SERVER['REQUEST_SCHEME'] . ' ' . 
     $_ECHO['HTTP_HOST'] . ' ' . 
     $_SERVER['SERVER_PORT'] . ' ' . 
     $_SERVER['REQUEST_METHOD'] . ' ' . 
     $_SERVER['REQUEST_URI'];

?>