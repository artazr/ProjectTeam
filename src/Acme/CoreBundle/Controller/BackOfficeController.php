<?php

namespace Acme\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Acme\CoreBundle\Entity\FeedBack;

use Acme\CoreBundle\Entity\ContactEntreprise;

use Acme\CoreBundle\Entity\Description;
use Acme\CoreBundle\Form\DescriptionType;

use Acme\CoreBundle\Entity\Faq;
use Acme\CoreBundle\Form\FaqType;

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
        $form = $this->createForm(new DescriptionType());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $description = new Description();
            $description = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($description);
            $em->flush();
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


    public function faqmodifAction(Request $request = null )
      {
        $form = $this->createForm(new FaqType());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $faq = new FAq();
            $faq = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($faq);
            $em->flush();
        }
        return $this->render('AcmeCoreBundle:BackOffice:faqmodif.html.twig', array( 'form' => $form->createView() ));
    }

}