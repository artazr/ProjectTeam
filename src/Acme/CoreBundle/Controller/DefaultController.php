<?php

namespace Acme\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Acme\CoreBundle\Form\FeedBackType;
use Acme\CoreBundle\Entity\FeedBack;

use Acme\CoreBundle\Form\ContactEntrepriseType;
use Acme\CoreBundle\Entity\ContactEntreprise;

use Acme\CoreBundle\Entity\Modif;

class DefaultController extends Controller
{


    public function indexAction()
    {
        return $this->render('AcmeCoreBundle:Default:index.html.twig');
    }
    public function faqAction()
      {
        $ModifRepository = $this->getDoctrine()
            ->getRepository('AcmeCoreBundle:Modif');

        
        $faqs = $ModifRepository->getAllFaq();


        return $this->render('AcmeCoreBundle:Default:faq.html.twig', array( 'faqs' => $faqs));
    
        

    }
    public function descriptionAction()
      {
        $ModifRepository = $this->getDoctrine()
            ->getRepository('AcmeCoreBundle:Modif');

        
        $descriptions = $ModifRepository->getAllDescription();

        return $this->render('AcmeCoreBundle:Default:description.html.twig', array( 'descriptions' => $descriptions));
    
        

    }

     public function modifAction()
      {
        $ModifRepository = $this->getDoctrine()
            ->getRepository('AcmeCoreBundle:Modif');

        
        $descriptions = $ModifRepository->getAllDescription();

        return $this->render('AcmeCoreBundle:Default:description.html.twig', array( 'descriptions' => $descriptions));
    
        

    }



    public function sponsorAction()
    {
         $ContactEntrepriseRepository = $this->getDoctrine()
            ->getRepository('AcmeCoreBundle:ContactEntreprise');

        $products = $ContactEntrepriseRepository->findAll();
        
        shuffle($products);

        return $this->render('AcmeCoreBundle:Default:sponsor.html.twig', array( 'products' => $products));
    }
    public function contactAction()
    {
        return $this->render('AcmeCoreBundle:Default:contact.html.twig');
    }
    public function contactEntrepriseAction(Request $request = null )
    {
        $form = $this->createForm(new ContactEntrepriseType());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $sponsor = new ContactEntreprise();
            $sponsor = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($sponsor);
            $em->flush();
                    return $this->redirect($this->generateUrl('acme_core_contactentreprise'));

        }
        return $this->render('AcmeCoreBundle:Default:contactentreprise.html.twig', array( 'form' => $form->createView() ));
    }
    public function feedbackAction(Request $request = null )
    {
        $form = $this->createForm(new FeedBackType());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $FeedBack = new FeedBack();
            $FeedBack = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($FeedBack);
            $em->flush();
                    return $this->redirect($this->generateUrl('acme_core_feedback'));

        }
        return $this->render('AcmeCoreBundle:Default:feedback.html.twig', array( 'form' => $form->createView() ));
    }
  
    public function inscriptionAction()
    {

        return $this->render('AcmeCoreBundle:Default:inscription.html.twig');
    }


}
