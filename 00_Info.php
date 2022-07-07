<?php
// XAMPP [X->cross platform , A->Apache, M->MYSQL, P->PHP, P->Perl]
// phpinfo(); => عشان يظهرلي الانفيرومنت بتاعتي فيها ايه 
//php_uname(); =>info of system if i build app depend on configuration //Windows NT DESKTOP-60L1E6L 10.0 build 19044 (Windows 10) AMD64
// composer is Tool contain dependencies and libraries
/*
include and require are including external files in current file, 
the difference is if any error exist include show warning and continue the rest of script but require return fatal error
include_one and require_one -> قبل كده ولا لا عشان لو حصلها قبل كده مش هيحصل تانيincludeقبل ما بيعمل اي حاجه بيشوف الاول هي حصلها  
        include_once("test.php"); // $a = 10;
        echo $a . '<br>'; //10
        $a = 20;
        include_once("test.php"); // $a = 10;
        echo $a . '<br>'; //20
        overrideفقط كان اخر سطر هيرجع 10 لانه هيعمل عليها include هنا لو كنت مستخدم
*/ 
/*
====================================================================
========================     Variables    ==========================
=====================================================================
 Variable variable
    Takes The Value Of A Variable And Treats That As The Name Of A Variable
        $a = "osama";
        $$a = "elzero"; //$osama
        $$$a = "school";  //$$osama  // $elzero
        echo $$a; //$osama; 
        echo $$$a; //$elzero
        echo "Hello ${$$a}"; // $$$a
 Assign Variable By Reference
    By Default, Variables Are Always Assigned By Value
    Assigned By Reference Make Variable Alias Or Point To Another[References Are Not Pointers]
    put (&) before variable in decleare it 
        $a = "Osama";
        $b = &$a;   
*/
/*
======================================================================
------------------------------Operators-------------------------------
======================================================================
 <=> [Spaceship] is comparison operator if less than will -1 , equal 0 or greater than will 1 
    var_dump(100<=>200)  int(-1) ,var_dump(100<=>100)  int(0) ,var_dump(100<=>50)  int(1)

&&  => And => Two Are True ["&&" Has A Greater Precedence Than "and"]
||  => Or  => One Or Both Is True ["||" Has A Greater Precedence Than "or"]
    echo 10 || false || 0 || [] || ""; // True => 1
    $a = 10 || false; // $a = (10 || false) => $a = 1
    $b = 10 or false; // ($b = 10) or false => $b=10

xor => Xor => Only One Is True But Not All
    var_dump(100 > 50 xor 100 > 80); //false

Compare Strings  
    "ai" comes before "i" in alphabetical order so -> "ai" is less than "i"
    "ia" comes after "i" alphabetical order so -> "ia" is greater than "i"

@ [Error Control Operator]->   مش هتتنفذ die ان لو القيمه مش موجوده يظهر مكانها كذا واي حاجه هتيجي بعد الorلو هيحصل ايرور اللغي انه يظهر وكمان ممكن عن طريق ال 
    - Variable  
            $a = 10;
            $b = @$a or die("Variable Not Found"); -> if $a not exist die('Variable Not Found') will execute in b
    - File 
            $f = @file("osama.txt") or die("File Not Found");
    - Include
            (@include("osama.php")) or die("Include File Not Found"); 

*/

/*
=======================================================================
---------------------------Exceptions----------------------------------
=======================================================================
  PHP has an exception model similar to that of other programming languages. An exception can be thrown, and caught ("catched") within PHP.
  Code may be surrounded in a try block, to facilitate the catching of potential exceptions. Each try must have at least one corresponding catch or finally block.

    function inverse($x) {
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1/$x;
    }

    echo inverse(0); // Causes an exception to be thrown and stops script execution

    //Handles the exception
    try {
    echo inverse(0);
    } catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), ' ';
    }finally {
  echo 'First finally ';   // Finally block is executed regardless of whether an exception is thrown or not
}
*/
?>