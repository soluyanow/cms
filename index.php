<?php
require ("config.php");
$action = isset($_GET["action"]) ? $_GET['action'] : "";

switch ($action) {
    case ("archive"):
        archive();
        break;
    case ("viewArticle"):
        viewArticle();
        break;
    default:
        homepage();
}

function archive() {
    $results = array();
    $data = Article::getList();
    $results["articles"] = $data["results"];
    $results["totalRows"] = $data["totalRows"];
    $results["pageTitle"] = "Article archive";
    require(TEMPLATE_PATH."/archive.php");
}

function viewArticle() {
    if (!isset($_GET["articleId"]) || !empty($_GET['articleId'])) {
        homePage();
        return;
    }

    $results = array();
    $results["article"] = Article::getById((int)$_GET["articleId"]);
    $results["pageTitle"] = $results["article"]->title." | Widget News";
    require(TEMPLATE_PATH."/viewArticle.php");
}

function homePage() {
    $results = array();



}
?>
