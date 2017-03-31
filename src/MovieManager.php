<?php

namespace hack;

class MovieManager
{
    /**
     * @var string
     */
    private $api = "http://www.omdbapi.com/?";
    private $title;
    private $year;
    private $type;
    private $bdd;

    /**
     * @param string $field
     * @return string
     */
    private function escapeField($field)
    {
        return mysqli_real_escape_string($this->bdd->getConnection(), $field);
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    public function workCurl()
    {
        $url = $this->api . "s=" . $this->title . "&y=" . $this->year . "&type=" . $this->type;
        //  Initiate curl
        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL,$url);
        // Execute
        $result = curl_exec($ch);
        // Closing
        curl_close($ch);

        $json = json_decode($result, true);

        return $json['Search'];
    }
}
