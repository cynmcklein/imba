<?php $user = current_user(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php if (!empty($page_title))
                echo remove_junk($page_title);
            elseif (!empty($user))
                echo ucfirst($user['name']);
            else echo "Inventory Management System"; ?>
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <link rel="stylesheet" href="libs/css/main.css" />
</head>

<body>


    <style>
        @media (min-width: 1200px) {
            .logo {
                width: 690px;
            }
        }




        .header-content,
        .header {

            transition: all 0.5s;
            z-index: 997;
            height: 60px;
            box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);
            background-color: blue;
            padding-left: 20px;
            padding-bottom: 10px;




        }

        .logo span {
            font-size: 18px;
            font-weight: 700;
            color: white;
            font-family: "Nunito", sans-serif;
        }

        .header .toggle-sidebar-btn {
            font-size: 32px;
            padding-left: 10px;
            cursor: pointer;
            color: white;


        }

        .header .search-bar {
            min-width: 360px;
            padding: 10px, 20px;
        }

        .toggle {
            background-color: red;
        }
    </style>





    <?php if ($session->isUserLoggedIn(true)) :
    endif; ?>


    <div class="page">
        <div class="container-fluid">