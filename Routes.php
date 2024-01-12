<?php
require_once "dbConnect.php";
class Routes
{
    public $id;
    public $route_naam;
    public $route_locatie;
    public $route_lengte;
    public $route_duur;
    


    function __construct($route_naam = null, $route_locatie = null, $route_lengte = null, $route_duur = null)
    {
        $this->route_naam = $route_naam;
        $this->route_locatie = $route_locatie;
        $this->route_lengte = $route_lengte;
        $this->route_duur = $route_duur;
      


    }

    public function Create()
    {


        global $conn;
        $query = $conn->prepare("INSERT INTO routes (route_naam,route_locatie, route_lengte, route_duur) VALUES (:route_naam,:route_locatie, :route_lengte, :route_duur)");
        $query->bindParam(":route_naam", $this->route_naam);
        $query->bindParam(":route_locatie", $this->route_locatie);
        $query->bindParam(":route_lengte", $this->route_lengte);
        $query->bindParam(":route_duur", $this->route_duur);
      
        $query->execute();
    }

    public function Delete($id)
    {
        global $conn;
        $sql = "DELETE FROM routes WHERE id=$id";
        $query = $conn->prepare($sql);
        $query->execute();

    }



        public function Update(){
            global $conn;
            $query = $conn->prepare("UPDATE routes SET route_naam=:route_naam, route_locatie=:route_locatie, route_lengte=:route_lengte, route_duur=:route_duur WHERE id=:id");
            $query->bindParam(":route_naam", $this->route_naam);
            $query->bindParam(":route_locatie", $this->route_locatie);
            $query->bindParam(":route_lengte", $this->route_lengte);
            $query->bindParam(":route_duur", $this->route_duur);
            $query->bindParam(":adres", $this->adres);
            $query->execute();

        }

    public function Read() {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM routes");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    public function Search(){
        global $conn;

        $id = $_POST["id"];


        $stmt = $conn->prepare("SELECT * FROM routes WHERE id = :id");

        $stmt->bindParam(":id", $id);

        $stmt->execute();

         $result = $stmt->fetch(PDO::FETCH_ASSOC);

         $_SESSION['result'] = $result;

    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getroute_naam()
    {
        return $this->route_naam;
    }

    /**
     * @param mixed $route_naam
     */
    public function setroute_naam($route_naam)
    {
        $this->route_naam = $route_naam;
    }

    /**
     * @return mixed
     */
    public function getroute_locatie()
    {
        return $this->route_locatie;
    }

    /**
     * @param mixed $route_locatie
     */
    public function setroute_locatie($route_locatie)
    {
        $this->route_locatie = $route_locatie;
    }

    /**
     * @return mixed
     */
    public function getroute_lengte()
    {
        return $this->route_lengte;
    }

    /**
     * @param mixed $route_lengte
     */
    public function setroute_lengte($route_lengte)
    {
        $this->route_lengte = $route_lengte;
    }

    /**
     * @return mixed
     */
    public function getroute_duur()
    {
        return $this->route_duur;
    }

    /**
     * @param mixed $route_duur
     */
    public function setroute_duur($route_duur)
    {
        $this->route_duur = $route_duur;
    }

 /**
     * @return mixed
     */
    public function getadres()
    {
        return $this->adres;
    }

 /**
     * @param mixed $route_duur
     */
    public function setadres($adres)
    {
        $this->adres = $adres;
    }

}