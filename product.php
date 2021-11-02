

<?php 
require_once 'connect.php';
if(isset ($_POST['regisztral'])){
      $pname = filter_input(INPUT_POST, "pname", FILTER_SANITIZE_STRING);
      $desc = filter_input(INPUT_POST, "desc", FILTER_SANITIZE_STRING);
      $price = filter_input(INPUT_POST, "price", FILTER_SANITIZE_NUMBER_INT);
      $pic = filter_input(INPUT_POST, "picture", FILTER_SANITIZE_STRING);
      $sql = "INSERT INTO `termek` ( `nev`, `leiras`, `ar`, `kep`) VALUES  (?, ?, ?, ?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("ssss", $pname,$desc, $price,$pic);
    if($stmt->execute()){
        echo 'Sikeres regisztráció!';
    } else {
        echo 'Rögzítés sikertelen';
        
    }
}

?>
<h1 class="h1">Termék feltöltése</h1>
<form method="POST">
      
<div class="form-group">
            
            <input type="text" class="form-control" id="pname" name="pname"placeholder="Termék név">
      </div>
      <div class="form-group">
            
            <input type="text" class="form-control" id="desc" name="desc" placeholder="Leírás">
      </div>
      <div class="form-group">
            
            <input type="number" class="form-control" id="price" name="price" placeholder="Ár">
      </div>
      <div class="form-group">
            
            <input type="text" class="form-control" id="picture" name="picture" placeholder="Kép">
      </div>

    <button type="submit" class="btn btn-primary" name="regisztral" >Termék felvétele</button>
</form>

