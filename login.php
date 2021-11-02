
<?php
require_once 'connect.php';
if(filter_input(INPUT_POST, "belepes", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)){
    $loginname = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $jelszo = filter_input(INPUT_POST, "password");
    $sql = 'SELECT `jelszo` FROM `felhasznalo` WHERE `felhasznalo_nev`=?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $loginname );
    $stmt->execute();
    
    $result = $stmt->get_result();
    if(password_verify($jelszo, $result->fetch_assoc()["jelszo"])){
        echo 'Sikeres belépés';
        //-- felhasználói adatok beolvasása
        $result = $conn->query('SELECT * FROM `felhasznalo` WHERE `felhasznalo_nev`= "'.$loginname.'";');
        $_SESSION['username'] = $result->fetch_assoc();
        $_SESSION['login'] = true;
        header("Location: index.php?menu=home");
    } else {
        echo 'Belépés sikertelen!'; 
        echo $conn->error;  
    }
}
?>
<body>
<h1 class="h1">Bejelentkezés</h1>
<FORM action="" method="POST">
<div class="container">
<input type="text" class="form-control" name="username" id="username" placeholder="felhasználónév">
<input type="password" class="form-control" id="password"name="password" placeholder="jelszó">
</div>
<div class="col-md-12 text-center">
<button type="submit" class="btn btn-primary text-center" name="belepes" value="true">Belépés</button>
</div>
</FORM>
