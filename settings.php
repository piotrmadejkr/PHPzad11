<?php

$dzisiaj=2018;

$tab = array();
$tab[] = ['imie' =>'Paweł', 'nazwisko' =>'Nowak', 'dataUrodzenia' =>'1990','szkolaStart'=>'1997', 'szkolaKoniec'=>'2006'];
$tab[] = ['imie' =>'Anna', 'nazwisko' =>'Korus', 'dataUrodzenia' =>'1998','szkolaStart'=>'1990', 'szkolaKoniec'=>'2003'];
$tab[] = ['imie' =>'Staszek', 'nazwisko' =>'Pieczarka', 'dataUrodzenia' =>' 2001','szkolaStart'=>'1999', 'szkolaKoniec'=>'2007'];




echo '<pre>';
print_r($tab);
echo '</pre>';



//---------------------------------------------------------











//---------------------------------------------------------------------
//to samo co nizej tylko na for 

// function tworzeSelect($index,$tablica) {
//     echo '<select>';
//     for($i=0; $i<count($tablica); $i++) {
//         echo '<option>'.$tablica[$i][$index].'</option>';

//     }
//     echo '</select>';
// }


// tworzeSelect('nazwisko',$tab);
// <option><?php echo $tab[1]['imie'];</option>















//-----------------------------------------------------
//zrob strukture selecta - buduje nam selecta - podajemy jeden parametr o nazwie tego klucza- np nazwiska, daty urodzenia, szkola start, szkola koniec
// tutaj $x to  tak naprawde $tab - nzwa zmieniona na potrzeby funkcji ktora jest uniwersalna, $index (KLUCZ - on jest zawsze w nawiasie [tu]) to konkretna nazwa elementu w $tab czyli np 'imie'//
// function wypiszSelect($x,$index) {

//     echo '<select name="'.$index.'">';
//     foreach ($x as $row) {
//         echo '<option>'.$row[$index].'</option>';
//     }
//     echo '</select>';

// }


// echo wypiszSelect($tab,'imie');
// echo wypiszSelect($tab,'dataUrodzenia');
// echo wypiszSelect($tab,'szkolaKoniec');




// function wypiszSelect($x,$index) {
//     foreach ($x as $row) {
//        echo $row[$index];
   
//     }
// }

// FUN
// // <select name='imie'>
//     // echo.'<option>.'$row'.[$index]</option>
//     // <option>anna</option>
//     // <option>staszek</option>
// // </select>
// FUN


//------------------------------------------------

//oblicz dligosc uczenia się.

// function dlugoscNauki($koniec,$start) {
//     $dlugosc=$koniec-$start;
//     return $dlugosc;
// }

// echo dlugoscNauki($tab[1]['szkolaKoniec'],$tab[1]['szkolaStart']);

//--------------------------------------

// $artur = 1990;
// zad2 -----------------------------
// bo $nazw to tez bedzie tablica, tyle ze z pojedynczym rekordem tablicy. 

// foreach($tab as $nazw) {
//    echo $nazw['nazwisko'];
// }


// Zad1 --------------------------------
// echo $tab[2]['imie'];

//zad3 --------------------
// $wiek=$dzisiaj-$tab[1]['dataUrodzenia'];
// echo $wiek;


// function lata($x) {
//     $dzisiaj=2018;
//     $wiek=$dzisiaj-$x;
//     return $wiek;
// }


// echo lata($artur);
// echo lata(1856);
// echo lata($tab['2']['dataUrodzenia']);





?>