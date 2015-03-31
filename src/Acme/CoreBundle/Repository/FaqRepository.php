<?php

namespace Acme\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Acme\CoreBundle\Repository\FaqRepository;
use Acme\CoreBundle\Entity\Faq;

class FaqRepository extends EntityRepository
{
	function getAllFaq(){
		$query = $this->getEntityManager()->createQueryBuilder();
            
		$result = $query->select('faq')
			  			->from('AcmeCoreBundle:Faq', 'faq')
              			->getQuery()->getResult();
		return $result;
	}
}