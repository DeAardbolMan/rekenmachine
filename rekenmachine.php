<?php 
ERROR_REPORTING(E_ALL);
?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8">
    <title>PHP bestand</title>
    <link rel="stylesheet" type="text/css" href="rekenmachine.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  </head>
  <body>
<?php 

if(isset($_POST['x'])) {
	$x = $_POST['x'];
	$y = $_POST['y'];
	$z = $_POST['z'];
	
	if(!is_numeric($_POST['x'])) {
		echo "Voer een geldige X waarde in<br>";
		$nummer = "false";
	
	}
	if (!empty($_POST['y'])) {
		if(!is_numeric($_POST['y'])) {
		echo "Voer een geldige Y waarde in<br>";
		$nummer = "false";
		
		}
	}
	if(!isset($nummer)) {
		$nummer = "true";
	}
	
	if ($nummer != "false") {
	if (isset($_POST['y']) AND !empty($_POST['y'])) { 
	
		if($z == "plus") {
			
			$som = "$x + $y";
			$antwoord = $x + $y;
			echo "$som = $antwoord <br>";
			
		} else if($z == "min") {
			
			$som = "$x - $y";
			$antwoord = $x - $y;
			echo "$som = $antwoord <br>";
			
		} else if($z == "keer") {
			
			$som = "$x x $y";
			$antwoord = $x * $y;
			echo "$som = $antwoord <br>";
			
		} else if($z == "deel") {
			
			$som = "$x / $y";
			$antwoord = $x / $y;
			echo "$som = $antwoord <br>";
			
		} else if($z == "macht") {
			
			$som = "$x ^ $y";
			$antwoord = pow($x, $y);
			echo "$som = $antwoord <br>";
			
		} else if($z == "kwadraat") {
			
			$som = "$x ^2";
			$antwoord = pow($x, 2);
			echo "$som = $antwoord <br>";
			
		} else if($z == "wortel") {
			if($x >= 0) {
				$som = "Wortel $x";
				$antwoord = sqrt($x);
				echo "$som = $antwoord <br>";
			} else {
				echo "Kan geen wortel onder 0";
			}
		} else if($z == "tafel") {
			
			$som = "Tafel van $x";
			for($i = 1; $i <= 10; $i++) {
				$som = "$i x $x";
				$antwoord = $i * $x;
				echo "$som = $antwoord <br>";
			}
			
		} else {
			
			$som = "Oeps";
			$antwoord = "Er is iets fout gegaan.";
			
		}
	} else {
		
		if($z == "kwadraat") {
			
			$som = "$x ^2";
			$antwoord = pow($x, 2);
			echo "$som = $antwoord <br>";
			
		} else if($z == "wortel") {
			if($x >= 0) {
			$som = "Wortel $x";
			$antwoord = sqrt($x);
			echo "$som = $antwoord <br>";
			} else {
				echo "Kan geen wortel onder 0";
			}
		} else if($z == "tafel") {
			
			$som = "Tafel van $x";
			for($i = 1; $i <= 10; $i++) {
				$som = "$i x $x";
				$antwoord = $i * $x;
				echo "$som = $antwoord <br>";
			}
		} else if($z == "plus") {
			
			$som = "$x + 0";
			$antwoord = $x + 0;
			echo "$som = $antwoord <br>";
			
		} else if($z == "min") {
			
			$som = "$x - 0";
			$antwoord = $x - 0;
			echo "$som = $antwoord <br>";
			
		} else if($z == "keer") {
			
			$som = "$x x 0";
			$antwoord = 0;
			echo "$som = $antwoord <br>";
			
		} else if($z == "deel") {
			
			$som = "$x / 0";
			$antwoord = "kan niet";
			echo "$som = $antwoord <br>";
			
		} else {
			
			$antwoord = "Je moet de Y waarde invullen.";
			echo "$antwoord <br>";
			
		}
	}
}
}
?>
<form action="" method="post">
<div class="som">
X: 
<input type="text" name="x" required>
</input>
<br><br>
Y: 	
<input type="text" name="y">
</input>
<br>
</div>


<button value="plus" name="z"><i class="fas fa-plus"></i></button>
<button value="min" name="z"><i class="fas fa-minus"></i></button>
<button value="keer" name="z"><i class="fas fa-times"></i></button>
<button value="deel" name="z"><i class="fas fa-divide"></i></button>
<button value="kwadraat" name="z"><i class="fas fa-superscript"></i></button>
<button value="wortel" name="z"><i class="fas fa-square-root-alt"></i></button>
<button value="macht" name="z">macht</button>
<button value="tafel" name="z">tafel</button>
<button value="" name="z">clear</button>

</form>
</body>
</html>