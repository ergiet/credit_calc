<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Kredycik informacje</title>
    </head>
    <body>
        <?php
            $kwota = $_REQUEST['kwota']; 
            $okres = $_REQUEST['okres']; 
            $oproc = $_REQUEST['oproc'];

            if(!(isset($kwota)) && !(isset($okres)) && !(isset($oproc))){
                $zwrot[] = 'Brak jednego z parametrów.';
            }
            if($kwota == ""){
                $zwrot[] = 'Nie podano kwoty.';
            }
            if($okres == ""){
                $zwrot[] = 'Nie podano terminu spłaty.';
            }
            if($oproc == ""){
                $zwrot[] = 'Nie podano oprocentowania.';
            }

            if(empty($zwrot)){
                if(!is_numeric($kwota)){
                    $zwrot[] = 'Wpisana kwota nie jest liczbą.';
                }
                if(!is_numeric($okres)){
                    $zwrot[] = 'Wpisany termin zwrotu nie jest liczbą.';
                }
                if(!is_numeric($oproc)){
                    $zwrot[] = 'Wpisane oprocentowanie nie jest liczbą.';
                }

            if(empty($zwrot)){
                $kwota = intval($kwota);
                $okres = floatval($okres);
                $oproc = intval($oproc);

                $splata = round($kwota/($okres*12) + ($kwota/($okres*12))*($oproc/100), 2);
                echo "Miesięczna rata wynosi: " . $splata . " złotych.";
            }
            }
        ?>
    </body>
</html>