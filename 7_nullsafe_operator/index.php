<?php

declare(strict_types=1);

class Name
{
    public function getFull()
    {
        return 'Fyodor Mikhailovich Dostoyevsky';
    }
}

class Author
{
    public function getName()
    {
        return new Name();
    }
}

class Book
{
    private $author;

    public function setAuthor(Author $author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }
}

$book = new Book();

echo 'Author is :' . $book->getAuthor()?->getName()->getFull() . PHP_EOL;