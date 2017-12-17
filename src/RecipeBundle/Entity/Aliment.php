<?php

namespace RecipeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aliment
 *
 * @ORM\Table(name="aliment")
 * @ORM\Entity(repositoryClass="RecipeBundle\Repository\AlimentRepository")
 */
class Aliment
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

//    /**
//     * @ORM\ManyToOne(targetEntity="Recipe", inversedBy="aliments")
//     * @ORM\JoinColumn(name="recipe_id", referencedColumnName="id")
//     */
//    private $recipe;
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
     * @return Aliment
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
}
