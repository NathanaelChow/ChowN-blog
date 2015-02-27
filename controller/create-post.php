<?php

require_once(__DIR__ . "/view/header.php");
require_once(__DIR__ . "/../model/config.php");
require_once(__DIR__ . "/../controller/login-verify.php");


if (!authenticateUser()) {
    header("Location: " . $path . "index.php");
    die();
}

$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

// Milestone 3: Set the Date and Time of a Post and Display It
// Added field update_datetime = now()

$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post', update_datetime = now()");

if ($query) {
    echo "<p>Successfully inserted post: $title</p>";
} else {
    echo "<p> " . $_SESSION["connection"]->error . " </p>";
}
