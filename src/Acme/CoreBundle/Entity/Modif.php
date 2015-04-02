<?php
namespace Acme\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Modif
 *
 * @ORM\Table(name="modif")
 * @ORM\Entity(repositoryClass="Acme\CoreBundle\Repository\ModifRepository")
 * @Vich\Uploadable
 */
class Modif
{

     /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var text
     *
     * @ORM\Column(name="content", type="text")
     */
    protected $contenu;

     /**
     * @var text
     *
     * @ORM\Column(name="endroit", type="text")
     */
    protected $endroit;

    


    /**
     * Constructor
     */
    public function __construct()
    {

    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set endroit
     *
     * @param string $endroit
     * @return Description
     */
    public function setEndroit($endroit)
    {
        $this->endroit = $endroit;

        return $this;
    }

    /**
     * Get endroit
     *
     * @return string 
     */
    public function getEndroit()
    {
        return $this->endroit;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Description
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }
}
