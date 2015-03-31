<?php

namespace Acme\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Acme\CoreBundle\Form\FeedBackType;
use Acme\CoreBundle\Entity\FeedBack;

use Acme\CoreBundle\Form\ContactEntrepriseType;
use Acme\CoreBundle\Entity\ContactEntreprise;

use Acme\CoreBundle\Entity\Description;

use Acme\CoreBundle\Entity\Faq;

class DefaultController extends Controller
{


    public function indexAction()
    {
        return $this->render('AcmeCoreBundle:Default:index.html.twig');
    }
    public function descriptionAction()
      {
        $DescriptionRepository = $this->getDoctrine()
            ->getRepository('AcmeCoreBundle:Description');

        $descriptions = $DescriptionRepository->getAllDescription();


        return $this->render('AcmeCoreBundle:Default:description.html.twig', array( 'descriptions' => $descriptions));
    }
    public function sponsorAction()
    {
        return $this->render('AcmeCoreBundle:Default:sponsor.html.twig');
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
        }
        return $this->render('AcmeCoreBundle:Default:feedback.html.twig', array( 'form' => $form->createView() ));
    }
  
    public function inscriptionAction()
    {

        return $this->render('AcmeCoreBundle:Default:inscription.html.twig');
    }

    public function faqAction()
      {
        $FaqRepository = $this->getDoctrine()
            ->getRepository('AcmeCoreBundle:Faq');

        $faqs = $FaqRepository->getAllFaq();


        return $this->render('AcmeCoreBundle:Default:faq.html.twig', array( 'faqs' => $faqs));
    }



}
