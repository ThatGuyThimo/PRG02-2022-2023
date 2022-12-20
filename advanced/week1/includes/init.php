<?php
require_once 'config.php';
require_once "vendor/autoload.php";

use Demo\HRClasses\CMGTClass;

try {
    //load data & convert it to an array
    $studentsRawData = file_get_contents(DATA_PATH . 'students.json');
    $studentsRawList = json_decode($studentsRawData, true);

    //Create new instance of class and add students from array
    $cmgtClass = new CMGTClass();
    foreach ($studentsRawList as $studentRaw) {
        $cmgtClass->addStudent($studentRaw);
    }

    //Get variables for the HTML
    $students = $cmgtClass->getStudents();
    $totalStudents = $cmgtClass->getTotalStudents();
} catch (Exception $e) {
    $error = "Something went wrong: " .
        $e->getMessage() . ' on line ' .
        $e->getLine() . ' of ' .
        $e->getFile();
}

//JSON inladen
//JSON omzetten naar class
    // de cmgtclass students array vullen
//var
