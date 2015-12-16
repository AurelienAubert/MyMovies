<?php

namespace MyMovies\Domain;

class Movie
{
    /**
     * Article id.
     *
     * @var integer
     */
    private $id;
    /**
     * Article title.
     *
     * @var string
     */
    private $title;
    /**
     * Article content.
     *
     * @var string
     */
    private $descriptionCourte;
    private $descriptionLongue;
    private $directeur;
    private $annee;
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getTitle() {
        return $this->title;
    }
    public function setTitle($title) {
        $this->title = $title;
    }
    public function getDescriptionCourte() {
        return $this->descriptionCourte;
    }
    public function setDescriptionCourte($descriptionCourte) {
        $this->descriptionCourte = $descriptionCourte;
    }
    public function getDescriptionLongue() {
        return $this->descriptionLongue;
    }
    public function setDescriptionLongue($descriptionLongue) {
        $this->descriptionLongue = $descriptionLongue;
    }
    public function getDirecteur() {
        return $this->directeur;
    }
    public function setDirecteur($directeur) {
        $this->directeur = $directeur;
    }
}