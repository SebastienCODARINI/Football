<?php

namespace App\Entity;

use App\Repository\EuroCountryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EuroCountryRepository::class)
 */
class EuroCountry
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $surname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $flag;

    /**
     * @ORM\Column(type="bigint")
     */
    private $ranking;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $palmares;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(?string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getFlag(): ?string
    {
        return $this->flag;
    }

    public function setFlag(string $flag): self
    {
        $this->flag = $flag;

        return $this;
    }

    public function getRanking(): ?string
    {
        return $this->ranking;
    }

    public function setRanking(string $ranking): self
    {
        $this->ranking = $ranking;

        return $this;
    }

    public function getPalmares(): ?string
    {
        return $this->palmares;
    }

    public function setPalmares(?string $palmares): self
    {
        $this->palmares = $palmares;

        return $this;
    }
}
