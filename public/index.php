<?php

require_once __DIR__ . '/../vendor/autoload.php';

require "../config/Config.php";
require "../src/BddManager.php";
require "../src/MovieManager.php";
require "../src/TitleManager.php";

$bdd = new \hack\BddManager();
$movieManager = new \hack\MovieManager();

$page = (isset($_GET['page']) ? $_GET['page'] : "index");
$file = $page . ".php";

$loader = new Twig_Loader_Filesystem(__DIR__ . '/../view');
$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__ . '/../tmp',
));

$json = array();
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $movieManager->setTitle($_POST['Title']);
    $json = $movieManager->workCurl();

    $movieManager->setType($_POST['Type']);
    $json = $movieManager->workCurl();

    $movieManager->setYear($_POST['Year']);
    $json = $movieManager->workCurl();
}
echo $twig->render('index.html.twig', array('json' => $json));
