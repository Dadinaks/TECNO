<?php

namespace App\Form;

use App\Entity\Produit;
use App\Entity\Categorie;
use App\Entity\Fournisseur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('designation')
            ->add('image')
            ->add('prixunitaire', null, [
                'label' => 'Prix Unitaire'
            ])
            ->add('prixvente', null, [
                'label' => 'Prix de vente'
            ])
            ->add('qtestock', null, [
                'label' => 'Quantite'
            ])
            ->add('idcategorie', EntityType::class, [
                'label' => 'Categorie',
                'class' => Categorie::class,
                'choice_label' => 'categorie'
            ])
            ->add('idfournisseur', EntityType::class, [
                'label' => 'Fournisseur',
                'class' => Fournisseur::class,
                'choice_label' => 'nom'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
