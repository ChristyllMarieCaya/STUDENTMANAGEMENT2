<?php

include 'vendor/autoload.php';

use Caya\studentManagement\Core\Database;
use Caya\studentManagement\Model\StudentModel;


$db= new Database;


$student = new StudentModel;
$students = $student->read();

var_dump($students);
// $student -> id = 200211010;
// $student -> fullname = "Chavez, James". "\n";
// $student -> yearlevel = "First Year". "\n";
// $student -> course = "BSIT". "\n";
// $student -> section = "A". "\n";


// $student-> displayInfo();

?>