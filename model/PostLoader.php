<?php
declare(strict_types=1);



class PostLoader
{

public $show = [];

// intentar ensenar la informacion que tenemos en el json file en view

public function __construct()
{

    $data = "../data/guestbook.json";
    $json = file_get_contents($data);
    $Item =json_decode($json);

    foreach ($Item as $item){
        $this->show[] = $Item;
    }

}


}