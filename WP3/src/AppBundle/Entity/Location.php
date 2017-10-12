<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table(name="entity_location")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LocationRepository")
 */
class Location
{

    /**
     * @ORM\OneToMany(targetEntity="ProblemMessage", mappedBy="location")
     */
    private $problemMessages;


    /**
     * @ORM\OneToMany(targetEntity="StatusMessage", mappedBy="location")
     */
    private $statusMessages;


    public function __construct()
    {
        $this->problemMessages = new ArrayCollection();
        $this->statusMessages = new ArrayCollection();
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=255)
     */
    private $name;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Location
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
     * @return mixed
     */
    public function getProblemMessages()
    {
        return $this->problemMessages;
    }

    /**
     * @return mixed
     */
    public function getStatusMessages()
    {
        return $this->statusMessages;
    }

    /**
     * @param mixed $problemMessages
     */
    public function setProblemMessages($problemMessages)
    {
        $this->problemMessages = $problemMessages;
    }

    /**
     * @param mixed $statusMessages
     */
    public function setStatusMessages($statusMessages)
    {
        $this->statusMessages = $statusMessages;
    }




}

