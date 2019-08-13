<?php
session_start();

//Hapus session yang ada
session_destroy();

//Redirect user ke halaman login
header("Location: index.php");