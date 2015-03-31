<?php

namespace Acme\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Acme\CoreBundle\Repository\DescriptionRepository;
use Acme\CoreBundle\Entity\Description;

class DescriptionRepository extends EntityRepository
{
	function getAllDescription(){
		$query = $this->getEntityManager()->createQueryBuilder();
            
		$result = $query->select('description')
			  			->from('AcmeCoreBundle:Description', 'description')
              			->getQuery()->getResult();
		return $result;
	}
/*
	function newDescription(){
		$query = $this->getEntityManager()->createQueryBuilder();
            
		$result = $query->select('description')
			  			->from('AcmeCoreBundle:Description', 'description')
              			->getQuery()->getResult();
		return $result;
	}

	function changeDescription($id){
        $Description = $this
			    ->getEntityManager()
			    ->getRepository('AcmeCoreBundle:Description')
			    ->find($id);

		//DELETE FROM `ProjecTeam`.`description` WHERE `description`.`id` = $id
			    
        $this->getEntityManager()->persist($Description);
        $this->getEntityManager()->flush();

		return $Description;

	}*/
}