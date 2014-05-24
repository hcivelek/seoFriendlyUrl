<?php
    
    function seoFriendlyUrl($string)
    {
	setlocale(LC_CTYPE, 'en_US.UTF8');
	$string = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', trim($string));
 	$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens. 		
	$string=strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', $string)); // Removes special chars.
	return preg_replace('/[-]+/','-',$string);	    
    }
    
    $basliklar[]="Merhaba Dünya, Al sana sıradan bir Türkçe Başlık";
    $basliklar[]="'Tırnak'lı başlık olur mu demeyin, belli olmaz";
    $basliklar[]="BÜYÜK HARF MANYAĞI BİR BAŞLIK, OLUR MU OLUR";
    $basliklar[]="Bol karakterli!!! @^+~ bir başlık lütfen";
    
    foreach($basliklar as $baslik)
      echo  seoFriendlyUrl($baslik)."<br/>";
      
