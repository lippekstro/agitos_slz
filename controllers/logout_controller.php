<?php
session_start();
session_unset();
session_destroy();
header("Location: /agitos_slz/views/admin/login.php");
