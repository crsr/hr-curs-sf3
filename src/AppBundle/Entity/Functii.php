<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Functii
 *
 * @ORM\Table(name="functii")
 * @ORM\Entity()
 * @UniqueEntity(fields="alias", message="Alias already taken")
 * @ORM\HasLifecycleCallbacks()
 */
class Functii
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
     * @ORM\OneToOne(targetEntity="angajati", mappedBy="id_functie")
     */
    private $angajat;

    /**
     * @var integer
     *
     * @ORM\OneToOne(targetEntity="contracte", mappedBy="id_functie")
     */
    private $contract;

    /**
     * @ORM\Column(name="denumire_functie", type="string", length=250)
     */
    private $denumireFunctie;

    /**
     * @ORM\Column(name="salariu_maxim", type="decimal")
     */
    private $salariuMaxim;

    /**
     * @ORM\Column(name="salariu_minim, type="decimal")
     */
    private $salariuMinim;

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