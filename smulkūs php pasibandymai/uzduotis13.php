
<?php
    class Zmogus {
        public $vardas;
        public $pavarde;
        public $pasisveikinimas = 'Sveiki';
        
        public function labas() {
            return $this -> pasisveikinimas . ', esu '. $this -> vardas . $this -> pavarde .  '<br>';
        }
    }

$tomas = new Zmogus();
$andrius = new Zmogus();

$tomas -> vardas = "Tomas ";
$tomas -> pavarde = "Tomaitis ";

$andrius -> vardas = "Andrius ";
$andrius -> pavarde = "Andriukaitis ";

echo $tomas -> labas();
echo $andrius -> labas();








/*class Zmogus {
    public $vardas;
    public $pavarde;
    public function pasisveikinimas() {
        echo 'As esu' . {$this->vardas} . {$this-pavarde} . ', Labas visiems.';
    }
}

$zmogus1=new Zmogus();
$zmogus2=new Zmogus();

$zmogus1->vardas="Tomas";
$zmogus1->pavarde="Tomaitis";
$zmogus2->vardas="Andrius";
$zmogus2->pavarde="Andriukaitis";

echo $zmogus1->pasisveikinimas();
//echo "Zmogaus2 vardas: {$zmogus2->vardas}, pavarde: {$zmogus2->pavarde}, pasisveikinimas: {$zmogus2->pasisveikinimas()}";*/

?>
