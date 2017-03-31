<?php

namespace hack;

class TitleManager
{
    const TABLE = "recherche";

    /**
     * @var BddManager
     */
    private $bdd;

    /**
     * @var MovieManager
     */
    private $title;

    /**
     * TitleManager constructor.
     * @param BddManager $bdd
     */
    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    /**
     * @return MovieManager
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param MovieManager $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function addTitle()
    {
        $sql = "INSERT INTO " . self::TABLE . " (Title)
        VALUES ('$this->title');";
        $this->bdd->execSql($sql);
    }
}
