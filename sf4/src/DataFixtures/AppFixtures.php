<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Card;

use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

    



         for ($i = 0 ; $i <= 100 ; $i++)
{        $card = new Card();
         $card->setName($faker->name())
         ->setDescription($faker->text(80))
         ->setActive($faker->boolean(20))
         ->setPremium($faker->boolean(20))
         ->setPreview($faker->text(80));

         $manager->persist($card);
}
        $manager->flush();
    }
    
}
