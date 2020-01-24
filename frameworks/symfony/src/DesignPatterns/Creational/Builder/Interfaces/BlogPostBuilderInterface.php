<?php


namespace App\DesignPatterns\Creational\Builder\Interfaces;


use App\DesignPatterns\Creational\Builder\Classes\BlogPost;

interface BlogPostBuilderInterface
{
    public function create(): BlogPostBuilderInterface;

    public function setTitle(string $title): BlogPostBuilderInterface;

    public function setBody(string $body): BlogPostBuilderInterface;

    public function setCategories(array $category): BlogPostBuilderInterface;

    public function setTags(array $tags): BlogPostBuilderInterface;

    public function getBlogPost(): BlogPost;
}