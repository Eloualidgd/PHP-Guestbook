<?php
declare(strict_types=1);


class Post
{

    private $title;
    private $date;
    private $content;
    private $authorName;


    public function __construct($_title, $_date, $_content, $_authorName)
    {
        $this->title = $_title;
        $this->date = $_date;
        $this->content = $_content;
        $this->authorName = $_authorName;

    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getAuthorName(): string
    {
        return $this->authorName;
    }


}