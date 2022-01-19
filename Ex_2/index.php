<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- /**
     *      
     *      Definire classe Computer:
     *          ATTRIBUTI:
     *          - codice univoco
     *          - modello
     *          - prezzo
     *          - marca
     * 
     *          METODI:
     *          - costruttore che accetta codice univoco e prezzo
     *          - proprieta' getter/setter per tutte le variabili d'istanza
     *          - printMe: che stampa se stesso (come quella vista a lezione)
     *          - toString: "marca modello: prezzo [codice univoco]"
     * 
     *          ECCEZIONI:
     *          - codice univoco: deve essere composto da esattamente 6 cifre (no altri caratteri)
     *          - marca e modello: devono essere costituiti da stringhe tra i 3 e i 20 caratteri
     *          - prezzo: deve essere un valore intero compreso tra 0 e 2000
     * 
     *      Testare la classe appena definita con tutte le casistiche interessanti per verificare
     *      il corretto funzionamento dell'algoritmo
     */ -->
    <?php
    class Computer {

        private $codeId;
        private $model;
        private $price;
        private $brand;

        public function __construct($codeId, $price) {

            $this -> setCodeId($codeId);
            $this -> setPrice($price);
        }

        public function getCodeId() {

            return $this -> codeId;
        }
        public function setCodeId($codeId) {
            
            if(strlen($codeId) != 6 || !is_numeric($codeId))
            throw new Exception("Il codice univoco deve essere di 6 cifre");
            
            $this -> codeId = $codeId;
        }

        public function getModel() {

            return $this -> model;
        }
        public function setModel($model) {

            if(strlen($model) < 3 || strlen($model) > 20)
            throw new Exception("Devono essere costituiti da stringhe tra i 3 e i 20 caratteri");
            
            $this -> model = $model;
        }

        public function getPrice() {

            return $this -> price;
        }
        public function setprice($price) {

            if(!is_int($price) || $price < 0 || $price > 2000)
            throw new Exception("Il prezzo deve essere un valore intero compreso tra 0 e 2000");

            $this -> price = $price;
        }

        public function getBrand() {

            return $this -> brand;
        }
        public function setBrand($brand) {

            if(strlen($brand) < 3 || strlen($brand) > 20)
            throw new Exception("Devono essere costituiti da stringhe tra i 3 e i 20 caratteri");

            $this -> brand = $brand;
        }

        public function printMe() {

            echo $this;
        }

        public function printFullPerson() {

            $this -> printMe();
        }

        public function __toString() {

            return $this -> getBrand(). "  " .$this -> getModel() . " : " . $this -> getPrice() . " [ " . $this -> getCodeId() ." ] ";
        }        
    }

    try {

    $p1 = new Computer("501200", 1390);
    $p1 -> setModel("GallardoGallardoGalo");
    $p1 -> setBrand("Lamborghini");
    $p1 -> printFullPerson();

    } catch (Exception $e) {

        echo $e . "<br><h1>" . $e -> getMessage() . "</h1>";
    } finally {

        echo " = esecuzione finale indipendente dagli errori";
    }
    ?>
</body>
</html>