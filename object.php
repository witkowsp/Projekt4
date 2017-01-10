<!DOCTYPE html>
<html lang="pl">

<head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />

      <title>Formularz</title>
      <meta name="author" content="Piotr Witkowski" />

      <link rel="stylesheet" href="obj.css" type="text/css" />

      <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">


</head>


<body>
<div class="container">
      <br/>
      <br/>

        <div class="content">


             <?php

               class Osoba
               {
                 public $imie;
                 public $nazwisko;
                 public $pesel;

                 function __construct($i, $n, $p)
                 {
                   $this->imie = $i;
                   $this->nazwisko = $n;
                   $this->pesel = $p;
                 }

                 function __destruct()
                 {
                   $this->imie = "null";
                   $this->nazwisko = "null";
                   $this->pesel = "null";
                 }

                 public function wypisz()
                 {
                   return 'Imię: '.$this->imie.' <br/> Nazwisko: '.$this->nazwisko.' <br/> PESEL: '.$this->pesel;
                 }
               }

               class Student extends Osoba
               {
                 private $ocena;
                 function __construct($i, $n, $p, $o)
                 {
                   Osoba::__construct($i,$n,$p);
                   $this->ocena = $o;
                 }
                 function __destruct()
                 {
                   Osoba::__destruct();
                   $this->ocena = "null";
                 }
                 public function wypisz()
                 {
                   return Osoba::wypisz().' <br/> ocena: '.$this->ocena;
                 }
               }

               echo 'Tworzenie obiektów: <br/>';
               $os1 = new Osoba("Piotr","Witkowski","0998766543");
               echo $os1->wypisz().'<br/><br/>';
               $st1 = new Student("Jan","Kowalski","09876543212","3");
               echo $st1->wypisz().'<br/><br/>';

               echo '<br/>Serializacja oraz zniszczenie wcześniejszych obiektów <br/>';
               $os2 = serialize($os1);
               $st2 = serialize($st1);
               $os1->__destruct();
               $st1->__destruct();
               echo $os1->wypisz().'<br/><br/>';
               echo $st1->wypisz().'<br/><br/>';

               echo '<br/>Deserializacja obiektów: <br/>';
               $os3 = unserialize($os2);
               $st3 = unserialize($st2);
               echo $os3->wypisz().'<br/><br/>';
               echo $st3->wypisz().'<br/><br/>';
              ?>


            </div>

  </div>


  <p >		
			<a href="http://validator.w3.org/check?uri=referer">
			<img src="http://www.w3.org/Icons/valid-html401"
			alt="Valid HTML 5 Transitional" height="31" width="88"></a>

			<a href="http://jigsaw.w3.org/css-validator/check/referer">
			<img style="border:0;width:88px;height:31px"
			src="http://jigsaw.w3.org/css-validator/images/vcss"
			alt="Poprawny CSS!" />
			</a>
		</p>


</body>

</html>
