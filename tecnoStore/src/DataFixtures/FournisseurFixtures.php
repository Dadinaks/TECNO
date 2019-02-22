<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Fournisseur;
use Faker\Factory;

class FournisseurFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        for ($i=0 ; $i < 6; $i++) { 
            $fournisseur = new Fournisseur();
            $fournisseur
                ->setNom($faker->name)
                ->setTelephone($faker->phoneNumber)
                ->setEmail($faker->email)
                ->setAdresse($faker->address);
            $manager->persist($fournisseur);
        }

        $manager->flush();
    }
}
