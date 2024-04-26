# Traccia 1

- Utilizza i principi di OOP ed Ereditarietà per creare una struttura a classi come la seguente:
```+-|Continent
+-----------|Country
+--------------------|Region
+---------------------------|Province
+------------------------------------|City
+------------------------------------------|Street
```

- Ogni classe avrà un **attributo public** del tipo:
```$nameContinent: 
$nameCountry;
$nameRegion;
$nameProvince; 
$nameCity;
$nameStreet;
```


- La prima **classe genitore** avrà la seguente struttura:
```class Continent
{
 public $nameContinent;

 public function __construct($continent){
  $this->nameContinent = $continent; 
 }
}
```

- Istanzia un nuovo oggetto **$myLocation**, per poi richiamare un metodo che stampi a schermo la seguente frase: “Mi trovo in Europa, Italia, Puglia, Ba, Bari, Strada San Giorgio Martire 2D“.


# Traccia 2
Data questo semplice schema di classificazione animale:
![immagine](https://img.freepik.com/premium-vector/white-background-with-diagram-animals-that-say-word_248627-3413.jpg?w=826)  




- crea una struttura a classi sfruttando l’ereditarietà e seguendo queste semplici regole:
- le classi **non devono avere attributi;**
- ogni classe avrà un **metodo** specifico **protected** per stampare la sua specializzazione; non puoi realizzare metodi definiti public per stampare il risultato;
- l’unico **metodo public** ammesso è il **costruttore**.
ATTENZIONE: utilizzate bene il costruttore per invocare i metodi.

- Il risultato atteso sarà:

```$magikarp = new Fish();
//Nel terminale visualizzerete:
Sono un animale Vertebrato
Sono un animale a Sangue Freddo
Sono un pesce
```

# Traccia 3
- Dato il seguente codice di partenza:
```class Car {
  protected $targa;
  private $num_telaio;
}
  
class Fiat extends Car {
  protected $nome;
  protected $license;
  protected $color;
}
```
- Completa le classi creando i vari **metodi** con il **livello di severità** che ritieni più opportuno per stampare a terminale la seguente frase: “La mia macchina è Opel, con targa ND 123 OJ e numero di Telaio 1234.“
