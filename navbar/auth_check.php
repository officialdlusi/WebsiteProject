<?php
    if(!isset($_SESSION["useruid"])){
        header("Location: index.php?error=unortho_access");
    }
