<!DOCTYPE html>
<html lang="en">

<head>
  
  <?php include 'functions.php'; ?>


  <title>User Registration</title>

</head>

<body>

  <main id="main">

    <section id="services" class="services">
    <div class="container">

    <div class="section-title">
      <br>
    <h2>User</h2>
    </div>

    <div class="row">
        <div class="col-5 mx-auto">
          <div class="icon-box">
            <img src="logo.png" class="rounded mx-auto d-block" alt="...">
            <br>
            <h4><a>Create an account</a></h4>

<br>

          <div class="form-group col-10 mx-auto">
              <select class="form-control" id="first-dropdown" onchange="populateSecondDropdown()">
                  <option value="">Select Municipality</option>
                  <option value="alaminos">Alaminos</option>
                  <option value="bay">Bay</option>
                  <option value="binan">Biñan</option>
                  <option value="cabuyao">Cabuyao</option>
                  <option value="calamba">Calamba</option>
                  <option value="calauan">Calauan</option>
                  <option value="losbanos">Los Baños</option>
                  <option value="sanpablo">San Pablo</option>
                  <option value="sanpedro">San Pedro</option>
                  <option value="starosa">Sta. Rosa</option>
                </select>
            </div>

            <br>

            <div class="form-group col-10 mx-auto">
                <!-- barangay select -->
                <select class="form-control" id="second-dropdown">
                  <option>Select Barangay</option>
                </select>

              </div>

            <br>

            <div class="col-10 mx-auto">
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Userame">
            </div><br>

            <div class="col-10 mx-auto">
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
            </div><br>

            <div class="col-10 mx-auto">
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact Number">
            </div><br>

            <div class="col-10 mx-auto">
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
            </div><br>

            <div class="col-10 mx-auto">
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Confirm Password">
            </div><br>

            <div class="form-group col-10 mx-auto">
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Select Position</option>
                <option>Barangay Secretary</option>
                <option>Barangay Secretary Clerk</option>
                <option>KP Staff</option>
              </select>
            </div><br>

            <!--ADD USER-->
            <div class=" col-10 mx-auto">
              <button class="btn btn-primary" id="addInputBtn">+ Add User</button>
              <br><br>
              <div id="inputBoxContainer"></div>
          </div>
      
          <!-- Include Bootstrap JS and jQuery -->
          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

          <script>
              $(document).ready(function() {
                  var inputCount = 0;


                  $('#addInputBtn').click(function() {
                      inputCount++;
                      var inputBoxHTML = '<div class="input-group mb-3">' +
                          '<input type="text" class="form-control" id="inputBox' + inputCount + '" placeholder="Full Name">' +
                          '<div class="input-group-append">' +
                          '<button class="btn btn-secondary remove-input" data-input="' + inputCount + '">Remove</button>' +
                          '</div>' + 
                          '</div>';
      
                      $('#inputBoxContainer').append(inputBoxHTML);
                  });
      
                  $(document).on('click', '.remove-input', function() {
                      var inputIndex = $(this).data('input');
                      $('#inputBox' + inputIndex).closest('.input-group').remove();
                  });
              });
          </script>


            <br>
            <a href="Loading.php" class="btn btn-secondary">Register</a>

            <br>
            <br>
            <br>
            <p class="font-weight-normal">Already have an account? <a href="#" onclick="forgotPassword()">Login here</a>.</p><br>




          </div>
        
          
         
          
        </div>

        

  </main>
  

</body>

</html>
<script>
    function populateSecondDropdown() {
      var firstDropdown = document.getElementById("first-dropdown");
      var secondDropdown = document.getElementById("second-dropdown");
      var selectedOption = firstDropdown.value;
      
      // Clear existing options
      secondDropdown.innerHTML = "";
      
      // Populate second dropdown based on selected option
      if (selectedOption === "alaminos") {
        var barangays = ["Alos", "Palamis", "Amandiego", "Pandan", "Amangbangan", "Pangapisan", "Balangobong", "Poblacion", "Balayang", "Pocal-pocal", "Baleyadaan", "Pogo", "Bisocol", "Polo", "Bolaney", "Quibuar", "Bued", "Sabangan", "Cabatuan", "San Antonio", "Cayucay", "San Jose", "Dulacac", "San Roque", "Inerangan", "San Vicente", "Landoc", "Sta Maria", "Linmansangan", "Tanaytay", "Lucap", "Tangcarang", "Maawi", "Tawin-tawin", "Macatiw", "Telbang", "Magsaysay", "Victoria", "Mona"];
        
        for (var i = 0; i < barangays.length; i++) {
          var option = document.createElement("option");
          option.text = barangays[i];
          option.value = "alaminos_" + i;
          secondDropdown.add(option);
        }
      } else if (selectedOption === "bay") {
        var barangays = ["Bitin", "Calo", "Dila", "Maitim", "Masaya", "Paciano Rizal", "Puypuy", "San Antonio", "San Isidro", "Santa Cruz", "Santo Domingo", "Tagumpay", "Tranca", "San Agustin (Poblacion)", "San Nicolas (Poblacion)"];
        
        for (var i = 0; i < barangays.length; i++) {
          var option = document.createElement("option");
          option.text = barangays[i];
          option.value = "bay_" + i;
          secondDropdown.add(option);
        }
      } else if (selectedOption === "binan") {
        var barangays = ["Biñan", "Bungahan", "Santo Tomas (Calabuso)", "Canlalay", "Casile", "De La Paz", "Ganado", "San Francisco (Halang)", "Langkiwa", "Loma", "Malaban", "Malamig", "Mampalasan (Mamplasan)", "Platero", "Poblacion", "Santo Niño", "San Antonio", "San Jose", "San Vicente", "Soro-soro", "Santo Domingo", "Timbao", "Tubigan", "Zapote"];
        
        for (var i = 0; i < barangays.length; i++) {
          var option = document.createElement("option");
          option.text = barangays[i];
          option.value = "binan_" + i;
          secondDropdown.add(option);
        }
      } else if (selectedOption === "cabuyao") {
        var barangays = ["Baclaran", "Banaybanay", "Banlic", "Bigaa", "Butong", "Casile", "Diezmo", "Gulod", "Mamatid", "Marinig", "Niugan", "Pittland", "Poblacion Uno", "Poblacion Dos", "Poblacion Tres", "Pulo", "Sala", "San Isidro"];
        
        for (var i = 0; i < barangays.length; i++) {
          var option = document.createElement("option");
          option.text = barangays[i];
          option.value = "cabuyao_" + i;
          secondDropdown.add(option);
        }
      } else if (selectedOption === "calauan") {
        var barangays = ["Balayhangin", "Bangyas", "Dayap", "Hanggan", "Imok", "Lamot 1", "Lamot 2", "Limao", "Mabacan", "Masiit", "Paliparan", "Pérez", "Kanluran (Poblacion)", "Silangan (Poblacion)", "Prinza", "San Isidro", "Santo Tomas"];
        
        for (var i = 0; i < barangays.length; i++) {
          var option = document.createElement("option");
          option.text = barangays[i];
          option.value = "calauan_" + i;
          secondDropdown.add(option);
        }
      } else if (selectedOption === "calamba") {
        var barangays = ["Bagong Kalsada", "Banadero", "Banlic", "Barandal", "Barangay 1 (Poblacion 1)", "Barangay 2 (Poblacion 2)", "Barangay 3 (Poblacion 3)", "Barangay 4 (Poblacion 4)", "Barangay 5 (Poblacion 5)", "Barangay 6 (Poblacion 6)", "Barangay 7 (Poblacion 7)", "Batino", "Bubuyan", "Bucal", "Bunggo", "Burol", "Camaligan", "Canlubang", "Halang", "Hornalan", "Kay-Anlog", "Laguerta", "La Mesa", "Lawa", "Lecheria", "Lingga", "Looc", "Mabato", "Majada Labas", "Makiling", "Mapagong", "Masili", "Maunong", "Mayapa", "Milagrosa (Tulo)", "Paciano Rizal", "Palingon", "Palo-Alto", "Pansol", "Parian", "Prinza", "Punta", "Puting Lupa", "Real", "Saimsim", "Sampiruhan", "San Cristobal", "San Jose", "San Juan", "Sirang Lupa", "Sucol", "Turbina", "Ulango", "Uwisan"];
        
        for (var i = 0; i < barangays.length; i++) {
          var option = document.createElement("option");
          option.text = barangays[i];
          option.value = "calamba_" + i;
          secondDropdown.add(option);
        }
      } else if (selectedOption === "losbanos") {
        var barangays = ["Anos", "Bagong Silang", "Bambang", "Batong Malake", "Baybayin", "Bayog", "Lalakay", "Maahas", "Malinta", "Mayondon", "Putho-Tuntungin", "San Antonio", "Tadlac", "Timugan"];
        
        for (var i = 0; i < barangays.length; i++) {
          var option = document.createElement("option");
          option.text = barangays[i];
          option.value = "losbanos_" + i;
          secondDropdown.add(option);
        }
      } else if (selectedOption === "sanpablo") {
        var barangays = ["I-A (Sambat)", "I-B (City+Riverside)", "I-C (Bagong Bayan)", "II-A (Triangulo)", "II-B (Guadalupe)", "II-C (Unson)", "II-D (Bulante)", "II-E (San Anton)", "II-F (Villa Rey)", "III-A (Hermanos Belen)", "III-B", "III-C (Labak/De Roma)", "III-D (Villongco)", "III-E", "III-F (Balagtas)", "IV-A", "IV-B", "IV-C", "V-A", "V-B", "V-C", "V-D", "VI-A (Mavenida)", "VI-B", "VI-C (Bagong Pook)", "VI-D (Lparkers)", "VI-E (YMCA)", "VII-A (P.Alcantara)", "VII-B", "VII-C", "VII-D", "VII-E", "Atisan", "Bautista", "Concepcion (Bunot)", "Del Remedio (Wawa)", "Dolores", "San Antonio 1 (Balanga)", "San Antonio 2 (Sapa)", "San Bartolome (Matang-ag)", "San Buenaventura (Palakpakin)", "San Crispin (Lumbangan)", "San Cristobal", "San Diego (Tiim)", "San Francisco (Calihan)", "San Gabriel (Butucan)", "San Gregorio", "San Ignacio", "San Isidro (Balagbag)", "San Joaquin", "San Jose (Malamig)", "San Juan", "San Lorenzo (Saluyan)", "San Lucas 1 (Malinaw)", "San Lucas 2", "San Marcos (Tikew)", "San Mateo", "San Miguel", "San Nicolas", "San Pedro", "San Rafael (Magampon)", "San Roque (Buluburan)", "San Vicente", "Santa Ana", "Santa Catalina (Sandig)", "Santa Cruz (Putol)", "Santa Elena", "Santa Filomena (Banlagin)", "Santa Isabel", "Santa Maria", "Santa Maria Magdalena (Boe)", "Santa Monica", "Santa Veronica (Bae)", "Santiago I (Bulaho)", "Santiago II", "Santisimo Rosario", "Santo Angel (Ilog)", "Santo Cristo", "Santo Niño (Arsum)", "Soledad (Macopa)"];
        
        for (var i = 0; i < barangays.length; i++) {
          var option = document.createElement("option");
          option.text = barangays[i];
          option.value = "sanpablo_" + i;
          secondDropdown.add(option);
        }
      } else if (selectedOption === "sanpedro") {
        var barangays = ["Bagong Silang", "Calendola", "Chrysanthemum[a]", "Cuyab", "Estrella", "Fatima[a]", "G.S.I.S.", "Landayan", "Langgam", "Laram", "Maharlika[a]", "Magsaysay", "Narra", "Nueva", "Pacita 1[a]", "Pacita 2[a]", "Poblacion", "Riverside", "Rosario[a]", "Sampaguita Village", "San Antonio", "San Roque", "San Vicente", "San Lorenzo Ruiz[a]", "Santo Niño", "United Bayanihan", "United Better Living"];
        
        for (var i = 0; i < barangays.length; i++) {
          var option = document.createElement("option");
          option.text = barangays[i];
          option.value = "sanpedro_" + i;
          secondDropdown.add(option);
        }
      } else if (selectedOption === "starosa") {
        var barangays = ["Aplaya", "Balibago", "Caingin", "Dila", "Dita", "Don Jose", "Ibaba", "Kanluran (Poblacion Uno)", "Labas", "Macabling", "Malitlit", "Malusak (Poblacion Dos)", "Market Area (Poblacion Tres)", "Pooc (Pook)", "Pulong Santa Cruz", "Santo Domingo", "Sinalhan", "Tagapo"];
        
        for (var i = 0; i < barangays.length; i++) {
          var option = document.createElement("option");
          option.text = barangays[i];
          option.value = "starosa_" + i;
          secondDropdown.add(option);
        }
      }
    }
  </script>