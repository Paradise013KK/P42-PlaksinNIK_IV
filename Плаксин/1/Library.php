<?php

class Library {
    private array $books = [];
    private array $users = [];

    public function addBook($book): void 
    {
        $this->books[] = $book;
        echo "Книга '{$book->getTitle()}' добавлена в библиотеку.\n";
    }

    public function registerUser($user): void 
    {
        $this->users[] = $user;
        echo "Пользователь '{$user->getName()}' зарегистрирован.\n";
    }

    public function findBookByTitle($title): mixed 
    {
        foreach ($this->books as $book) {
            if ($book->getTitle() === $title) {
                return $book;
            }
        }
        echo "Книга с названием '$title' не найдена.\n";
        return null;
    }

    public function findUserById($userID): mixed 
    {
        foreach ($this->users as $user) {
            if ($user->getUserID() === $userID) {
                return $user;
            }
        }
        echo "Пользователь с ID '$userID' не найден.\n";
        return null;
    }
}
