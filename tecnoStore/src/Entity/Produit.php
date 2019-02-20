<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="fk_PRODUIT_FOURNISSEUR1_idx", columns={"idFournisseur"}), @ORM\Index(name="fk_PRODUIT_CATEGORIE_idx", columns={"idCategorie"})})
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="idProduit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproduit;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=255, nullable=false)
     */
    private $designation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="prixUnitaire", type="integer", nullable=false)
     */
    private $prixunitaire;

    /**
     * @var int
     *
     * @ORM\Column(name="prixVente", type="integer", nullable=false)
     */
    private $prixvente;

    /**
     * @var int
     *
     * @ORM\Column(name="qteStock", type="integer", nullable=false)
     */
    private $qtestock = '0';

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCategorie", referencedColumnName="idCategorie")
     * })
     */
    private $idcategorie;

    /**
     * @var \Fournisseur
     *
     * @ORM\ManyToOne(targetEntity="Fournisseur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFournisseur", referencedColumnName="idFournisseur")
     * })
     */
    private $idfournisseur;

    public function getIdProduit(): ?int
    {
        return $this->idproduit;
    }

    # Getters and Setters du champ Designation
    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;
    }

    # Getters and Setters du champ Image
    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;
    }

    # Getters and Setters du champ Prix Unitaire
    public function getPrixUnitaire(): ?int
    {
        return $this->prixunitaire;
    }

    public function setPrixUnitaire(int $prixunitaire): self
    {
        $this->prixunitaire = $prixunitaire;
    }

    # Getters and Setters du champ Prix de vente
    public function getPrixVente(): ?int
    {
        return $this->prixvente;
    }

    public function setPrixVente(int $prixvente): self
    {
        $this->prixvente = $prixvente;
    }

    # Getters and Setters du champ Quantite en stock
    public function getQteStock(): ?int
    {
        return $this->qtestock;
    }

    public function setQteStock(int $qtestock): self
    {
        $this->qtestock = $qtestock;
    }
    
    
    # Getters idCategorie
    public function getIdCategorie(): ?int
    {
        return $this->idcategorie;
    }

    # Getters idFournisseur
    public function getIdFournisseur(): ?int
    {
        return $this->idfournisseur;
    }


}
