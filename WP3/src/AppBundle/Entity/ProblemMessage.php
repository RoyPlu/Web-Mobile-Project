<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ProblemMessage
 *
 * @ORM\Table(name="problem_message")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProblemMessageRepository")
 */
class ProblemMessage
{

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Location", inversedBy="problemMessages")
     * @ORM\JoinColumn(name="locationId", referencedColumnName="id")
     */

    /**
     * @var int
     *
     * @ORM\Column(name="locationId", type="integer")
     */
    private $locationId;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="problem", type="string", length=255)
     */
    private $problem;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var bool
     *
     * @ORM\Column(name="finished", type="boolean")
     */
    private $finished;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="problemMessages")
     * @ORM\JoinColumn(name="techId", referencedColumnName="id")
     */

    /**
     * @var int
     *
     * @ORM\Column(name="techId", type="integer")
     */
    private $techId;

    /**
     * ProblemMessage constructor.
     */
    public function __construct($id, $techId, $locationId, $problem, $image, \DateTime $date, $finished)
    {

        $this->id = $id;
        $this->techId = $techId;
        $this->locationId = $locationId;
        $this->problem = $problem;
        $this->image = $image;
        $this->date = $date;
        $this->finished = $finished;

    }

    /**
     * @return int
     */
    public function getTechId()
    {
        return $this->techId;
    }

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
     * Set locationId
     *
     * @param string $locationId
     *
     * @return ProblemMessage
     */
    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * Get locationId
     *
     * @return string
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * Set problem
     *
     * @param string $problem
     *
     * @return ProblemMessage
     */
    public function setProblem($problem)
    {
        $this->problem = $problem;

        return $this;
    }

    /**
     * Get problem
     *
     * @return string
     */
    public function getProblem()
    {
        return $this->problem;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Date
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set finished
     *
     * @param boolean $finished
     *
     * @return ProblemMessage
     */
    public function setFinished($finished)
    {
        $this->finished = $finished;

        return $this;
    }

    /**
     * Get finished
     *
     * @return bool
     */
    public function getFinished()
    {
        return $this->finished;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return ProblemMessage
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get Image.
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
}

