<?php

namespace Acme\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Acme\CoreBundle\Repository\ModifRepository;
use Acme\CoreBundle\Entity\Modif;

class ModifRepository extends EntityRepository
{

	function changeContenu($endroit, $contenu){
		$query = $this->getEntityManager()->createQueryBuilder();
         
		$q = $query->update('AcmeCoreBundle:Modif', 'm')
		        ->set('m.contenu', '?1')
		        ->where('m.endroit = ?2')
		        ->setParameter(1, $contenu)
		        ->setParameter(2, $endroit)
		        ->getQuery();

		$p = $q->execute();
		
		return $p;
	}

	function getContenuFromEndroit( $endroit ){
		$query = $this->getEntityManager()->createQueryBuilder();
            
		$result = $query->select('Modif')
			  			->from('AcmeCoreBundle:Modif', 'Modif')
			  			->where('Modif.endroit = ?1')
			  			->setParameter(1, $endroit)
              			->getQuery()->getResult();
              			
		return $result[0]->getContenu();
	}

	

	
}
