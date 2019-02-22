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
     * @var Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCategorie", referencedColumnName="idCategorie")
     * })
     */
    private $idcategorie;

    /**
     * @var Fournisseur
     *
     * @ORM\ManyToOne(targetEntity="Fournisseur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFournisseur", referencedColumnName="idFournisseur")
     * })
     */
    private $idfournisseur;


    /**
     * Get the value of idproduit
     *
     * @return  int
     */ 
    public function getIdproduit()
    {
        return $this->idproduit;
    }

    /**
     * Get the value of designation
     *
     * @return  string
     */ 
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set the value of designation
     *
     * @param  string  $designation
     *
     * @return  self
     */ 
    public function setDesignation(string $designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get the value of image
     *
     * @return  string|null
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @param  string|null  $image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of prixunitaire
     *
     * @return  int
     */ 
    public function getPrixunitaire()
    {
        return $this->prixunitaire;
    }

    /**
     * Set the value of prixunitaire
     *
     * @param  int  $prixunitaire
     *
     * @return  self
     */ 
    public function setPrixunitaire(int $prixunitaire)
    {
        $this->prixunitaire = $prixunitaire;

        return $this;
    }

    /**
     * Get the value of prixvente
     *
     * @return  int
     */ 
    public function getPrixvente()
    {
        return $this->prixvente;
    }

    /**
     * Set the value of prixvente
     *
     * @param  int  $prixvente
     *
     * @return  self
     */ 
    public function setPrixvente(int $prixvente)
    {
        $this->prixvente = $prixvente;

        return $this;
    }

    /**
     * Get the value of qtestock
     *
     * @return  int
     */ 
    public function getQtestock()
    {
        return $this->qtestock;
    }

    /**
     * Set the value of qtestock
     *
     * @param  int  $qtestock
     *
     * @return  self
     */ 
    public function setQtestock(int $qtestock)
    {
        $this->qtestock = $qtestock;

        return $this;
    }

    /**
     * Get the value of idcategorie
     *
     * @return  Categorie
     */ 
    public function getIdcategorie()
    {
        return $this->idcategorie;
    }

    /**
     * Set the value of idcategorie
     *
     * @param  Categorie  $idcategorie
     *
     * @return  self
     */ 
    public function setIdcategorie(Categorie $idcategorie)
    {
        $this->idcategorie = $idcategorie;

        return $this;
    }

    /**
     * Get the value of idfournisseur
     *
     * @return  Fournisseur
     */ 
    public function getIdfournisseur()
    {
        return $this->idfournisseur;
    }

    /**
     * Set the value of idfournisseur
     *
     * @param  Fournisseur  $idfournisseur
     *
     * @return  self
     */ 
    public function setIdfournisseur(Fournisseur $idfournisseur)
    {
        $this->idfournisseur = $idfournisseur;

        return $this;
    }
}
