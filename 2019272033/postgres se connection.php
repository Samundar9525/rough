<?php
   $host        = "host = localhost";
   $port        = "port = 5432";
   $dbname      = "dbname = office";
   $credentials = "user = postgres password=nevada";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }

//     $sql =<<<EOF
//       CREATE TABLE COMPANY
//       (ID int PRIMARY KEY     NOT NULL,
//       NAME           TEXT    NOT NULL,
//       AGE            INT     NOT NULL,
//       ADDRESS        CHAR(50),
//       SALARY         REAL);
// EOF;

//    $ret = pg_query($db, $sql);
//    if(!$ret) {
//       echo pg_last_error($db);
//    } else {
//       echo "Table created successfully\n";
//    }
//    pg_close($db);

// $sql =<<<EOF
//       INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
//       VALUES (1, 'Paul', 32, 'California', 20000.00 );

//       INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
//       VALUES (2, 'Allen', 25, 'Texas', 15000.00 );

//       INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
//       VALUES (3, 'Teddy', 23, 'Norway', 20000.00 );

//       INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
//       VALUES (4, 'Mark', 25, 'Rich-Mond ', 65000.00 );
// EOF;

//    $ret = pg_query($db, $sql);
//    if(!$ret) {
//       echo pg_last_error($db);
//    } else {
//       echo "Records created successfully\n";
//    }
//    pg_close($db);
//    echo"<br><br><br>";
//    $sql =<<<EOF
//       SELECT * from COMPANY;
// EOF;

//    $ret = pg_query($db, $sql);
//    if(!$ret) {
//       echo pg_last_error($db);
//       exit;
//    } 
//    while($row = pg_fetch_row($ret)) {
//       echo "ID = ". $row[0] . "\n<br>";
//       echo "NAME = ". $row[1] ."\n<br>";
//        echo "age = ". $row[2] ."\n<br>";
//       echo "ADDRESS = ". $row[3] ."\n<br>";
//       echo "SALARY =  ".$row[4] ."\n<br>";
//       echo"----------------------";
//        echo"<br>";

//    }
//    echo "Operation done successfully\n";
//    pg_close($db);


// $sql =<<<EOF
//       UPDATE COMPANY set SALARY = 500.00 where ID=1;
// EOF;
//    $ret = pg_query($db, $sql);
//    if(!$ret) {
//       echo pg_last_error($db);
//       exit;
//    } else {
//       echo "Record updated successfully\n";
//    }
   
//    $sql =<<<EOF
//       SELECT * from COMPANY;
// EOF;

//    $ret = pg_query($db, $sql);
//    if(!$ret) {
//       echo pg_last_error($db);
//       exit;
//    } 
//    while($row = pg_fetch_row($ret)) {
//       echo "ID = ". $row[0] . "\n<br>";
//        echo "NAME = ". $row[1] ."\n<br>";
//        echo "age = ". $row[2] ."\n<br>";
//       echo "ADDRESS = ". $row[3] ."\n<br>";
//       echo "SALARY =  ".$row[4] ."\n<br>";
//      echo"----------------------";
//       echo"<br>";
//    }
//    echo "Operation done successfully\n";
//    pg_close($db);
//    $sql =<<<EOF
//       DELETE from COMPANY where ID=3;
// EOF;
//    $ret = pg_query($db, $sql);
//    if(!$ret) {
//       echo pg_last_error($db);
//       exit;
//    } else {
//       echo "Record deleted successfully\n";
//    }
//     $sql =<<<EOF
//       SELECT * from COMPANY;
// EOF;

//    $ret = pg_query($db, $sql);
//    if(!$ret) {
//       echo pg_last_error($db);
//       exit;
//    } 
//    while($row = pg_fetch_row($ret)) {
//       echo "ID = ". $row[0] . "\n<br>";
//        echo "NAME = ". $row[1] ."\n<br>";
//        echo "age = ". $row[2] ."\n<br>";
//       echo "ADDRESS = ". $row[3] ."\n<br>";
//       echo "SALARY =  ".$row[4] ."\n<br>";
//      echo"----------------------";
//       echo"<br>";
//    }
//    echo "Operation done successfully\n";



?>



