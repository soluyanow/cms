<?php
    require("config.php");
    session_start();
    $action = isset($_GET["action"]) ? $_GET["action"] : "";
    $username = isset( $_SESSION['username'] ) ? $_SESSION['username'] : "";

    if ($action != "login" && $action != "logout" && !$username) {
        login();
        exit;

    }

    switch ($action) {
        case "login":
            login();
            break;
        case "logout":
            logout();
            break;
        case "newArticle":
            newArticle();
            break;
        case "editArticle":
            editArticle();
            break;
        case "delete":
            deleteArticle();
            break;
        default:
            listArticles();
    }

    function login() {


    }

    function logout() {


    }

    function newArticle() {


    }

    function deleteArticle() {


    }

    function listArticles() {


    }
?>