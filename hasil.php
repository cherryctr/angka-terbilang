<?php
   $angka = $_POST['angka'];
    if($angka == 0) {
        echo "<a href='index.php'>Input angka terlebih dahulu</a>";
    }else{
        
        echo number_format($angka,0,",",".")."<br>";
        echo terbilangs($angka)."<br>";
        echo "<a href='index.php'>back</a>";
    }


    function terbilangs($x){
        $terbilang =array("","Satu","Dua","Tiga","Empat","Lima","Enam","Tujuh","Delapan","Sembilan","Sepuluh","Sebelas");
        if($x < 12 ) return " ". $terbilang[$x];
        elseif($x < 20) return terbilangs($x-10). " Belas";
        elseif($x < 100) return terbilangs($x/10). " Puluh"." ".$terbilang[$x%10];
        elseif($x < 200) return " Seratus"." ".terbilangs($x-100);
        elseif($x < 1000) return terbilangs($x/100). " Ratus"." ".terbilangs($x%100);
        elseif($x < 2000) return " Seribu".terbilangs($x-1000);
        elseif($x < 1000000) return terbilangs($x/1000). " Ribu"." ".terbilangs($x%1000);
        elseif($x < 1000000000) return terbilangs($x/1000000). " Juta"." ".terbilangs($x%1000000);
        elseif($x < 100000000000) return terbilangs($x/1000000000). " Miliyar"." ".terbilangs($x%1000000000);
        // elseif($x < 100000000000000) return terbilangs($x/10000000000). " Triliyun"." ".terbilangs($x%10000000000);


    }

   

   


?>
