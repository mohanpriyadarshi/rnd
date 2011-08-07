<?php  
require("Yahoo.inc");  
  // Your Consumer Key (API Key) goes here.  
define('CONSUMER_KEY', "dj0yJmk9RXJTd2diWW9oSnVZJmQ9WVdrOVQyRnJWR1l6Tm1zbWNHbzlNVEUyTmpjMU5UTTJNZy0tJnM9Y29uc3VtZXJzZWNyZXQmeD0zYQ--");  
     // Your Consumer Secret goes here.  
      define('CONSUMER_SECRET', "6706e0a81cd7ef64b7daae2841986549cd2a68ab");  
     // Your application ID goes here.  
    define('APPID', "OakTf36k");  
   $session = YahooSession::requireSession(CONSUMER_KEY,CONSUMER_SECRET,APPID);  
   ?>  
