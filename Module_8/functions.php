<?php

function login() {
    include_once 'dbConnenctions.php';

    $email = htmlspecialchars( $_POST['email'] );
    $password = htmlspecialchars( $_POST['password'] );

    if ( empty( $email ) || empty( $password ) ) {
        echo "Please enter both email and password.";
    } else {

        $usersFile = fopen( 'users.csv', 'r' );

        while (  ( $userData = fgetcsv( $usersFile ) ) !== false ) {
            if ( $userData[2] == $email && $userData[3] == $password ) {
                header( "Location: welcome.php?email=$email" );
            } else {

                echo "invalid creadentials";
            }

        }

    }

}

function registration() {

    // include_once 'dbConnenctions.php';

    $firstName = htmlspecialchars( $_POST['firstName'] );
    $lastName = htmlspecialchars( $_POST['lastName'] );
    $email = htmlspecialchars( $_POST['email'] );
    $password = htmlspecialchars( $_POST['password'] );
    $confirmPassword = htmlspecialchars( $_POST['confirmPassword'] );

    if ( empty( $firstName ) || empty( $lastName ) || empty( $email ) || empty( $password ) || empty( $confirmPassword ) ) {
        echo "Please fill out all fields.";
    } else if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        echo "Please enter a valid email address.";
    } else if ( $password !== $confirmPassword ) {
        echo "Passwords do not match.";
    } else {

        date_default_timezone_set( 'Asia/Dhaka' );
        $currentDateTime = date( 'Y-m-d H-i-s' );
        $uploadsDir = 'uploads/';
        $pictureName = $_FILES['picture']['name'];
        $picturePath = $uploadsDir . $pictureName;
        if ( !move_uploaded_file( $_FILES['picture']['tmp_name'], $picturePath ) ) {
            die( 'Failed to upload profile picture.' );
        }

        $usersFile = fopen( 'users.csv', 'a' );
        fputcsv( $usersFile, array( $firstName, $lastName, $email, $password, $pictureName, $currentDateTime ) );
        fclose( $usersFile );

        header( 'Location: login.php' );
    }

}
