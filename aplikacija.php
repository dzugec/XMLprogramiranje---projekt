<?php
    date_default_timezone_set('Europe/Zagreb');

    if (isset($_POST['ime_prezime'])) {
        $imeprezime = $_POST['ime_prezime'];
        $datum = $_POST['datum'];
        $adresa1 = $_POST['adresa'];
		$godine1 = $_POST['godine'];
        $status = $_POST['status'];
		$skola = $_POST['skola'];
		$napomena = $_POST['napomena'];
		$pristanak = $_POST['pristanak'];
		

        $result = '';

        $result .= "<Prijava>\n";

      
        $result .= '<ImePrezime>' . $imeprezime . "</ImePrezime>\n";

        $result .= '<DatumRodenja>' . $datum . "</DatumRodenja>\n";

        $result .= '<AdresaePoste>' . $adresa1 . "</AdresaePoste>\n";
		
		$result .= '<GodineIskustva>' . $godine1 . "</GodineIskustva>\n";

        $result .= '<Status>' . $status . "</Status>\n";

        $result .= '<PlaninarskaSkola>' . $skola . "</PlaninarskaSkola>\n";
		
		$result .= '<Napomena>' . $napomena . "</napomena>\n";
		
		$result .= '<Pristanak>' . $pristanak . "</Pristanak>\n";
		
		if(isset($_POST['suglasnost'])) {
			$suglasnost=$_POST['suglasnost'];
			$result.='<Suglasnost>' . $suglasnost . "</Suglasnost\n>";
		}
		
        $result .= '</Prijava>';

        $filename = 'Prijava' . date('Y_m_d_h_i_s') . '.xml';
        file_put_contents($filename, $result);
        die('Uspješno ste predali prijavnicu u XML!');

    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<style>
.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}
</style>
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Prijavnica</title>
</head>

<body>

	<nav class="navbar sticky-top navbar-light" style="background-color: #DAF7A6;">
	 
	  <a class="navbar-brand" href="#">Izbornik</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarText">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item active">
			<a class="nav-link" href="#">Početna <span class="sr-only">(current)</span></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="https://hpdgradina.com/">Stranica društva</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="https://www.hps.hr/">Hrvatski planinarski savez</a>
		  </li>
		</ul>
	  </div>
	</nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <h1 class="mb-5 text-center">Prijavnica za članstvo u <br>HPD "Gradina"</h1>
				
                <form action="aplikacija.php" method="POST">
                    <!-- ime i prezime-->
                    <div class="form-group">
                        <label for="ime_prezime">Ime i prezime</label>
                        <input title="Ovo je ime i prezime" type="text" name="ime_prezime" class="form-control" id="ime_prezime">
                    </div>
           
					<!--datum rodenja -->
					<div class="form-group">
					<label for="datum">Datum rođenja  </label>
						<input type="date" name="datum"class="form-control">
					</div>
					<!--e-mail -->
					 <form>
					  <div class="form-group">
						<label for="adresa">Adresa e-pošte</label>
						<input type="email" class="form-control" name="adresa" id="adresa" placeholder="ivo.ivic@gmail.com">
					  </div>
								
						
                    <!-- godine -->
					
							<div class="slidecontainer">
							<label for="godine">Godine iskustva u planinarenju </label>
								  <input type="range" min="0" max="80" value="40" name="godine" class="slider" id="myRange">
								  <p>Value: <span id="demo"></span></p>
							</div>

							<script>
							var slider = document.getElementById("myRange");
							var output = document.getElementById("demo");
							output.innerHTML = slider.value;

							slider.oninput = function() {
							  output.innerHTML = this.value;
							}
							</script>
					
					
					<label for="status">Status </label>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="maloljetnik, učenik ili student" checked>
						  <label class="form-check-label" for="exampleRadios1">maloljetnik, učenik ili student</label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="zaposlen ili nezaposlen">
						  <label class="form-check-label" for="exampleRadios2">zaposlen ili nezaposlen</label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="status" id="exampleRadios3" value="umirovljenik" >
						  <label class="form-check-label" for="exampleRadios3">umirovljenik</label>
						</div>
					<br>
					<label for="skola">Završena planinarska škola? </label>
                    <select class="custom-select" name="skola" id="recommended">
                        <option value="da">Da</option>
                        <option value="ne">Ne</option>
                    </select>
					<br>
					 <!-- napomene -->
                    <div class="form-group">
                        <label for="napomena">Dodatna napomena:</label>
                        <textarea class="form-control" name="napomena" id="napomena" rows="3"></textarea>
                    </div>
					
					<!--Pristanak na mailove -->
                    <label for="pristanak">Pristajem da mi HPD 'Gradina' na e-mail šalje obavijesti o aktivnostima i izletima </label>
                    <select class="custom-select" name="pristanak" id="recommended">
                        <option value="da">Da</option>
                        <option value="ne">Ne</option>
                    </select>
					<br/>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="Da" id="defaultCheck1" name="suglasnost">
					  <label class="form-check-label" for="defaultCheck1">
						Suglasan sam da HPD „Gradina“ prikuplja i koristi osobne podatke iz ove Pristupnice samo za redovne aktivnosti društva HPD „Gradina“ te da iste neće dijeliti s trećim stranama
					  </label>
					</div>
                    <div><button type="submit" class="btn btn-outline-success mt-3" >Predaj prijavnicu</button></div>
                </form>

            </div>
        </div>
        <div class="mb-5"></div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>