<?php

  // define("BASE_URL","/ratestuf/");
  // define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"] . "/ratestuf/");

// need to add a config file that works with myslqi rather than pdo
// 1. Create a database connection

// This is the code for localhost development
  define("DB_SERVER","localhost");
  define("DB_USER","root");
  define("DB_PASS","root");
  define("DB_NAME","ratestuf");

//This is the code for live website
  // define("DB_SERVER","localhost");
  // define("DB_USER","ecstati5_azucker");
  // define("DB_PASS","ontology");
  // define("DB_NAME","ecstati5_ratestf");
  // define("DB_PORT","3306"); // default: 3306, Randy uses 8889

// Account password 
// hQDJu5wDB2!

// home directory access ecstati5
  

  // update a password: 

  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);  

// //Test if connection occurred.
  if(mysqli_connect_errno()) {
    die("Database connection failed: " .
      mysqli_connect_error() .
      " ( " . mysqli_connect_errno() . ")");
} 
?>
