<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entree
 *
 * @ORM\Table(name="entree", indexes={@ORM\Index(name="fk_ENTREE_FOURNISSEUR1_idx", columns={"idFournisseur"}), @ORM\Index(name="fk_ENTREE_PRODUIT1_idx", columns={"idProduit"})})
 * @ORM\Entity
 */
class Entree
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEntree", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identree;

    /**
     * @var int
     *
     * @ORM\Column(name="qteEntree", type="integer", nullable=false)
     */
    private $qteentree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEntree", type="datetime", nullable=false)
     */
    private $dateentree;

    /**
     * @var \Fournisseur
     *
     * @ORM\ManyToOne(targetEntity="Fournisseur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFournisseur", referencedColumnName="idFournisseur")
     * })
     */
    private $idfournisseur;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProduit", referencedColumnName="idProduit")
     * })
     */
    private $idproduit;


}
