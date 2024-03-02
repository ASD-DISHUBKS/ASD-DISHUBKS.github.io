<?php

        // mengambil data dari yang dikirim dari form pembuatansurat.php 
        $a   		= $_POST['a'];
		$ta   		= $_POST['ta'];
		$b   		= $_POST['b'];
		$tb   		= $_POST['tb'];
		$c    	 	= $_POST['c'];
        $tc    		= $_POST['tc'];
        $d    		= $_POST['d'];
		$td    		= $_POST['td'];
		$e     		= $_POST['e'];
		$te     	= $_POST['te'];
		$f     		= $_POST['f'];
		$tf     	= $_POST['tf'];
		$g     		= $_POST['g'];
		$tg   		= $_POST['tg'];
		$h   		= $_POST['h'];
		$th   		= $_POST['th'];
		$i   		= $_POST['i'];
		$ti    	 	= $_POST['ti'];
        $j    		= $_POST['j'];
        $tj    		= $_POST['tj'];
		$k    		= $_POST['k'];
		$tk     	= $_POST['tk'];
		$l     		= $_POST['l'];
		$tl     	= $_POST['tl'];
		$m     		= $_POST['m'];
		$tm     	= $_POST['tm'];
		$n    		= $_POST['n'];
		$o     		= $_POST['o'];
		$to     	= $_POST['to'];
		$p     		= $_POST['p'];
		$tp     	= $_POST['tp'];
		$q     		= $_POST['q'];
		$tq     	= $_POST['tq'];
    
    
        //mengambil dokumen surat
        $document = file_get_contents("SURAT.rtf");
     
    
        //mereplace semua kata yang ada di file dengan variabel
		$document = str_replace("#A", $a, $document);
		$document = str_replace("#TA", $ta, $document);
		$document = str_replace("#B", $b, $document);
		$document = str_replace("#TB", $tb, $document);
        $document = str_replace("#C", $c, $document);
		$document = str_replace("#TC", $tc, $document);
		$document = str_replace("#D", $d, $document);
		$document = str_replace("#TD", $td, $document);
		$document = str_replace("#E", $e, $document);
		$document = str_replace("#TE", $te, $document);
		$document = str_replace("#F", $f, $document);
		$document = str_replace("#TF", $tf, $document);
		$document = str_replace("#G", $g, $document);
		$document = str_replace("#TG", $tg, $document);
		$document = str_replace("#H", $h, $document);
		$document = str_replace("#TH", $th, $document);
		$document = str_replace("#I", $i, $document);
		$document = str_replace("#TI", $ti, $document);
		$document = str_replace("#J", $j, $document);
		$document = str_replace("#TJ", $tj, $document);
		$document = str_replace("#K", $k, $document);
		$document = str_replace("#TK", $tk, $document);
		$document = str_replace("#L", $l, $document);
		$document = str_replace("#TL", $tl, $document);
		$document = str_replace("#M", $m, $document);
		$document = str_replace("#TM", $tm, $document);
		$document = str_replace("#N", date('d-m-Y', strtotime($n)), $document);
		$document = str_replace("#O", $o, $document);
		$document = str_replace("#TO", $to, $document);
		$document = str_replace("#P", $p, $document);
		$document = str_replace("#TP", $tp, $document);
		$document = str_replace("#Q", $q, $document);
		$document = str_replace("#TQ", $tq, $document);
		
     
    
        // header untuk membuka file yang dihasilkan dengna aplikasi Ms. Word
        // nama file yang dihasilkan
        header("Content-type: application/msword");
        header("Content-disposition: inline; filename=surat.doc");
        header("Content-length: " . strlen($document));
        echo $document;
    ?>