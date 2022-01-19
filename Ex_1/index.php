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
     *      Definire classe User:
     *          ATTRIBUTI (private):
     *          - username 
     *          - password
     *          - age
     *          
     *          METODI:
     *          - costruttore che accetta username, e password
     *          - proprieta' getter/setter
     *          - printMe: che stampa se stesso
     *          - toString: "username: age [password]"
     * 
     *          ECCEZIONI:
     *          - scatenare eccezione quando username e' minore di 3 caratteri o maggiore di 16
     *          - scatenare eccezione se password non contiene un carattere speciale (non alpha-numerico)
     *          - scatenare eccezione se age non e' un numero
     * 
     *          NOTE:
     *          - per testare il singolo carattere di una stringa
     * 
     *      Testare la classe appena definita con dati corretti e NON corretti all'interno di un
     *      try-catch e eventualmente informare l'utente del problema
     * 
     */ -->
    <?php
    class User {

        private $username;
        private $password;
        private $age;

        public function __construct($username, $password) {

            $this -> setUser($username);
            $this -> setPassword($password);
        }

        public function getUser() {

            return $this -> username;
        }
        public function setUser($username) {
            
            if(strlen($username) < 3 || strlen($username) > 16)
            throw new Exception("La User deve essere maggiore di 3 e minore di 16");
            
            $this -> username = $username;
        }

        public function getPassword() {

            return $this -> password;
        }
        public function setPassword($password) {

            if(ctype_alnum($password))
            throw new Exception("La Password deve contenere un carattere speciale");
            
            $this -> password = $password;
        }

        public function getAge() {

            return $this -> age;
        }
        public function setAge($age) {

            if(!is_numeric($age))
            throw new Exception("L'età deve essere un numero");

            $this -> age = $age;
        }

        public function printMe() {

            echo $this;
        }

        public function printFullPerson() {

            $this -> printMe();
        }

        public function __toString() {

            return $this -> getUser() . " : " . $this -> getAge() . " [ " . $this -> getPassword() ." ] ";
        }        
    }

    try {

    $p1 = new User("Wolverine","Rgjko354@");
    $p1 -> setAge("21");
    $p1 -> printFullPerson();

    } catch (Exception $e) {

        echo $e . "<br><h1>" . $e -> getMessage() . "</h1>";
    } finally {

        echo " = esecuzione finale indipendente dagli errori";
    }
    ?>
</body>
</html>