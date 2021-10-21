<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 

    class Movie {
        public $nome;
        public $durata;
        public $voto;
        public $descrizione;
        public $eta;
        public $adulto;

        function __construct($_nome, $_durata, $_voto, $_desrizione, $_eta, $_adulto)
        {
            $this->nome = $_nome;
            $this->durata = $_durata;
            $this->voto = $_voto;
            $this->descrizione = $_desrizione;
            $this->eta = $_eta;
            $this->adulto = $_adulto;
            
        }

        public function setAlert() {
            if($this->adulto) {
                return 'Non idoneo ai minorenni';
            }
            return 'Idoneo ai minorenni';
        }
    }

    $superman = new Movie('Superman', '1:30:00', '8', 'Superman è un bel film ...' , '+12', false);

    var_dump($superman);
    var_dump($superman->setAlert());

    $batman = new Movie('Batman', '1:50:00', '8.5', 'Batman è basato su ...' , +'18', true);

    var_dump($batman);
    var_dump($batman->setAlert());


?>