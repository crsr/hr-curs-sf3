<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Judete
 *
 * @ORM\Table(name="judete")
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
     * @ORM\Column(name="cod", type="string", length=2)
     */
    private $cod;

    /**
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="Localitati", mappedBy="id_judet")
     *
     */
    private $localitati;

    /**
     * @ORM\Column(name="denumire", type="string")
     */
    private $denumire;

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