<?php

namespace Acme\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Acme\CoreBundle\Repository\ContactEntrepriseRepository;
use Acme\CoreBundle\Entity\ContactEntreprise;

class ContactEntrepriseRepository extends EntityRepository
{
	function getAllEntreprise(){
		$query = $this->getEntityManager()->createQueryBuilder();
            
		$result = $query->select('ContactEntreprise')
			  			->from('AcmeCoreBundle:ContactEntreprise', 'ContactEntreprise')
              			->getQuery()->getResult();
		return $result;
	}
}