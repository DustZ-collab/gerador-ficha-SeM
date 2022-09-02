<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha</title>
</head>
<body>
    <center><?php
		if($_SERVER['REQUEST_METHOD']=='POST'){

		$content = $_POST['meuTextarea'].PHP_EOL;

		header('Content-Description: File Transfer');
		header('Content-Type: text/plain');
		// Indica o nome do arquivo como será "baixado". Você pode modificar e colocar qualquer nome de arquivo     
		header('Content-disposition: attachment; filename=ficha.txt');
		//header('Content-Length: '.strlen($content));
		//header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		//header('Expires: 0');
		//header('Pragma: public');
		echo $content;
		exit;
	}
		
	
        for ($i=0; $i < 9; $i++) { 
            $dice[$i]=rand(1,6);
        }
        /*Força*/
        switch ($dice[0]) {
            case 1:
                $for='+0';
                break;
            case 2:
                $for='+0';
                break;

            case 3:
                $for='+1';
                break;
            case 4:
                $for='+1';
                break;
            case 5:
                $for='+2';
                break;
            case 6:
                $for='+3';
                break;
                       
        }
		
		/*Agilidade*/
        switch ($dice[1]) {
            case 1:
                $agi='+0';
                break;
            case 2:
                $agi='+0';
                break;

            case 3:
                $agi='+1';
                break;
            case 4:
                $agi='+1';
                break;
            case 5:
                $agi='+2';
                break;
            case 6:
                $agi='+3';
                break;
                       
        }

		/*Saude*/
		switch ($dice[2]) {
		
					case 1:
						$sau='+0';
						break;
					case 2:
						$sau='+0';
						break;

					case 3:
						$sau='+1';
						break;
					case 4:
						$sau='+1';
						break;
					case 5:
						$sau='+2';
						break;
					case 6:
						$sau='+3';
						break;
							   
				}
	
		/*Inteligencia*/
		switch ($dice[3]) {
					case 1:
						$int='+0';
						break;
					case 2:
						$int='+0';
						break;

					case 3:
						$int='+1';
						break;
					case 4:
						$int='+1';
						break;
					case 5:
						$int='+2';
						break;
					case 6:
						$int='+3';
						break;
							   
				}	
				
		/*Sabedoria*/
		switch ($dice[4]) {
					case 1:
						$sab='+0';
						break;
					case 2:
						$sab='+0';
						break;

					case 3:
						$sab='+1';
						break;
					case 4:
						$sab='+1';
						break;
					case 5:
						$sab='+2';
						break;
					case 6:
						$sab='+3';
						break;
							   
				}
				
		/*Personalidade*/
		switch ($dice[5]) {
					case 1:
						$per='+0';
						break;
					case 2:
						$per='+0';
						break;

					case 3:
						$per='+1';
						break;
					case 4:
						$per='+1';
						break;
					case 5:
						$per='+2';
						break;
					case 6:
						$per='+3';
						break;
							   
				}
        
		/*Ocupação*/
		switch ($dice[8]) {
					case 1:
						$ocu='Pastor(a)';
						$item='Cajado';
						break;
					case 2:
						$ocu='Oleiro(a)';
						$item='Perrete';
						break;

					case 3:
						$ocu='Coureiro(a)';
						$item='Faca';
						break;
					case 4:
						$ocu='Tatuador(a)';
						$item='Punhal';
						break;
					case 5:
						$ocu='Ferreiro(a)';
						$item='Martelo';
						break;
					case 6:
						$ocu='Armeiro(a)';
						$item='Espada Curta';
						break;
							   
				}
				
				
		$pv=$dice[6]+$for+$sau;
		$pm=$dice[7]+$int+$sab;
		$teso=rand(1,6)*3;
		$def=10+$agi;
		
		
		
		echo"<form action='' method='post'>
			<textarea name='meuTextarea' readonly='on' rows='19' cols='26' style='resize: none'>
|========| FICHA |=========|
 Força: $for
 Agilidade: $agi
 Saude: $sau
 Inteligencia: $int
 Sabedoria: $sab
 Personalidade: $per
|==========================|
 Ocupação: $ocu
 
 Item Inicial: $item
|==========================|
 PV: $pv / $pv

 PM: $pm / $pm
 
 DEF: $def
|==========================|
</textarea>
			<p><input type='submit' value='Salvar'>         <input type='button' value='Gerar Outra' onClick='history.go(0)'> </p>
			</form>";
		
		
		
    ?></center>
</body>
</html>