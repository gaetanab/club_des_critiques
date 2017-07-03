<?php

namespace EntityBundle\Repository;

/**
 * categorieRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class categorieRepository extends \Doctrine\ORM\EntityRepository
{

    public function getAttributes($product_category){
        $attributes = $this->getEntityManager()->getRepository('EntityBundle:attribute')->findBy(["category"=>$product_category]);
        return $attributes;
    }
}