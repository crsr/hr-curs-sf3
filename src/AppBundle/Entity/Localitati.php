<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Localitati
 *
 * @ORM\Table(name="localitati")
 * @ORM\Entity()
 * @UniqueEntity(fields="alias", message="Alias already taken")
 * @ORM\HasLifecycleCallbacks()
 */
class Judete
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
     * @ORM\ManyToOne(targetEntity="Judete", inversedBy="localitati")
     * @ORM\JoinColumn(name="id_judet", referencedColumnName="id", onDelete="SET NULL")
     */
    private $idJudet;

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