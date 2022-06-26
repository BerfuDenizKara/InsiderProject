<?php
  include 'dbh.php';

  class MonteCarlo extends Dbh{

    public function getId() {
      $sql = "SELECT * FROM team ";
      $stmt = $this->connect()->query($sql);
      while($row = $stmt->fetch()) {
        echo $row['id'] . '<br>';
      }
    }
    public function getName() {
      $sql = "SELECT * FROM team";
      $stmt = $this->connect()->query($sql);
      while($row = $stmt->fetch()) {
        echo $row['name'] . '<br>';
      }
    }
    public function getPoints() {
      $sql = "SELECT * FROM team";
      $stmt = $this->connect()->query($sql);
      while($row = $stmt->fetch()) {
        echo $row['points'] . '<br>';
      }
    }
    public function setPoints($id, $points) {
      $sql = "UPDATE team SET points=$points WHERE id=$id";
      $stmt = $this->connect()->query($sql);
      while($row = $stmt->fetch()) {
        echo $row['points'] . '<br>';
      }
    }
    public function getPlayed() {
      $sql = "SELECT * FROM team";
      $stmt = $this->connect()->query($sql);
      while($row = $stmt->fetch()) {
        echo $row['played'] . '<br>';
      }
    }
    public function setPlayed($id, $played) {
      $sql = "UPDATE team SET played=$played WHERE id=$id";
      $stmt = $this->connect()->query($sql);
      while($row = $stmt->fetch()) {
        echo $row['played'] . '<br>';
      }
    }
    public function getWon() {
      $sql = "SELECT * FROM team";
      $stmt = $this->connect()->query($sql);
      while($row = $stmt->fetch()) {
        echo $row['won'] . '<br>';
      }
    }
    public function setWon($id, $won) {
      $sql = "UPDATE team SET won=$won WHERE id=$id";
      $stmt = $this->connect()->query($sql);
      while($row = $stmt->fetch()) {
        echo $row['won'] . '<br>';
      }
    }
    public function getDrawn() {
      $sql = "SELECT * FROM team";
      $stmt = $this->connect()->query($sql);
      while($row = $stmt->fetch()) {
        echo $row['drawn'] . '<br>';
      }
    }
    public function setDrawn($id, $drawn) {
      $sql = "UPDATE team SET drawn=$drawn WHERE id=$id";
      $stmt = $this->connect()->query($sql);
      while($row = $stmt->fetch()) {
        echo $row['drawn'] . '<br>';
      }
    }
    public function getLost() {
      $sql = "SELECT * FROM team";
      $stmt = $this->connect()->query($sql);
      while($row = $stmt->fetch()) {
        echo $row['lost'] . '<br>';
      }
    }
    public function setLost($id, $lost) {
      $sql = "UPDATE team SET lost=$lost WHERE id=$id";
      $stmt = $this->connect()->query($sql);
      while($row = $stmt->fetch()) {
        echo $row['lost'] . '<br>';
      }
    }
    public function getGoaldif() {
      $sql = "SELECT * FROM team";
      $stmt = $this->connect()->query($sql);
      while($row = $stmt->fetch()) {
        echo $row['goaldif'] . '<br>';
      }
    }
    public function setGoaldif($id, $goaldif) {
      $sql = "UPDATE team SET goaldif=$goaldif WHERE id=$id";
      $stmt = $this->connect()->query($sql);
      while($row = $stmt->fetch()) {
        echo $row['goaldif'] . '<br>';
      }
    }
  }

?>
