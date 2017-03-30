<?php
namespace hack;
class movieManager
{
    const TABLE = "hackatonffa";
    /**
     * @var hackatonffa
     */
    private $bdd;
    /**
     * @var string
     */
    private $motrecherche;
        /**
     * @var string
     */

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    public function addMovie()
    {
        $sql = "INSERT INTO " . self::TABLE . " (motrecherche) 
                VALUES ('$this->motRecherche');";
        $this->bdd->execSql($sql);
    }
    public function listMovie():\mysqli_result
    {
        $sql = "SELECT * FROM " . self::TABLE;
        return $this->bdd->execSql($sql);
    }
    public function getMovie($id)
    {
        $sql = "SELECT * FROM " . self::TABLE;
        $result = $this->bdd->execSql($sql);
        $data = mysqli_fetch_assoc($result);
        $this->setMotRecherche($data["motrecherche"]);

    }