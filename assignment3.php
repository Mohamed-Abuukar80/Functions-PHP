<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
   


//QUESTION ONE
    echo ("<h3> Question 1:- Lowest Common Multiplier(LCM) </h3>");
    function calculateLCM($a = 18, $b = 24)
    {
        $max = max($a, $b);
        while (true) {
            if ($max % $a == 0 && $max % $b == 0) {
                return "$max";
            }
            $max++;
        }
    }
    $a = 24;
    $b = 18;
    $lcm = calculateLCM($a, $b);
    echo ("LCM of $a and $b is: $lcm");




//QUESTION TWO
    echo ("<h3> Question 2:- Highest Common Factor(HCF) </h3>");
    function calculateHCF($x = 12, $y = 18)
    {
        while ($y != 0) {
            $temp = $y;
            $y = $x % $y;
            $x = $temp;
        }

        return $x;
    }
    $a = 32;
    $b = 42;
    $hcf = calculateHCF($a, $b);
    echo ("LCM of $a and $b is: $hcf<br>");




//QUESTION THREE
    echo ("<h3> Question 3:- Non-Prime Numbers </h3>");
    function printNonPrimeNumbers($initial = 2, $final = 100)
    {
        
        if ($initial < 2) {
            $initial = 2;
        }
        if ($final < $initial) {
            $final = $initial;
        }

       
        function isPrime($num)
        {
            if ($num < 2) {
                return false;
            }
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i === 0) {
                    return false;
                }
            }
            return true;
        }

        
        for ($num = $initial; $num <= $final; $num++) {
            if (!isPrime($num)) {
                echo $num . ", ";
            }
        }
    }

    
    printNonPrimeNumbers();



//QUESTION FOUR
    echo ("<h3> Question 4:- function that takes two arguments, the decimal 
    number and the radix (base), then converts it into any radix (base number system). </h3>");
    function decimalToRadix($number, $radix = 2)
    {
       
        if ($radix < 2 || $radix > 36) {
            echo "Radix must be between 2 and 36.";
            return;
        }

        
        $result = '';
        while ($number > 0) {
            $remainder = $number % $radix;
            $result = base_convert($remainder, 10, $radix) . $result;
            $number = (int) ($number / $radix);
        }

        echo $result;
    }

    
    decimalToRadix(15, 8);




//QUESTION FIVE
    echo ("<h3> Question 5:- function that takes one dimensional numerically
    indexed array </h3>");

    function arrayOperations($arr)
    {
        
        echo "Array Elements: ";
        foreach ($arr as $element) {
            echo $element . " ";
        }
        echo "<br>";

        
        $oddTotal = 0;
        foreach ($arr as $element) {
            if ($element % 2 !== 0) {
                $oddTotal += $element;
            }
        }
        echo "Total of Odd Elements: " . $oddTotal . "<br>";

        
        $evenTotal = 0;
        foreach ($arr as $element) {
            if ($element % 2 === 0) {
                $evenTotal += $element;
            }
        }
        echo "Total of Even Elements: " . $evenTotal . "<br>";

        
        $total = array_sum($arr);
        echo "Total of All Elements: " . $total . "<br>";
    }

    
    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    arrayOperations($array);



    ?>





</body>

</html>