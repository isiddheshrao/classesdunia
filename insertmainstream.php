<?php
require 'connect.php';

try {
    $conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt0 = $conn->prepare('SELECT DISTINCT fstream FROM subject');
    $stmt0->execute();
    while($row0 = $stmt0->fetch())
    {
      $stmt1 = $conn->prepare('SELECT ssname,msname FROM substream WHERE ssname=:fstream');
      $stmt1->execute(array('fstream' => $row0['fstream']));
      if($stmt1->rowCount()>0){
        $row1 = $stmt1->fetch();
        $stmt2 = $conn->prepare('UPDATE `subject` SET `fmstream`=:mainstream WHERE `fstream`=:substream');
        $stmt2->execute(array('mainstream' => $row1['msname'], 'substream' => $row1['ssname']));
      }
    }
  }
  catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
  }

// query to constraint
// ALTER TABLE users ADD CONSTRAINT fk_grade_id FOREIGN KEY (grade_id) REFERENCES grades(id);
?>
