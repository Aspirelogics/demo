<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(name="name", type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $name;
    /**
     * @ORM\Column(name="accuracy", type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter accuracy.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=1,
     *     max=255,
     *     minMessage="The accuracy is too short.",
     *     maxMessage="The accuracy is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $accuracy;
    /**
     * @ORM\Column(name="average_gains", type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter average_gains.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=1,
     *     max=255,
     *     minMessage="The average_gains is too short.",
     *     maxMessage="The average_gains is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $average_gains;
    /**
     * @ORM\Column(name="rank", type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter rank.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=1,
     *     max=255,
     *     minMessage="The rank is too short.",
     *     maxMessage="The rank is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $rank;
    /**
     * @ORM\Column(name="short", type="string", length=255)
     *
     * @Assert\NotBlank(message="Please select one.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=1,
     *     max=255,
     *     minMessage="The short is too short.",
     *     maxMessage="The short is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $short;
    public function __construct()
    {
        parent::__construct();
        // your own logic
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
     * Set name
     *
     * @param string $name
     * @return User
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
     * Set accuracy
     *
     * @param string $accuracy
     * @return User
     */
    public function setAccuracy($accuracy)
    {
        $this->accuracy = $accuracy;

        return $this;
    }

    /**
     * Get accuracy
     *
     * @return string 
     */
    public function getAccuracy()
    {
        return $this->accuracy;
    }

    /**
     * Set average_gains
     *
     * @param string $averageGains
     * @return User
     */
    public function setAverageGains($averageGains)
    {
        $this->average_gains = $averageGains;

        return $this;
    }

    /**
     * Get average_gains
     *
     * @return string 
     */
    public function getAverageGains()
    {
        return $this->average_gains;
    }

    /**
     * Set rank
     *
     * @param string $rank
     * @return User
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return string 
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set short
     *
     * @param string $short
     * @return User
     */
    public function setShort($short)
    {
        $this->short = $short;

        return $this;
    }

    /**
     * Get short
     *
     * @return string 
     */
    public function getShort()
    {
        return $this->short;
    }
}
