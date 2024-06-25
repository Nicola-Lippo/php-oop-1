<?php
//creo la classe, le classi si nominano in PascalCase
class Movie
{
    //private = per preservare lo sato della nostra classe
    private string $title;
    private string $category;
    private int $vote;

    //creo una funzione col costruttore, per convenzione si mette in alto
    //le () simbooleggiano () in basso dove definisco le mie variabili
    public function __construct(string $_title, string $_category,  $_vote)
    {
        if (!is_numeric($_vote)) {
            throw new Exception('il voto devve essere un numero:' . $_vote);
        }

        //cosi facendo assegnamo dei parametri $_ alle nostre istanze
        $this->title = $_title;
        $this->category = $_category;
        $this->vote = $_vote;
    }

    //per leggere proprietà private si creano dei metodi(funzioni dentro le classi) che sono public
    //GET per convenzione get + valore
    public function getTitle(): string
    {
        // this serve per restituire la variabile d'istanza
        return $this->title;
    }
    //per settare le proprietà
    //SET set + valore
    //void si usa quando il metodo non deve restituire nulla
    public function setTitle(string $titolo): void
    {
        $this->title = $titolo;
    }
    /*************/
    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $categoria): void
    {
        $this->category = $categoria;
    }
    /*************/
    public function getVote(): int
    {
        return $this->vote;
    }

    public function setVote($voto): void
    {
        //creao un eccezione
        if (!is_numeric($voto)) {
            throw new Exception('l\'aggiornamento voto devve essere un numero');
        }
        $this->vote = $voto;
    }
}

//fuori dalla classe
try {
    //istanze classe Movie
    $movie1 = new Movie("Il Grande Film", "Documentary", 8);
    $movie2 = new Movie("La Grande Risata", "Comedy", 10);
    $movie3 = new Movie("V per Vuejs", "Action", 5);
    $movie4 = new Movie("The Lord of Ping", "Fantasy", 10);

    var_dump($movie1);
    var_dump($movie2);
    var_dump($movie3);
    var_dump($movie4);
    /*
    quando si usa set 
    $movie3->setVote(5);
    echo $movie3->getVote();
    */
} catch (Exception $error) {
    // var_dump($error);
    echo '<h1 class="text-center">' . $error->getMessage() . '</h1>';
}
