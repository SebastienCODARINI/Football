<?php

namespace App\Entity;

use App\Repository\CountryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
    private $logo;

    /**
     * @ORM\OneToMany(targetEntity=Club::class, mappedBy="country")
     */
    private $clubs;

    /**
     * @ORM\OneToMany(targetEntity=Player::class, mappedBy="country")
     */
    private $players;

    public function __construct()
    {
        $this->clubs = new ArrayCollection();
        $this->players = new ArrayCollection();
    }


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

        public function getLogo(): ?string
        {
            return $this->logo;
        }

        public function setLogo(string $logo): self
        {
            $this->logo = $logo;

            return $this;
        }

        /**
         * @return Collection<int, Club>
         */
        public function getClubs(): Collection
        {
            return $this->clubs;
        }

        public function addClub(Club $club): self
        {
            if (!$this->clubs->contains($club)) {
                $this->clubs[] = $club;
                $club->setCountry($this);
            }

            return $this;
        }

        public function removeClub(Club $club): self
        {
            if ($this->clubs->removeElement($club)) {
                // set the owning side to null (unless already changed)
                if ($club->getCountry() === $this) {
                    $club->setCountry(null);
                }
            }

            return $this;
        }

        /**
         * @return Collection<int, Player>
         */
        public function getPlayers(): Collection
        {
            return $this->players;
        }

        public function addPlayer(Player $player): self
        {
            if (!$this->players->contains($player)) {
                $this->players[] = $player;
                $player->setCountry($this);
            }

            return $this;
        }

        public function removePlayer(Player $player): self
        {
            if ($this->players->removeElement($player)) {
                // set the owning side to null (unless already changed)
                if ($player->getCountry() === $this) {
                    $player->setCountry(null);
                }
            }

            return $this;
        }
}
