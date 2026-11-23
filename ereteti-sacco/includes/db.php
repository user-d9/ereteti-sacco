<?php
// includes/db.php — connects every page to the database ereteti_web
// Reports MySQL errors as exceptions, so a duplicate delivery can be caught and explained.
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = mysqli_connect('localhost', 'root', '', 'ereteti_web');
mysqli_set_charset($conn, 'utf8mb4');