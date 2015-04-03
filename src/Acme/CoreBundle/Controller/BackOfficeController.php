<?php

namespace Acme\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Acme\CoreBundle\Entity\FeedBack;

use Acme\CoreBundle\Entity\ContactEntreprise;

use Acme\CoreBundle\Entity\Modif;
use Acme\CoreBundle\Form\ModifType;

class BackOfficeController extends Controller
{  
	public function backofficeAction()
    {
    	
        return $this->render('AcmeCoreBundle:BackOffice:BackOffice.html.twig');
    }

    public function inscritAction()
    {
        
        return $this->render('AcmeCoreBundle:BackOffice:inscrit.html.twig');
    }

    public function modifAction(Request $request = null )
      {
        $form = $this->createForm(new ModifType());
        $form->handleRequest($request);


        if ($form->isValid()) {
            $endroit = $form["endroit"]->getData();
            $contenu = $form["contenu"]->getData();
            
            $ModifRepository = $this->getDoctrine()
                ->getRepository('AcmeCoreBundle:Modif');
            $change = $ModifRepository->changeContenu($endroit, $contenu);


        }
        return $this->render('AcmeCoreBundle:BackOffice:modif.html.twig', array( 'form' => $form->createView() ));
    }


    public function feedbackuserAction()
    {
    	$FeedBackRepository = $this->getDoctrine()
			->getRepository('AcmeCoreBundle:FeedBack');

		$feedbackusers = $FeedBackRepository->getAlluser();


        return $this->render('AcmeCoreBundle:BackOffice:feedbackuser.html.twig', array( 'feedbackusers' => $feedbackusers));
    }

    public function entrepriseAction()
    {

		$ContactEntrepriseRepository = $this->getDoctrine()
			->getRepository('AcmeCoreBundle:ContactEntreprise');

		$entreprises = $ContactEntrepriseRepository->getAllEntreprise();

		return $this->render('AcmeCoreBundle:BackOffice:entreprise.html.twig', array( 'entreprises' => $entreprises));


	}

    public function resultatContenuAction($endroit){

            $ModifRepository = $this->getDoctrine()
                ->getRepository('AcmeCoreBundle:Modif');
            $contenu = $ModifRepository->getContenuFromEndroit($endroit);

            return $this->render('AcmeCoreBundle:BackOffice:resultatContenu.html.twig', array( 'contenu' => $contenu ));
    }

}