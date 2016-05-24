<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Angajati
 *
 * @ORM\Table(name="angajati")
 * @ORM\Entity()
 * @UniqueEntity(fields="alias", message="Alias already taken")
 * @ORM\HasLifecycleCallbacks()
 */
class Angajati
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @OneToOne(targetEntity="Contracte", mappedBy="contract")
     */
    private $contract;

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