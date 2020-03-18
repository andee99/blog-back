<?php

function validateUser($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Username required');
    }

    if (empty($user['email'])) {
        array_push($errors, 'Email address required');
    }

    if (empty($user['password'])) {
        array_push($errors, 'Password required');
    }

    if (empty($user['passwordConf'])) {
        array_push($errors, 'Password confirmation required');
    }

    if ($user['passwordConf'] !== $user['password']) {
        array_push($errors, 'Passwords do not match');
    }

    return $errors;
}