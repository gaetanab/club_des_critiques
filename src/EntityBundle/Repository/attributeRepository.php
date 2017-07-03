<?php

namespace EntityBundle\Repository;

/**
 * attributeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class attributeRepository extends \Doctrine\ORM\EntityRepository
{
    public function getAttributeValues($attribute = null){
        if ($attribute && ($attribute->getType() == 2||$attribute->getType() ==4))
            return $this->getEntityManager()->getRepository('EntityBundle:attributeOption')->findBy(["attributeId"=>$attribute->getId()]);
        return false;
    }
}