<?php

    unset($_SESSION['logged']);
    session_destroy();
    header('Location:?url=home');