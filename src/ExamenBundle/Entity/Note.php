<?php

namespace ExamenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Note
 *
 * @ORM\Table(name="note")
 * @ORM\Entity(repositoryClass="ExamenBundle\Repository\NoteRepository")
 */
class Note
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
     * @ORM\ManyToOne(targetEntity="EleveBundle\Entity\Eleve")
     * @ORM\JoinColumn(referencedColumnName="id_eleve")
     */
    private $idEleve;

    /**
     * @ORM\ManyToOne(targetEntity="Examen")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $idExamen;

    /**
     * @ORM\ManyToOne(targetEntity="EmploiBundle\Entity\Matiere")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $idMatiere;

    /**
     * @var int
     *
     * @ORM\Column(name="ide", type="integer")
     */
    private $ide=0;

    /**
     * @var float
     *
     * @ORM\Column(name="note", type="float")
     */
    private $note;

    /**
     * @var \DateTime
     * @Assert\GreaterThan("today")
     * @ORM\Column(name="date", type="date")
     */
    private $date;


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
     * Set idEleve
     *
     * @param integer $idEleve
     *
     * @return Note
     */
    public function setIdEleve($idEleve)
    {
        $this->idEleve = $idEleve;

        return $this;
    }

    /**
     * Get idEleve
     *
     * @return int
     */
    public function getIdEleve()
    {
        return $this->idEleve;
    }

    /**
     * Set idExamen
     *
     * @param integer $idExamen
     *
     * @return Note
     */
    public function setIdExamen($idExamen)
    {
        $this->idExamen = $idExamen;

        return $this;
    }

    /**
     * Get idExamen
     *
     * @return int
     */
    public function getIdExamen()
    {
        return $this->idExamen;
    }

    /**
     * Set idMatiere
     *
     * @param integer $idMatiere
     *
     * @return Note
     */
    public function setIdMatiere($idMatiere)
    {
        $this->idMatiere = $idMatiere;

        return $this;
    }

    /**
     * Get idMatiere
     *
     * @return int
     */
    public function getIdMatiere()
    {
        return $this->idMatiere;
    }

    /**
     * Set note
     *
     * @param float $note
     *
     * @return Note
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return float
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Note
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
     * Set ide
     *
     * @param integer $ide
     *
     * @return Note
     */
    public function setIde($ide)
    {
        $this->ide = $ide;

        return $this;
    }

    /**
     * Get ide
     *
     * @return integer
     */
    public function getIde()
    {
        return $this->ide;
    }
}
