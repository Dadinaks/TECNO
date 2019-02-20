<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sortie
 *
 * @ORM\Table(name="sortie", indexes={@ORM\Index(name="fk_SORTIE_PRODUIT1_idx", columns={"idProduit"})})
 * @ORM\Entity
 */
class Sortie
{
    /**
     * @var int
     *
     * @ORM\Column(name="idSortie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsortie;

    /**
     * @var string
     *
     * @ORM\Column(name="nomClient", type="string", length=255, nullable=false)
     */
    private $nomclient;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=false)
     */
    private $telephone;

    /**
     * @var int
     *
     * @ORM\Column(name="qteSortie", type="integer", nullable=false)
     */
    private $qtesortie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateSortie", type="datetime", nullable=false)
     */
    private $datesortie;

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
