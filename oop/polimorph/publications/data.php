<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17.02.2018
 * Time: 17:02
 */

// GET ALL DATA -> array($publications)

require_once 'classes.php';
require_once '../../../databases/singleton/DBConnection.php';

//$news1 = new NewsPublication();
//$news2 = new NewsPublication();
//$news3 = new NewsPublication();
//$article1 = new ArticlePublication();
//$article2 = new ArticlePublication();
//$photo1 = new PhotoPublication();

//$publications = [$news1, $news2, $article1, $photo1];

$publications = array();

$db = DBConnection::getInstance();

mysqli_set_charset($db, "utf8");

//$query = 'SELECT * FROM publication';
$query = "SELECT * FROM publication LEFT JOIN publication_type ON type = publication_type.id";

$result2 = $db->query($query);
$data = mysqli_fetch_all($result2, MYSQLI_ASSOC);

//echo '<pre>';
//var_dump($data);
//print_r($data);

foreach ($data as $item) {

    $publications[] = new $item['name']($item);

//    switch ($item['type']) {
//        case 1:
//            $publications[] = new NewsPublication($item);
//            break;
//        case 2:
//            $publications[] = new ArticlePublication($item);
//            break;
//        case 3:
//            $publications[] = new PhotoPublication($item);
//            break;
//    }

}

//echo '<pre>';
//print_r($publications);




