<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Categorie;
use Faker\Factory;

class CategorieFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        for ($i=0 ; $i < 5; $i++) { 
            $categorie = new Categorie();
            $categorie
                ->setCategorie($faker->word);
            $manager->persist($categorie);
        }

        $manager->flush();
    }
}
