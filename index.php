<?php
 /* Provate ad immaginare quali sono le classi necessarie per creare uno shop online; 
 ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. 
 Strutturare le classi gestendo l'ereditarietà dove necessario; 
 ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti. 
 Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...

 $c = new CreditCard(..); 
 $user->insertCreditCard($c);
  */

class Clients {
    public $name;
    public $lastname;
    public $age;
    public $discounts;

    function __construct(String $name, String $lastname, float $age, bool $discounts = false)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->discounts = $discounts;
  }

  public function setSconto($premium){
      if($premium == true){
          $this->sconto = 'Hai lo sconto del 50%';
      }
  }
}

$Francesco = new Clients();
$Francesco->$name='Francesco';
$Francesco->$lastname='Frizzi';
$Francesco->$age= 29;
$Francesco->$discounts= true;


class Products extends Clients {
    public $name;
    public $price;
    public $type;

    function __construct(String $name, float $price, String $type)
  {
    $this->name = $name;
    $this->price = $price;
    $this->type = $type;

  }

  public function setPrice($price){
      if($price > 100 ){
          $this->price = 'Questo capo vale 50€';
      }

  public function setSconto($premium){
      if($premium == true){
          $this->sconto = 'Hai lo sconto del 50%';
      } else {
          $this->sconto = $this->price * 2;
      }    

} 
 
$Pullover = new Products();
$Pullover->$name = 'Pullover';
$Pullover->price = 19.99;
$Pullover->type = 'sweater';


 ?>