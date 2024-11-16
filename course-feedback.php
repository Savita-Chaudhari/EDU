<?php
require 'connection.php';
include 'session.php'; // Assuming this includes session initialization

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    // $course_title = $_POST['course_title'];
    $liked_content = $_POST['liked_content'];
    $disliked_content = $_POST['disliked_content'];
    $relevance = $_POST['relevance'];
    $instructor_knowledge = $_POST['instructor_knowledge'];
    $instructor_engagement = $_POST['instructor_engagement'];
    $liked_instructor = $_POST['liked_instructor'];
    $disliked_instructor = isset($_POST['disliked_instructor']) ? $_POST['disliked_instructor'] : ''; // Check if the field is set
    $training_satisfaction = $_POST['training_satisfaction'];
    $terms_accepted = isset($_POST['terms_accepted']) ? 1 : 0;

    // Fetch user's name from session data
    $user_name = isset($_SESSION['f_name']) ? $_SESSION['f_name'] : ''; // Check if the key exists in session data

    if (!empty($user_name)) {
        // Insert data into the database
        $query = "INSERT INTO course_feedback ( liked_content, disliked_content, relevance, instructor_knowledge, instructor_engagement, liked_instructor, disliked_instructor, training_satisfaction, terms_accepted) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $statement = mysqli_prepare($con, $query);
        // mysqli_stmt_bind_param($statement, "ssssssssssi", $user_name, $course_title, $liked_content, $disliked_content, $relevance, $instructor_knowledge, $instructor_engagement, $liked_instructor, $disliked_instructor, $training_satisfaction, $terms_accepted);
        
        if (mysqli_stmt_execute($statement)) {
            echo "Feedback submitted successfully.";
        } else {
            echo "Error inserting feedback: " . mysqli_error($con);
        }

        // mysqli_stmt_close($statement);
    } else {
        echo "User information not found in session data.";
    }
}
?>
