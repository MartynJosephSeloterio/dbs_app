<?php
 
require_once('../classes/database.php');
$con = new database();
 
if (isset( $_POST['course_name'])){
    $coursename = $_POST['course_name'];
 
    if ($con->isCourseExists( $coursename)){
        echo json_encode(['exists' => true]);
    } else {
        echo json_encode(['exists' => false]);
    }
} else {
    echo json_encode(['error' => 'invalid request']);
}
 