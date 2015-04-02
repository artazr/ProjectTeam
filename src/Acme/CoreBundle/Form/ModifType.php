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

        $builder->add('endroit', 'choice', array('choices' => array('f' => 'FAQ', 'd' => 'Description','i' => 'index','c' => 'contact','in' => 'inscription','b' => 'feedback','e' => 'contact Entreprise','s' => 'Sponsor')))
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