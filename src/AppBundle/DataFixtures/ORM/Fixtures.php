<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Fixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // create 20 products! Bam!
        for ($i = 0; $i < 20; $i++) {
            $product = new Product();
            $product->setName('product ' . $i);
            $product->setPrice(mt_rand(10, 100));
            $manager->persist($product);
        }

        $manager->flush();
    }
}