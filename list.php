<h1>Termékek</h1>
<?php
require_once 'connect.php';
$sql = "SELECT `id`,`nev`,`leiras`,`ar`,'kep' FROM `termek`";
if($result = $conn->query($sql)){
    //-- sikeres lekérdezés feldolgozása
    if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
            echo '<div class="card" style="width: 18rem; float:left; margin: 1rem">';
            if($row["kep"] != null){
                echo '<img src="imgaes\\"'.$row["kep"].'" class="card-img-top" alt="images\\'.$row["kep"].'">';
                
            }
            echo '<div class="card-body">
                    <h5 class="card-title">'.$row["nev"].'</h5>
                <p class="card-text">'.number_format($row["ar"],0,"."," ").' Ft</p>
                <button type="submit" class="btn btn-primary" value="'.$row["id"].'">Megrendelem</button>
              </div>
            </div>';
        }
    }
} else {
    echo 'Sikertelen lekérdezés<br>';
    echo $conn->error;
}

