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

    public function addTitle()
    {
        $sql = "INSERT INTO " . self::TABLE . " (Title)
        VALUES ('$this->title');";
        $this->bdd->execSql($sql);
    }

    public function getTitle()
    {
        $sql =
    }

    private function escapeField($field)
    {
        return mysqli_real_escape_string($this->bdd->getConnection(), $field);
    }
}