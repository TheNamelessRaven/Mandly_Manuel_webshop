<?php 
$menu=(isset ($_GET['menu']))?$_GET['menu']:NULL;
    switch ($menu) {
        case 'home':
            require_once 'list.php';
            break;
        case 'quit':
            require_once 'quit.php';
            break;
        case 'register':
            require_once 'register.php';
            break;
        case 'login':
            require_once 'login.php';
            break;
        case 'termek':
                require_once 'product.php';
                break;
        case NULL:
            require_once 'list.php';
            break;
        default:
            require_once'404.php';
            break;
    } 
    ?>