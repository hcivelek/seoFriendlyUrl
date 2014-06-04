<?php
    
    function seoFriendlyUrl($string)
    {
	setlocale(LC_CTYPE, 'en_US.UTF8');
	$string = str_replace('ı', 'i', $string); // bi bunu duzeltemedim.. makineden makineye değişiyor..
	$string = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', trim($string));//Dile mahsus karakterleri ascii genel karakterlerine cevirir
 	$string = str_replace(' ', '-', $string); // boşlukları orta tire (-) karakterine çevirir 		
	$string=strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', $string)); // a-z, A-Z ve 0-9 dışındaki tüm karakterleri uçurur ve neticeyi küçük harfe çevirir
	return preg_replace('/[-]+/','-',$string); //birden fazla orta tire (-) oluşmussa onları teke indirir
    }
    
    $basliklar[]="Merhaba Dünya, Al sana sıradan bir Türkçe Başlık";
    $basliklar[]="'Tırnak'lı başlık olur mu demeyin, belli olmaz";
    $basliklar[]="BÜYÜK HARF MANYAĞI BİR BAŞLIK, OLUR MU OLUR";
    $basliklar[]="Bol karakterli !?#@^+~ bir başlık lütfen";
    
    foreach($basliklar as $baslik)
      echo  seoFriendlyUrl($baslik)."<br/>";
      
