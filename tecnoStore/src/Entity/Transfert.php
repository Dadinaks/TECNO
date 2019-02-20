<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transfert
 *
 * @ORM\Table(name="transfert", indexes={@ORM\Index(name="fk_TRANSFERT_PRODUIT1_idx", columns={"idProduit"})})
 * @ORM\Entity
 */
class Transfert
{
    /**
     * @var int
     *
     * @ORM\Column(name="idTransfert", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtransfert;

    /**
     * @var string
     *
     * @ORM\Column(name="lieux", type="string", length=255, nullable=false)
     */
    private $lieux;

    /**
     * @var int
     *
     * @ORM\Column(name="qteTransferer", type="integer", nullable=false)
     */
    private $qtetransferer;

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
