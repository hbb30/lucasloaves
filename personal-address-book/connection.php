<?php
// CONNECTION ***PDO*** OBJECT ORIENTED
$conn = new PDO('mysql:host=localhost;dbname=db_midterm_exam','root','');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>