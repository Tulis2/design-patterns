<?php


namespace App\DesignPatterns\Creational\Builder;


use App\DesignPatterns\Creational\Builder\Classes\BlogPost;
use App\DesignPatterns\Creational\Builder\Interfaces\BlogPostBuilderInterface;

class BlogPostBuilder implements BlogPostBuilderInterface
{
    /**
     * @var BlogPost
     */
    private $blogPost;

    public function __construct()
    {
        $this->create();
    }

    public function create(): BlogPostBuilderInterface
    {
        $this->blogPost = new BlogPost();

        return $this;
    }

    public function setTitle(string $title): BlogPostBuilderInterface
    {
        $this->blogPost->setTitle($title);

        return $this;
    }

    public function setBody(string $body): BlogPostBuilderInterface
    {
        $this->blogPost->setBody($body);

        return $this;
    }

    public function setCategories(array $category): BlogPostBuilderInterface
    {
        $this->blogPost->setCategories($category);

        return $this;
    }

    public function setTags(array $tags): BlogPostBuilderInterface
    {
        $this->blogPost->setTags($tags);

        return $this;
    }

    public function getBlogPost(): BlogPost
    {
        $result = $this->blogPost;
        $this->create();

        return $result;
    }
}