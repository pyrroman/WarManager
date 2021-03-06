<?php

namespace CHC\WarManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Village
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CHC\WarManagerBundle\Entity\VillageRepository")
 */
class Village
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
    
    /**
     * @ORM\ManyToOne(targetEntity="Clan", inversedBy="villages") 
     */
    private $clan;
    
    /**
     * @ORM\OneToMany(targetEntity="Battle", mappedBy="clanVillage", cascade={"persist", "persist"}) 
     */
    private $battles;
    
    /**
     * @ORM\OneToMany(targetEntity="Reservation", mappedBy="clanVillage", cascade={"persist", "persist"}) 
     */
    private $reservations;
    
    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="clanVillage", cascade={"persist", "persist"}) 
     */
    private $comments;


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
     * Set name
     *
     * @param string $name
     * @return Village
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->battles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set clan
     *
     * @param \CHC\WarManagerBundle\Entity\Clan $clan
     * @return Village
     */
    public function setClan(\CHC\WarManagerBundle\Entity\Clan $clan = null)
    {
        $this->clan = $clan;

        return $this;
    }

    /**
     * Get clan
     *
     * @return \CHC\WarManagerBundle\Entity\Clan 
     */
    public function getClan()
    {
        return $this->clan;
    }

    /**
     * Add battles
     *
     * @param \CHC\WarManagerBundle\Entity\Battle $battles
     * @return Village
     */
    public function addBattle(\CHC\WarManagerBundle\Entity\Battle $battles)
    {
        $this->battles[] = $battles;

        return $this;
    }

    /**
     * Remove battles
     *
     * @param \CHC\WarManagerBundle\Entity\Battle $battles
     */
    public function removeBattle(\CHC\WarManagerBundle\Entity\Battle $battles)
    {
        $this->battles->removeElement($battles);
    }

    /**
     * Get battles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBattles()
    {
        return $this->battles;
    }

    /**
     * Add reservations
     *
     * @param \CHC\WarManagerBundle\Entity\Reservation $reservations
     * @return Village
     */
    public function addReservation(\CHC\WarManagerBundle\Entity\Reservation $reservations)
    {
        $this->reservations[] = $reservations;

        return $this;
    }

    /**
     * Remove reservations
     *
     * @param \CHC\WarManagerBundle\Entity\Reservation $reservations
     */
    public function removeReservation(\CHC\WarManagerBundle\Entity\Reservation $reservations)
    {
        $this->reservations->removeElement($reservations);
    }

    /**
     * Get reservations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * Add comments
     *
     * @param \CHC\WarManagerBundle\Entity\Comment $comments
     * @return Village
     */
    public function addComment(\CHC\WarManagerBundle\Entity\Comment $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * Remove comments
     *
     * @param \CHC\WarManagerBundle\Entity\Comment $comments
     */
    public function removeComment(\CHC\WarManagerBundle\Entity\Comment $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }
}
