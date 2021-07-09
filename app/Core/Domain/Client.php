<?php

namespace App\Core\Domain;

class Client
{
    private int $id;

    public function __construct(
        private string $name,
        private string $gender,
        private \DateTime $birth,
        private Address $address
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }

    public function getBirth(): \DateTime
    {
        return $this->birth;
    }

    public function setBirth(\DateTime $birth): void
    {
        $this->birth = $birth;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "gender" => $this->gender,
            "birth" => $this->birth->format("Y-m-d"),
            "address" => $this->address->toArray()
        ];
    }
}
