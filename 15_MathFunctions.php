<?php
/*
-abs(Number[Required])
  Absolute Value => Non Negative Value
-sqrt(Number[Required])
   return Square Root of number (Decimal)
*/
echo abs(-20) . "<br>";
echo gettype(sqrt(25)) . "<br>";//5

/*
-mt_rand(min[Optional], max[Optional]) || rand(min[Optional,default=0], max[Optional,default=2147483647])
   Generate Random Value Via The mt [Mersenne Twister] Random Number Generator Algorithm 
   mt_getrandmax() => Show Largest Possible Random Value
*/
echo rand(50, 60) . "<br>";

/*
- intdiv(dividend[Required], divisor[Required])
   Return Integer  (Division)
*/
echo gettype(11 / 5) . "<br>"; //return float (2.2)
echo gettype(intdiv(11, 5)) . "<br>"; //return integer (2)

/*
- fmod(dividend[Required], divisor[Required])
    Return Floating Point  Remainder(Moduls)
*/
echo gettype(11.5 % 5) . "<br>";   // return integer (1)
echo gettype(fmod(11.5, 5)) . "<br>"; //return float (1.5)
/*
- ceil(Number[Required])=> Round Up To Integer
    echo ceil(-5.99) . "<br>"; // -5
- floor(Number[Required])=> Round Down To Integer
    echo floor(-5.99) . "<br>"; // -6
*/
/*
- round(Number[Required], Precision[Optional], Mode[Optional])  => Round to Integer or float if Precision has value
    Mode=>kol el ta7kom bta3ha 3la el (50)
    [ PHP_ROUND_HALF_UP -> this is normal and default , PHP_ROUND_HALF_DOWN ->if 4.50 it will 4,
     PHP_ROUND_HALF_EVEN -> Round to closer Even number , PHP_ROUND_HALF_ODD -> Round to closer ODD number]
*/
echo round(5.994, 1) . "<br>"; // 6
echo round(5.994, 2) . "<br>"; // 5.99
echo round(5.50, 0, PHP_ROUND_HALF_DOWN) . "<br>";//5
echo round(4.50, 0, PHP_ROUND_HALF_EVEN) . "<br>";//4
echo round(4.50, 0, PHP_ROUND_HALF_ODD) . "<br>";//5



/*
- min(array[Required]) || min(Values[Required])=>Find Lowest Value
- max(array[Required]) || max(Values[Required]) =>Find Highest Value
في حالة الأراي هيمشي من الشمال لليمين هيقارن بين كل قيمه والقيمة المقابل ليها وبمجرد ما يلاقي ان للي قدامها اكبر/اصغر منها الأراي دي للي بترجع
*/
echo min(10, 20, -40, -30, 50) . "<br>"; // -40
echo max([10, 20, -40, -30, 50]) . "<br>"; // 50
echo "<pre>";
print_r(max([1, 3, 5], [1, 2, 6]));  //1-1  , 3-2   3>2 so return [1,3,5]
echo "</pre>";
?>