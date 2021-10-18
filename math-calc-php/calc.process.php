<?php
function compute()
{
    $numA = $_POST['sideA'];
    $numB = $_POST['sideB'];
    $numC = $_POST['sideC'];

    switch($_POST['dropdown'])
    {
        case "Addition":
            $ad =  $numA+$numB+ $numC;
            return $ad;
            break;
         /*
               */

            
        case "Pythagoras":  
            if ($numC = empty){
            $sqC = ($numA * $numA) + ($numB * $numB);
            $C = sqrt($sqC);
            return $C;
            }

            if ($numB= empty ){
            $sqB = ($numC * $numC) - ($numA * $numA);
            $B = sqrt($sqB);
            return $B;
            }

            if ($numA= empty ){
            $sqA = ($numC * $numC) - ($numB * $numB);
            $A = sqrt($sqA);
            return $A;
            }
            break;
           
        

        case "Sinus":
            $sinus = $numA / $numC;
            return $sinus;
            break;

        case "cosinus":
            $cosinus = $numB / $numC;
            return $cosinus;
            break;
                    
        case "Tangenssatz":
                        $tangen = $sinus / $cosinus;
                        return $tangen;
                        break;
        default:
            echo "invalid operation";
    }
}

echo "The result is: " .compute();
?>
<br>
<a href = "calc.php"> Zurück </a>

