<?php

namespace App\Entity;

use Symfony\Component\Security\Core\User\UserInterface;

class User implements UserInterface, \Serializable
{
    private $id;

    private $firstName;
    private $lastName;
    private $email;
    private $username;
    private $password;
    private $address;
    private $postNumber;
    private $city;
    private $country;

    public function serialize()
    {
        // TODO: Implement serialize() method.
    }

    public function unserialize(string $data)
    {
        // TODO: Implement unserialize() method.
    }

    public function getRoles(): array
    {
        // TODO: Implement getRoles() method.
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function getUserIdentifier(): string
    {
        // TODO: Implement getUserIdentifier() method.
    }

    public function __serialize(): array
    {
        // TODO: Implement __serialize() method.
    }

    public function __unserialize(array $data): void
    {
        // TODO: Implement __unserialize() method.
    }
}