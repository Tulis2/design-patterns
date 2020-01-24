<?php


namespace App\DesignPatterns\Creational\Builder\Classes;


class BlogPost
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $body;

    /**
     * @var array
     */
    private $categories = [];

    /**
     * @var array
     */
    private $tags = [];

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setBody(string $body): void
    {
        $this->body = $body;
    }

    public function setCategories(array $categories): void
    {
        $this->categories = $categories;
    }
    
    public function setTags(array $tags): void
    {
        $this->tags = $tags;
    }
}