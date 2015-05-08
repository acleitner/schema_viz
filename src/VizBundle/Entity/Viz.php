<?php
// src/VizBundle/Entity/Viz.php

namespace VizBundle\Entity;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
* @ORM\Entity()
* @ORM\Table(name="viz")
*/
class Viz {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created_at;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated_at;

    /**
     * @ORM\OneToMany(targetEntity="Table", mappedBy="viz")
     */
    private $tables;

    public function __construct()
    {
        $this->tables = new ArrayCollection();
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function updateTimestamps()
    {
        $this->setUpdatedAt(new \DateTime('now'));

        if ($this->getCreatedAt() == null) {
            $this->setCreatedAt(new \DateTime('now'));
        }
    }

    /**
     * Get id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set created_at
     * @param \DateTime $createdAt
     * @return string
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
        return $this;
    }

    /**
     * Get created_at
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     * @param \DateTime $updatedAt
     * @return string
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
        return $this;
    }

    /**
     * Get updated_at
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }


    /**
     * @param \VizBundle\Entity\Table $table
     * @return $this
     */
    public function addTable($table)
    {
        $this->tables[] = $table;
        return $this;
    }

    /**
     * @param \VizBundle\Entity\Table $table
     */
    public function removeTable($table)
    {
        $this->tables->removeElement($table);
    }

    /**
     * Get tables
     * @return Collection
     */
    public function getTables()
    {
        return $this->tables;
    }
}
