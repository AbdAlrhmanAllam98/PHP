
<?php
/*
  $GLOBALS - A superglobal variable that holds information about any variables in global scope.
  $_GET - Contains information about variables passed through a URL or a form.
  $_POST -  Contains information about variables passed through a form.
  $_COOKIE - Contains information about variables passed through a cookie.
  $_SESSION - Contains information about variables passed through a session.
  $_SERVER - Contains information about the server environment.
  $_ENV - Contains information about the environment variables.
  $_FILES -  Contains information about files uploaded to the script.
  $_REQUEST - Contains information about variables passed through the form or URL.

  var_dump($GLOBALS);

  $_SERVER['PHP_SELF'] -> to redirect user to the same page after submit the form
  $_SERVER['REMOTE_ADDR'] -> get IP address of the client

*/

/* --- $_GET & $_POST Superglobals -- */

if (isset($_POST['submit'])) {
  // htmlspecialchars() - Convert special characters to HTML entities
  // $name = htmlspecialchars($_POST['name']);
  // $email = htmlspecialchars($_POST['email']);

/*
----------------------------------------------------------------------------------
========================= VALIDATE ==============     بنشوفه صالح ولا غير صالح 
FILTER_VALIDATE_ [DOMAIN,IP,URL,EMAIL,MAC,  DATATYPE => [FLOAT,INT,STRING,BOOL] ]
----------------------------------------------------------------------------------
- filter_var(Value[Required], Filter[Optional], Options[Optional])
 NULL في حالة انه مش تمام هيرجع FILTER_NULL_ON_FAILURE ولو مديلهfalse ولو مش تمام هيرجع  variable  لو تمام هيرجع القيمة بتاعت ال
 FILTER_NULL_ON_FAILURE => this is general flag that return null if variable isn`t [true or false]
  FILTER_VALIDATE_BOOL => True =>[True, 1, Yes, On] ,False => [False, 0, No, Off, ""]
      var_dump(filter_var($bool, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE));
  
    FILTER_VALIDATE_URL
    Flags => [FILTER_NULL_ON_FAILURE, FILTER_FLAG_PATH_REQUIRED, FILTER_FLAG_QUERY_REQUIRED]
                                      have path in the url       have query in the url
              mmkn a7ot kza flag m3 b3d fe array wfsl benhom b ( | )
        $url = "https://elzero.org/?id=100";
        var_dump(filter_var($url, FILTER_VALIDATE_URL,["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED]));

    FILTER_VALIDATE_IP
    Flags => [FILTER_NULL_ON_FAILURE, FILTER_FLAG_IPV4, FILTER_FLAG_IPV6]
        $ip=" 2001:0db8:85a3:0000:0000:8a2e:0370:7334";
        var_dump(filter_var($ip, FILTER_VALIDATE_IP, ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV6]));

    FILTER_VALIDATE_MAC => Media Access Control
    Flag => FILTER_NULL_ON_FAILURE
        $mac = "00:00:5e:00:53:af";
        var_dump(filter_var($mac, FILTER_VALIDATE_MAC));
  
    FILTER_VALIDATE_INT
    Options => [min_range , max_range]    لازم لما تيجي تتحط, تتحط زي ما هي 
    Convert To Int On Success -> fe 7alet an el Integer dah gwa quotes 
      $int = "90";
      var_dump(filter_var($int, FILTER_VALIDATE_INT,
      ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]] ));

    FILTER_VALIDATE_FLOAT
    Options => [min_range,max_range]
    Convert To Float On Success -> fe 7alet an el Float dah gwa quotes
      $float = "90.50";
      var_dump(filter_var($float,FILTER_VALIDATE_FLOAT,
      ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]));
*/

/*
----------------------------------------------------------------------------------------------
==> Sanitize data before put it in DB
===================  SANITIZE =>   هنتحكم في الداتا للي جايه ونرجع الداتا للي ينفع تتحط 
 FILTER_SANITIZE_ [STRING - EMAIL - URL - NUMBER_INT - NUMBER_FLOAT - FULL_SPECIAL_CHARS ]
-----------------------------------------------------------------------------------------------
 - filter_var(Value[Required], Filter[Optional], Options[Optional])
    Sanitize Filters
      FILTER_SANITIZE_EMAIL => Remove All But Letters + Digits + !#$%& #038; '*+-=?^_`{|}~@.[]
      FILTER_SANITIZE_URL => Remove All But Letters + Digits + $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
      FILTER_SANITIZE_NUMBER_INT => Remove All But Digits, +, -
      FILTER_SANITIZE_NUMBER_FLOAT => Remove ALL But Digits, +, - And Optionally [.,eE]
        Flags => [FILTER_FLAG_ALLOW_THOUSAND , FILTER_FLAG_ALLOW_FRACTION]
            var_dump(filter_var($float,FILTER_SANITIZE_NUMBER_FLOAT,
            ["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION])); //1,950,150.6541
*/
  // $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  // $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

/*
- filter_input(INPUT_{{METHOD}},'NAME OF INPUT',Filter[Optional], Options[Optional]) -> Sanitize inputs
  METHOD-> [GET,POST,COOKIE,SERVER,ENV]
  FILTER=> FILTER_VALIDATE_**** , FILTER_SANITIZE_*****
  OPTIONS-> FILTER_NULL_ON_FAILURE,...
    echo filter_input(INPUT_GET, "num", FILTER_SANITIZE_NUMBER_INT);
*/ 
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);


} 

?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Password: </label>
  <input type="password" name="password">
</div>
<br>
<div>
<label>Email: </label>
  <input type="email" name="email">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>