<?php
/* ---------- String Functions -------- */
  /*
    - lcfirst(String[Required]) =>  Make first letter of string is lowercase
    - ucfirst(String[Required]) =>  Make first letter of string is uppercase
    - str_repeat(String[Required], Count[Required])
    - implode(Separator[Optional], Array[Required]) => join() Is Alias, 
        merge whole Array to be one string with specific Seperator to seperate between elements
    
    - explode(Separator[Required], String[Required], Limit[Optional]) =>explode is reverse of implode, transfer string into Array but seperator here required.
       limit is the length of array if [0,1]-> return one element
       elseif more than one [3]->take what can it carry in [0,1] and in [2] take the rest of string
       elseif negative[-2]->after explode function work then remove last two elements
    
    - str_shuffle(String[Required]) => random order of chars in string
    
    - trim(String[Required], CharsList[Optional]) =>Remove spaces from first and last parties 
        echo trim("#Allam###", "##");=>some langauges will search for two hash one after the other and output #Allam#, but in PHP will remove all hashes output Allam 
        echo trim("#@@Elzero@@@###", "@");=> noting will done because trim interact with only parties
    
    - chunk_split(String[Required], Length[Optional], End[Optional]) => chunk string to more than part
        every part length is Length[Second parameter] default is 76
        put in the end of part [Third parameter]      default is space
    - str_split(String[Required], Length[Optional]) => split the string every Length of chars in element in array 
    
    - strip_tags(String[Required], Allowed[Optional]) =>prevent show of tags if i want to show some of tags put them in second parameter
        echo strip_tags("<h3>Hello <b>Elzero</b></h3>", "<h3>,<b>");
    - nl2br(String[Required], XHTML[Optional])=>[newline to br] replace [\n or actually newline] by newline
        Reason for use it is server side if i put the value in more than line it will show them to me in one line
        XHTML for self closing tag if it true (default) [<br>Allam</br>]
            echo nl2br("Elzero\nWeb\nSchool", false);  -> no self closing tag [Elzero<br>......]
    
    - strpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive  ->first value
    - strrpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive ->last value
    - stripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
    - strripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
        if no value the four functions will return false; space is included.
        negative maybe to start position->start from end and reach to position and search for value from start to end
   
    - substr_count(String[Required], Value[Required], Start Position[Optional], Length[Optional])
        return count of value is repeated in range[Start,length] start and length is indexes 
        var_dump(substr_count("abcdabcda", "abcda")); // 1 because of Overlap String  
    
    - parse_str(String[Required], Array[Required])=>in the form query user enter input in fields
        parse_str("name=Osama&#038;email=o@nn.sa&#038;os=mac", $query);
        echo $query["name"] . $query["email"] . $query["os"];
    - quotemeta(String[Required]) =>if user input tags maybe hack database this function put before special chars Escape char \
        echo quotemeta("Hello [] () * +"); //Hello \[\] \(\) \* \+
    - str_pad(String[Required], Length[Required], String[Optional], Pad Flag[Optional])
       if i need to make serial meaning all serials is the same length
       Flags[STR_PAD_BOTH=>(fifty left and the rest is right),STR_PAD_LEFT, STR_PAD_RIGHT]=>position of adding String to reach to the length of string
       echo str_pad("500432", 8, 0, STR_PAD_LEFT);
    
    -strtr(String[Required], From[Required], To[Required]) || strtr(String[Required], Array[Required])=>String Translate from '--' to '--'
      if i have one translate use first syntax
        echo strtr("E@zero Web Schoo@", "@", "l");
      but if i have more than translate use second syntax -> associative array key is from and value is to
        $translation = ["@" => "l", "#" => "o"];
        echo strtr("E@zer# Web Sch##@", $translation);
    - str_replace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])  Case-Sensitive for Find
        find and replace maybe string OR Array each one and his opposition, if replace array less than find array this replace element will be empty
        Replace count -> how much replace is occur
         echo str_replace(["#", "@"], ["l", "o"], "E#zer@ Web Sch@@#", $r);
    - str_ireplace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional]) Case-InSensitive for Find

    - wordwrap(String[Required], Width[Optional = 75], Break_Char[Optional = "\n"], Cut_Long[Optional = False])
         wraps a string into new lines when it reaches a specific length, you can to break with other char instead of newline
         if we have long word and we need to wrap this word to newline make the last parameter True
            echo wordwrap($str, 8, "<br>", True);
    
    - ord(String[Required])=>return ASCII CODE of char
    - chr(Int[Required])=>return Char of ASCII CODE
    - similar_text(String_One[Required], String_Two[Required], Percent[Optional]) 
        Returns The Number Of Matching Characters
        if i want to know the percentage of similar of two strings via the last parameter
          echo similar_text("Elzero", "Elzeroo", $perc);
    - strstr(String[Required], Search[Required], Before_Search[Optional] = False)=> Alias [strchr] Case-Sensitive
    - stristr(String[Required], Search[Required], Before_Search[Optional] = False) Case-Insensitive
        search for value of search in String and output from value to the end of String
        if i want the whole previous of value, meaning from start of String to the value of search make the last parameter is TRUE
    
    
    - number_format(Number[Required], Decimals[Optional], Decimal_String[Optional], Separator[Optional])
        echo 10_000_000;=>Syntactic sugar   10000000 
        echo number_format(10000000.156023, 3, "@", "A");   100A000A00@156

    */
  
$string = 'Hello World';
// Get the length of a string
echo strlen($string);

// Reverse a string
echo strrev($string);

// Convert all characters to lowercase
echo strtolower($string);

// Convert all characters to uppercase
echo strtoupper($string);

// Uppercase the first character of each word
//ucwords(String[Required], Delimiters[Optional]) => Delimiter here to split the string instead of space
echo ucwords("elzero web|school", "|") . "<br>";  //Elzero web|School   char of w is no change because elzero web they consider one word

// String replace
echo str_replace('World', 'Everyone', $string);

// Return portion of a string specified by the offset and length
echo substr($string, 0, 5);
echo substr($string, 5);

// Starts with
if (str_starts_with($string, 'Hello')) {
  echo 'YES';
}

// Ends with
if (str_ends_with($string, 'ld')) {
  echo 'YES';
}

// HTML Entities
$string2 = '<h1>Hello World</h1>';
echo htmlentities($string2);
?>