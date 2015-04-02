<?php

namespace Acme\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ModifType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('endroit', 'choice', array('choices' => 
            array(
                'Page Accueil' => array(
                    'Accueil - Sponsor' => 'Sponsor',
                    'Accueil - Inscription' => 'Inscription',
                    'Accueil - Contact' => 'Contact',
                    'Accueil - Junior ISEP' => 'Junior ISEP',
                ),
                'Page Description' => array(
                    'Description' => 'Description',
                    'Lien vidéo' => 'Lien vidéo',
                    'Description - Inscription' => 'Inscription',
                    'Description - Sponsor' => 'Sponsor',
                    'Description - Partagez' => 'Partagez'
                ),
                'Page Sponsor' => array(
                    'Sponsor' => 'Sponsor'
                ),
                'Page FAQ' => array(
                    'FAQ' => 'FAQ'
                )
            )))
                ->add('contenu', 'textarea');
                
                

    }


    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\CoreBundle\Entity\Modif'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acme_corebundle_modif';
    }
}