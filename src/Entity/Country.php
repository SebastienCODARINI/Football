<?php

namespace App\Entity;

use App\Repository\CountryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CountryRepository::class)
 */
class Country
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
     *  @ORM\Column(type="string", length=255)
     */
     private $championship;

     /**
     * @ORM\Column(type="string", length=255)
     */
    private $flag;

    /**
     * @ORM\Column(type="text")
     */
    private $picturelogo;


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

    public function getChampionship(): ?string
    {
        return $this->championship;
    }
 
      
      public function setChampionship(string $championship): self
      {
           $this->championship = $championship;
 
           return $this;
      }


        public function getFlag(): ?string
        {
            return $this->flag;
        }

        public function setFlag(int $flag): self
        {
            $this->flag = $flag;

            return $this;
        }

        public function getPicturelogo(): ?string
        {
            return $this->picturelogo;
        }

        public function setPicturelogo(string $picturelogo): self
        {
            $this->picturelogo = $picturelogo;

            return $this;
        }
}
