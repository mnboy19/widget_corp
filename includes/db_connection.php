<?php
  define("DB_SERVER", "localhost");
  define("DB_USER", "root");
  define("DB_PASS", "");
  define("DB_NAME", "widget_corp");

  // 1. Create a database connection
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  // Test if connection occurred.
  if(mysqli_connect_errno()) {
    die("database connection failed: " .
      mysqli_connect_errno() .
      " (" . mysqli_connect_errno() . ")"
    );
  }
?>