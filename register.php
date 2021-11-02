
<?php
require_once "connect.php";
if(filter_input(INPUT_POST, "regisztral", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)){

    
    $loginname = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password=password_hash(filter_input(INPUT_POST, "password"), PASSWORD_BCRYPT);
    $full_name = filter_input(INPUT_POST, "full_name", FILTER_SANITIZE_STRING);
    $birth_date = filter_input(INPUT_POST, "birth", FILTER_UNSAFE_RAW);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $cim = filter_input(INPUT_POST, "cim",FILTER_SANITIZE_STRING);
    $city=filter_input(INPUT_POST,"city",FILTER_SANITIZE_STRING);
    $post_code=filter_input(INPUT_POST, "post_code",FILTER_SANITIZE_NUMBER_INT);
    $sql = "INSERT INTO `felhasznalo` ( `felhasznalo_nev`, `jelszo`, `email`, `teljes_nev`, `szuletesi_datum`, `iranyito_szam`,'varos','cim') VALUES  (?, ?, ?, ?, ?, ?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $loginname, $password,$email,$full_name,$birth_date,$post_code,$city, $cim);
    if($stmt->execute()){
        echo 'Sikeres regisztráció!';
    } else {
        echo 'Rögzítés sikertelen';
        
    }
  
} 
    

?>
<h1 class="h1">Regisztráció</h1>
<form method="POST">
      <div class="form-group">
            <input type="text" class="form-control" id="username" name="username"placeholder="Felhasználónév"required>
      </div>
      <div class="form-group">
            <input type="password" class="form-control" id="password" name="password" placeholder="Jelszó"required>
      </div>
      <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="email cím"required>
      </div>
      <div class="form-group">
            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Teljes név:"required>
      </div>
      <div class="form-group">
            <label for="birth">Születési Dátum:</label>
            <input type="date" class="form-control" id="birth" name="birth" required>
      </div>
      <div class="form-group">
            <input type="number" maxlength="4" min="1000" max="3000" class="form-control" id="post_code" name="post_code" placeholder="Irányítószám"  required>
      </div>
      <div class="form-group">
            <input type="text" class="form-control" id="city" name="city"placeholder="Város" required>
      </div>
      <div class="form-group">
            <input type="text" class="form-control" id="cim" placeholder="Szállítási cím" name="cim" required>
      </div>
      <div class="form-group col-md-12 text-center">
    <button type="submit" class="btn btn-primary" name="regisztral" value="true">Regisztráció</button>
</div>
</form>
