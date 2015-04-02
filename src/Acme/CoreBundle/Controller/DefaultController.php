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
             $ModifRepository = $this->getDoctrine()
                ->getRepository('AcmeCoreBundle:Modif');
            $contenu = $ModifRepository->getContenuFromEndroit('i');

            return $this->render('AcmeCoreBundle:Default:index.html.twig', array( 'contenu' => $contenu ));
    }
    public function faqAction($endroit='f')
      {
             $ModifRepository = $this->getDoctrine()
                ->getRepository('AcmeCoreBundle:Modif');
            $contenu = $ModifRepository->getContenuFromEndroit($endroit);

            return $this->render('AcmeCoreBundle:Default:faq.html.twig', array( 'contenu' => $contenu ));
    }

    
   public function descriptionAction($endroit='d')
   {

            $ModifRepository = $this->getDoctrine()
                ->getRepository('AcmeCoreBundle:Modif');
            $contenu = $ModifRepository->getContenuFromEndroit($endroit);

            return $this->render('AcmeCoreBundle:Default:description.html.twig', array( 'contenu' => $contenu ));
    }


    public function sponsorAction($endroit='s')
    {
         $ContactEntrepriseRepository = $this->getDoctrine()
            ->getRepository('AcmeCoreBundle:ContactEntreprise');

        $products = $ContactEntrepriseRepository->findAll();
        
        shuffle($products);

        $ModifRepository = $this->getDoctrine()
                ->getRepository('AcmeCoreBundle:Modif');
            $contenu = $ModifRepository->getContenuFromEndroit($endroit);

        return $this->render('AcmeCoreBundle:Default:sponsor.html.twig', array( 'products' => $products ,'contenu' => $contenu));
    }
   
    public function contactEntrepriseAction(Request $request = null, $endroit = 'e' )
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
         
        $ModifRepository = $this->getDoctrine()
                ->getRepository('AcmeCoreBundle:Modif');
            $contenu = $ModifRepository->getContenuFromEndroit($endroit);
        return $this->render('AcmeCoreBundle:Default:contactentreprise.html.twig', array( 'form' => $form->createView() ,'contenu' => $contenu));
    }
    public function feedbackAction(Request $request = null, $endroit = 'b')
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
        $ModifRepository = $this->getDoctrine()
                ->getRepository('AcmeCoreBundle:Modif');
            $contenu = $ModifRepository->getContenuFromEndroit($endroit);
        return $this->render('AcmeCoreBundle:Default:feedback.html.twig', array( 'form' => $form->createView() ,'contenu' => $contenu));
    }
  
       public function inscriptionAction($endroit='in')
      {
             $ModifRepository = $this->getDoctrine()
                ->getRepository('AcmeCoreBundle:Modif');
            $contenu = $ModifRepository->getContenuFromEndroit($endroit);

            return $this->render('AcmeCoreBundle:Default:inscription.html.twig', array( 'contenu' => $contenu ));
    }

     public function contactAction($endroit='c')
    {
             $ModifRepository = $this->getDoctrine()
                ->getRepository('AcmeCoreBundle:Modif');
            $contenu = $ModifRepository->getContenuFromEndroit($endroit);

            return $this->render('AcmeCoreBundle:Default:contact.html.twig', array( 'contenu' => $contenu ));
    }


}
