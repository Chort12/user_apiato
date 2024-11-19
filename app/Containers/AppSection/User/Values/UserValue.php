<?php

namespace App\Containers\AppSection\User\Values;

use App\Ship\Parents\Values\Value;

class UserValue extends Value
{
    /**
     * A resource key to be used by the JSON API Serializer responses.
     */
    protected string $resourceKey = 'uservalues';

    protected $id;
    protected $email;
    protected $f_name;
    protected $l_name;
    protected $m_name;
    protected $birthday;
    protected $password;
    protected $image;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getFName(): string
    {
        return $this->f_name;
    }

    public function setFName(string $f_name): self
    {
        $this->f_name = $f_name;
        return $this;
    }

    public function getLName(): ?string
    {
        return $this->l_name;
    }

    public function setLName(string $l_name): self
    {
        $this->l_name = $l_name;
        return $this;
    }

    public function getMName(): ?string
    {
        return $this->m_name;
    }

    public function setMName(?string $m_name): self
    {
        $this->m_name = $m_name;
        return $this;
    }

    public function getBirthday(): string
    {
        return $this->birthday;
    }

    public function setBirthday(string $birthday): self
    {
        $this->birthday = $birthday;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;
        return $this;
    }
}
