<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Contracte
 *
 * @ORM\Table(name="contracte")
 * @ORM\Entity()
 * @UniqueEntity(fields="alias", message="Alias already taken")
 * @ORM\HasLifecycleCallbacks()
 */
class Contracte
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\OneToOne(targetEntity="Angajati", inversedBy="contract")
     * @ORM\JoinColumn(name="id_angajat", referencedColumnName="id", onDelete="SET NULL")
     */
    private $angajat;

    /**
     * @var integer
     *
     * @ORM\ManyToMany(targetEntity="Departamente", inversedBy="contracte")
     * @ORM\JoinColumn(name="contracte_departamente")
     */
    private $departamente;

    /**
     * @ORM\Column(name="siruta", type="integer")
     */
    private $siruta;

    /**
     * @ORM\Column(name="longitudine", type="float")
     */
    private $longitudine;

    /**
     * @ORM\Column(name="latitudine", type="float")
     */
    private $latitudine;

    /**
     * @ORM\Column(name="denumire", type="string")
     */
    private $denumire;

    /**
     * @ORM\Column(name="regiune", type="string")
     */
    private $regiune;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dat_cre", type="datetime")
     * @Assert\DateTime()
     */
    private $datCre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dat_upd", type="datetime")
     * @Assert\DateTime()
     */

    private $datUpd;
}