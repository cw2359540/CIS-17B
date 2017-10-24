<!DOCTYPE html>
<!--
    Cheryllynn Walsh
    September 21,2017
    Include a function library with arrays utilization
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Utilize the Savings PHP Functions</title>
            <?php   include './PHPSavingsFunctions.php';   ?>
    </head>
    <body>
        <?php
            //Declare variables
            $pv=100;   //Present Value $'s
            $int=0.06; //Interest Rate %
            $nYears=12;//Number of compounding periods years
            
            $save = new SaveClass();

            //Use the function to calculate the value
           
            $fv1=$save->save1($pv,$int,$nYears);//Future Value Calculation
            $fv2=$save->save2($pv,$int,$nYears);//Future Value Calculation
            $fv3=$save->save3($pv,$int,$nYears);//Future Value Calculation
            $fv4=$save->save4($pv,$int,$nYears);//Future Value Calculation
            $fv5=$save->save5($pv,$nYears);     //Future Value Calculation
            $fv6=$save->save6($pv,$int,$nYears,$fv6);// //Declare the future value to be returned Future Value Calculation
            $fv7=$save->save7($pv,$int,$nYears);//Future Value Calculation

            //Display results
            echo "<p> Present Value = $".$pv."</p>";
            echo "<p> Interest Rate =  ".($int*100)."%</p>";
            echo "<p> Number of Years =  ".$nYears."(yrs)</p>";
            echo "<p> Future Value 1 = $".number_format($fv1,2)."</p>";
            echo "<p> Future Value 2 = $".number_format($fv2,2)."</p>";
            echo "<p> Future Value 3 = $".number_format($fv3,2)."</p>";
            echo "<p> Future Value 4 = $".number_format($fv4,2)."</p>";
            echo "<p> Future Value 5 = $".number_format($fv5,2)."</p>";
            echo "<p> Future Value 6 = $".number_format($fv6,2)."</p>";
            display($fv7);
        ?>
    </body>
</html>