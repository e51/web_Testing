<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17.02.2018
 * Time: 14:17
 */


abstract class Publication {

    public $id;
    public $title;
    public $date;
    public $short_content;
    public $content;
    public $preview;
    public $author_name;
    public $type;

    public function __construct($array) {
        $this->id = $array['id'];
        $this->title = $array['title'];
        $this->date = $array['date'];
        $this->short_content = $array['short_content'];
        $this->content = $array['content'];
        $this->preview = $array['preview'];
        $this->author_name = $array['author_name'];
        $this->type = $array['type'];
    }


    public function printItem() {
//        echo ' Вызван метод: '.__METHOD__;
//        echo '<br>Default publication';
        echo '<h3>'.$this->title.'</h3>';
        echo $this->content;
        echo '<br>';
        echo '<br>'.$this->author_name;
        echo '<br>';

    }
}

class NewsPublication extends Publication {
    public function printItem() {
        parent::printItem();
        echo '<br>News publication.';
        echo ' Вызван метод: '.__METHOD__;
        echo '<hr>';
    }

}

class ArticlePublication extends Publication {
    public function printItem() {
        parent::printItem();
        echo '<br>Article publication';
        echo ' Вызван метод: '.__METHOD__;
        echo '<hr>';
    }

}

class PhotoPublication extends Publication {
    public function printItem() {
        parent::printItem();
        echo '<br>Photo publication';
        echo ' Вызван метод: '.__METHOD__;
        echo '<hr>';
    }

}



