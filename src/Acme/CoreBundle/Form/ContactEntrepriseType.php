<?php

namespace Acme\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Acme\CoreBundle\Entity\ContactEntreprise;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactEntrepriseType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('nom')
                ->add('imageFile', 'vich_file', array(
            'required'      => false,
            'allow_delete'  => true, // not mandatory, default is true
            'download_link' => true, // not mandatory, default is true
                ))
                ->add('email', 'email')
                ->add('remarque');
           
}

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\CoreBundle\Entity\ContactEntreprise'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acme_corebundle_contactentreprise';
    }
}
