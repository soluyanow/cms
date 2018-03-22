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
        $results = array();
	    $results['pageTitle'] = "Admin Login | Widget News";
	    if (isset( $_POST['login'])) {
	        if ($_POST['username'] == ADMIN_USERNAME && $_POST['password'] == ADMIN_PASSWORD) {
                $_SESSION['username'] = ADMIN_USERNAME;
                header( "Location: admin.php");
            } else {
                $results['errorMessage'] = "Incorrect username or password. Please try again.";
                require(TEMPLATE_PATH."/admin/loginForm.php");
            }
        } else {
             require( TEMPLATE_PATH."/admin/loginForm.php");
        }
    }

    function logout() {
        unset($_SESSION['username']);
	    header( "Location: admin.php");
    }

    function newArticle() {
        $results = array();
	    $results['pageTitle'] = "New Article";
	    $results['formAction'] = "newArticle";

	    if ( isset( $_POST['saveChanges'] ) ) {
            $article = new Article;
            $article->storeFormValues( $_POST );
            $article->insert();
            header( "Location: admin.php?status=changesSaved" );
	    } elseif ( isset( $_POST['cancel'] ) ) {
            header( "Location: admin.php" );
        } else {
            $results['article'] = new Article;
            require( TEMPLATE_PATH . "/admin/editArticle.php" );
	    }
    }

    function deleteArticle() {


    }

    function listArticles() {


    }
?>