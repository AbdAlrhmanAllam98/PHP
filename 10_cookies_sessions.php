<?php 
/* ----------------- Cookies ---------------
Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users.
You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
Since cookies are stored on the client, you shouldn't store sensitive data in them. Sessions are a better choice for storing sensitive data.
*/
// Set a cookie => setcookie(key,value,expire)
setcookie('name', 'Brad', time() + 86400*30); // 86400 is (1 day * 30) cookie with length Month  
// Get a cookie
if (isset($_COOKIE['name'])) {
  echo "cookie => ". $_COOKIE['name'].'<br>';
}
// Delete a cookie setcookie(key,'',expire)
// setcookie('name', '', time() - 86400*30);


/* ---------------- Sessions --------------
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server and save an id in browser so any request in server this id send automatically
*/
session_start(); // Must be called before accessing any session data 

$_SESSION['username'] = "Allam"; // set Session key and value

echo "Session => ".$_SESSION['username'];
// session_destroy();  // to delete session