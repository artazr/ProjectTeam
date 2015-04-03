<?php

namespace Acme\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Acme\CoreBundle\Repository\FeedBackRepository;
use Acme\CoreBundle\Entity\FeedBack;

class FeedBackRepository extends EntityRepository
{
	function getAlluser(){
		$query = $this->getEntityManager()->createQueryBuilder();
            
		$result = $query->select('FeedBack')
			  			->from('AcmeCoreBundle:FeedBack', 'FeedBack')
              			->getQuery()->getResult();
		return $result;
	}
}
