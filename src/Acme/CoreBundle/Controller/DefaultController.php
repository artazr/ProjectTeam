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
            $Description = $ModifRepository->getContenuFromEndroit('Accueil - Description');
            $Sponsor = $ModifRepository->getContenuFromEndroit('Accueil - Sponsor');
            $Contact = $ModifRepository->getContenuFromEndroit('Accueil - Contact');
            $JuniorISEP = $ModifRepository->getContenuFromEndroit('Accueil - Junior ISEP');

            return $this->render('AcmeCoreBundle:Default:index.html.twig', array( 'Description' => $Description, 
                'Sponsor' => $Sponsor, 'Contact' => $Contact, 'JuniorISEP' => $JuniorISEP,  ));
    }



    public function faqAction()
      {
             $ModifRepository = $this->getDoctrine()
                ->getRepository('AcmeCoreBundle:Modif');

            $FAQ = $ModifRepository->getContenuFromEndroit('FAQ');

            return $this->render('AcmeCoreBundle:Default:faq.html.twig', array( 'FAQ' => $FAQ ));
    }

    
   public function descriptionAction()
   {

            $ModifRepository = $this->getDoctrine()
                ->getRepository('AcmeCoreBundle:Modif');

            $description = $ModifRepository->getContenuFromEndroit('Description');
            $lienVideo = $ModifRepository->getContenuFromEndroit('Lien vidéo');
            $inscription = $ModifRepository->getContenuFromEndroit('Description - Inscription');
            $sponsor = $ModifRepository->getContenuFromEndroit('Description - Sponsor');
            $partagez = $ModifRepository->getContenuFromEndroit('Description - Partagez');

            return $this->render('AcmeCoreBundle:Default:description.html.twig', array( 'description' => $description, 'lienVideo' => $lienVideo, 'inscription' => $inscription,
             'sponsor' => $sponsor, 'partagez' => $partagez ));
    }


    public function sponsorAction()
    {
         $ContactEntrepriseRepository = $this->getDoctrine()
            ->getRepository('AcmeCoreBundle:ContactEntreprise');

        $products = $ContactEntrepriseRepository->findAll();
        
        shuffle($products);

        $ModifRepository = $this->getDoctrine()
                ->getRepository('AcmeCoreBundle:Modif');
        
        $contenu = $ModifRepository->getContenuFromEndroit('Sponsor');

        return $this->render('AcmeCoreBundle:Default:sponsor.html.twig', array( 'products' => $products ,'contenu' => $contenu));
    }
   
    public function contactEntrepriseAction(Request $request = null)
    {
        $form = $this->createForm(new ContactEntrepriseType());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $sponsor = new ContactEntreprise();
            $sponsor = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($sponsor);
            $em->flush();

            return $this->redirect($this->generateUrl('acme_core_contactAnswer' , array( 'destinataire' => 'ContactEntreprise') ));

        }

        return $this->render('AcmeCoreBundle:Default:contactentreprise.html.twig', array( 'form' => $form->createView() ));
    }

    public function feedbackAction(Request $request = null)
    {
        $form = $this->createForm(new FeedBackType());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $FeedBack = new FeedBack();
            $FeedBack = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($FeedBack);
            $em->flush();

            return $this->redirect($this->generateUrl('acme_core_contactAnswer', array( 'destinataire' => 'ContactEntreprise') ));

        }

        return $this->render('AcmeCoreBundle:Default:feedback.html.twig', array( 'form' => $form->createView()));
    }
  
    public function inscriptionAction()
    {
        return $this->render('AcmeCoreBundle:Default:inscription.html.twig');
    }

    public function contactAction()
    {
        return $this->render('AcmeCoreBundle:Default:contact.html.twig');
    }


    public function contactAnswerAction($destinataire)
    {

        $ModifRepository = $this->getDoctrine()
                ->getRepository('AcmeCoreBundle:Modif');
        
        $answer = $ModifRepository->getContenuFromEndroit($destinataire);


        return $this->render('AcmeCoreBundle:Default:contactAnswer.html.twig', array( 'answer' => $answer ));
    }


}
