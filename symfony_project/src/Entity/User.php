<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Validator\Constraints\EUCountry;

/**
 * @ORM\Entity()
 * @UniqueEntity(fields="email", message="Email already taken")
 * @UniqueEntity(fields="username", message="Username already taken")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank
     * @Assert\Length(
     *     min=1,
     *     max=30,
     *     minMessage="Your first name must be at least {{limit}} character long",
     *     maxMessage="Your first name cannot be larger than {{limit}} characters"
     *     )
     *  * @Assert\Regex(
     *     pattern="/^[a-zA-Z]+$/",
     *     message="Your first name must only contain letters"
     * )
     */
    private $firstName;
    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     * @Assert\Length(
     *     min=1,
     *     max=30,
     *     minMessage="Your first name must be at least {{limit}} character long",
     *     maxMessage="Your first name cannot be larger than {{limit}} characters"
     *     )
     *  * @Assert\Regex(
     *     pattern="/^[a-zA-Z]+$/",
     *     message="Your first name must only contain letters"
     * )
     */
    private $lastName;
    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email."
     * )
     */
    private $email;
    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     * @Assert\Regex(
     *     pattern="/^[a-zA-Z0-9#$%&_\-]+$/",
     *     message="The username must contain only letters, numbers and #$%&_-"
     * )
     */
    private $username;
    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     * @Assert\Regex(
     *     pattern="/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$%^&*()\-+])[A-Za-z\d@#$%^&*()\-+]{8,}$/",
     *     message="The password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character (@#$%^&*()-+)"
     * )
     */
    private $password;
    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     * @Assert\Regex(
     *     pattern="/^[a-zA-Z\s]+\s+\d+$/",
     *     message="The address should start with the name of the street followed by the house number"
     * )
     */
    private $address;
    /**
     * @ORM\Column(type="integer", length=10, unique=true)
     * @Assert\NotBlank()
     * @Assert\Regex(
     *     pattern="/^[0-9]{5}$/",
     *     message="The post number should be a five-digit numbers"
     * )
     */
    private $postNumber;
    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     * @Assert\Regex(
     *     pattern="/^[a-zA-Z]{2,}$/",
     *     message="The city name should be at least 2 letters"
     * )
     */
    private $city;
    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     * @EUCountry
     */
    private $country;

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getPostNumber()
    {
        return $this->postNumber;
    }

    /**
     * @param mixed $postNumber
     */
    public function setPostNumber($postNumber): void
    {
        $this->postNumber = $postNumber;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country): void
    {
        $this->country = $country;
    }

    public function getRoles(): array
    {
        // TODO: Implement getRoles() method.
        return $this->getRoles();
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function getUserIdentifier(): string
    {
        // TODO: Implement getUserIdentifier() method.
        return $this;
    }
}