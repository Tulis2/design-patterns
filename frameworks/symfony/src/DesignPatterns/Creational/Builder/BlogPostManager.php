<?php


namespace App\DesignPatterns\Creational\Builder;


use App\DesignPatterns\Creational\Builder\Classes\BlogPost;
use App\DesignPatterns\Creational\Builder\Interfaces\BlogPostBuilderInterface;

class BlogPostManager
{
    /**
     * @var BlogPostBuilderInterface
     */
    private $builder;

    /**
     * @param BlogPostBuilderInterface $builder
     * @return $this
     */
    public function setBuilder(BlogPostBuilderInterface $builder): self
    {
        $this->builder = $builder;

        return $this;
    }

    /**
     * @return Classes\BlogPost
     */
    public function createCleanPost()
    {
        return $this->builder->getBlogPost();
    }

    /**
     * @return BlogPost
     */
    public function createNewPostIt(): BlogPost
    {
        return $this->builder
            ->setTitle('New post about IT')
            ->setBody('New post about IT ..........')
            ->setCategories([
                'category_it'
            ])
            ->setTags([
                'tag_it',
                'tag_programming'
            ])
            ->getBlogPost();
    }

    public function createNewPostCats(): BlogPost
    {
        return $this->builder
            ->setTitle('New post about cats')
            ->setBody('New post about cats ..........')
            ->setCategories([
                'category_cats'
            ])
            ->setTags([
                'tag_cats',
                'tag_pets'
            ])
            ->getBlogPost();
    }
}