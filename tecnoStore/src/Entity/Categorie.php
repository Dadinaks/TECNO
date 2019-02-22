<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCategorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255, nullable=false)
     */
    private $categorie;

    /**
     * Get the value of idcategorie
     *
     * @return  int
     */ 
    public function getIdcategorie()
    {
        return $this->idcategorie;
    }

    /**
     * Get the value of categorie
     *
     * @return  string
     */ 
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set the value of categorie
     *
     * @param  string  $categorie
     *
     * @return  self
     */ 
    public function setCategorie(string $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

}
