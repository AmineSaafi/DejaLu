<?php

namespace RecipeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recipe
 *
 * @ORM\Table(name="recipe")
 * @ORM\Entity(repositoryClass="RecipeBundle\Repository\RecipeRepository")
 */
class Recipe
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
    * @ORM\ManyToMany(targetEntity="RecipeBundle\Entity\Aliment")
    * @ORM\JoinTable(name="Recipe_Aliments",
    *      joinColumns={@ORM\JoinColumn(name="recipe_id", referencedColumnName="id")},
    *      inverseJoinColumns={@ORM\JoinColumn(name="aliment_id", referencedColumnName="id")}
    *      )
    */
    private $aliments;



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
     * Set title
     *
     * @param string $title
     * @return Recipe
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Recipe
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->aliments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add aliments
     *
     * @param \RecipeBundle\Entity\Aliment $aliments
     * @return Recipe
     */
    public function addAliment(\RecipeBundle\Entity\Aliment $aliments)
    {
        $this->aliments[] = $aliments;

        return $this;
    }

    /**
     * Remove aliments
     *
     * @param \RecipeBundle\Entity\Aliment $aliments
     */
    public function removeAliment(\RecipeBundle\Entity\Aliment $aliments)
    {
        $this->aliments->removeElement($aliments);
    }

    /**
     * Get aliments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAliments()
    {
        return $this->aliments;
    }
}
