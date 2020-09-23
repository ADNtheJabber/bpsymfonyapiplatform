<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CompteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=CompteRepository::class)
 */
class Compte
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numeroCompte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeCompte;

    /**
     * @ORM\Column(type="decimal", precision=50, scale=2)
     */
    private $fraisOuverture;

    /**
     * @ORM\Column(type="decimal", precision=50, scale=2, nullable=true)
     */
    private $remuneration;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dateOuverture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dateFermeture;

    /**
     * @ORM\Column(type="decimal", precision=50, scale=2)
     */
    private $solde;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idClientPhysique;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idClientMoral;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroCompte(): ?int
    {
        return $this->numeroCompte;
    }

    public function setNumeroCompte(int $numeroCompte): self
    {
        $this->numeroCompte = $numeroCompte;

        return $this;
    }

    public function getTypeCompte(): ?string
    {
        return $this->typeCompte;
    }

    public function setTypeCompte(string $typeCompte): self
    {
        $this->typeCompte = $typeCompte;

        return $this;
    }

    public function getFraisOuverture(): ?string
    {
        return $this->fraisOuverture;
    }

    public function setFraisOuverture(string $fraisOuverture): self
    {
        $this->fraisOuverture = $fraisOuverture;

        return $this;
    }

    public function getRemuneration(): ?string
    {
        return $this->remuneration;
    }

    public function setRemuneration(?string $remuneration): self
    {
        $this->remuneration = $remuneration;

        return $this;
    }

    public function getDateOuverture(): ?string
    {
        return $this->dateOuverture;
    }

    public function setDateOuverture(string $dateOuverture): self
    {
        $this->dateOuverture = $dateOuverture;

        return $this;
    }

    public function getDateFermeture(): ?string
    {
        return $this->dateFermeture;
    }

    public function setDateFermeture(string $dateFermeture): self
    {
        $this->dateFermeture = $dateFermeture;

        return $this;
    }

    public function getSolde(): ?string
    {
        return $this->solde;
    }

    public function setSolde(string $solde): self
    {
        $this->solde = $solde;

        return $this;
    }

    public function getIdClientPhysique(): ?int
    {
        return $this->idClientPhysique;
    }

    public function setIdClientPhysique(?int $idClientPhysique): self
    {
        $this->idClientPhysique = $idClientPhysique;

        return $this;
    }

    public function getIdClientMoral(): ?int
    {
        return $this->idClientMoral;
    }

    public function setIdClientMoral(?int $idClientMoral): self
    {
        $this->idClientMoral = $idClientMoral;

        return $this;
    }
}
