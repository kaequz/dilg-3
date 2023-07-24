<!DOCTYPE html>
<html lang="en">

<head>
  
 <?php include 'functions.php'; ?>
  <title>Create Complaint</title>
  

  
<style>
    body {
      display: block;
    }

    .sidebar {
      width: 100%;
    max-width: 300px; /* Adjust the max-width as per your preference */
    padding: 20px;
    padding-left: 3cm;
    box-sizing: border-box;

    }

    .sidebar ul {
      list-style-type: none;
      padding: 0;

    }

    .sidebar li {
      margin-bottom: 10px;
    }

    .sidebar a {
      text-decoration: none;
      color: #000;
    }
    .formTitle {
      font-weight: bold;
      margin-bottom: 30px;
    }


    a:hover {
      font-weight:bolder;
    }

    a:active {
 
     color: red;
     }

.paper {
            background-color: #fff;
            width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: none;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
            font-family: Arial, sans-serif;
            background-size: cover;
          
        }
        
        .top-right-buttons {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex;
            gap: 10px;
        }
        
        .bottom-right-buttons {
            text-align: right;
            margin-right: 170px;
        }
    
    @media print {
            input[type="text"],
            select,
            textarea {
                border: none !important;
                background-color: transparent !important;
                box-shadow: none !important;
                outline: none !important;
            }
        
            .top-right-buttons,
            .bottom-right-buttons,
            .print-button {
                display: none;
            }
            .blank-page {
                display: none;
            }
        }



/* Styles for the form container */
    .form-container {
    position: fixed;
    top: 40px;
    right: 0;
    width: 0;
    height: 100vh;
    overflow: hidden;
    transition: width .5s;
    z-index: 9999;
    padding-top: 20px;
    padding-bottom: 20px;
  }
    .form-container.show-form {
       width: 79%;
      max-width: none; /* Remove the maximum width for smaller screens */
      height: calc(100vh - 40px); /* Adjust the height to avoid overlapping */
      top: 40px;
      margin-top: 0; /* Remove the top margin */
  }
    }
    .form-container .hidden-form {
      display: none;
    }

    /* Additional styles for the iframe */
    .form-container iframe {
      
    border: none;
    position: absolute;
    width: 100%;
    height: 100%;
    }
     @media (max-width: 767px) {
    .sidebar {
      padding-left: 20px; /* Adjust the left padding for smaller screens */
    }
  </style>
  </style>
</head>

<body>


<main id="main">
    <div class="sidebar">
      <br>
      <nav>
        <ul>
          <li>
            <a class="formTitle">I. Complaint Forms</a>
            <ul>
              <br>
              <li>
                <a href="#" onclick="toggleForm('formContainer1');">KP 7 Complaint</a>
                <div class="form-container" id="formContainer1">
                  <iframe src="kp_form7.php"></iframe>
                </div>
              </li>
              <li>
                <a href="#" onclick="toggleForm('formContainer2');">KP 8 Hearing</a>
                <div class="form-container" id="formContainer2">
                  <iframe src="kp_form8.php"></iframe>
                </div>
              </li>
  <li>
                <a href="#" onclick="toggleForm('formContainer3');">KP 9 Summons</a>
                <div class="form-container" id="formContainer3">
                  <iframe src="kp_form9.php"></iframe>
                </div>
              </li>

          </ul>
        </li>
      
<br>
          <a class="formTitle">II. Mediation Forms</a>
                          <ul>
                <br>        <li>
                  <a href="#kp11" onclick="toggleForm('formContainer4');">KP 11 Notice to Chosen Pangkat Member</a>
                  <div class="form-container" id="formContainer4">
                    <iframe src="kp_form11.php"></iframe>
                  </div>
                </li>
                <li>
                  <a href="#kp12" onclick="toggleForm('formContainer5');">KP 12 Notice of Hearing</a>
                  <div class="form-container" id="formContainer5">
                    <iframe src="kp_form12.php"></iframe>
                  </div>
                </li>
                <li>
                  <a href="#kp13" onclick="toggleForm('formContainer6');">KP 13 Subpoena</a>
                  <div class="form-container" id="formContainer6">
                    <iframe src="kp_form13.php"></iframe>
                  </div>
                </li>
                <li>
                  <a href="#kp14" onclick="toggleForm('formContainer7');">KP 14 Agreement For Arbitration</a>
                  <div class="form-container" id="formContainer7">
                    <iframe src="kp_form14.php"></iframe>
                  </div>
                </li>
                <li>
                  <a href="#kp15" onclick="toggleForm('formContainer8');">KP 15 Arbitration Award</a>
                  <div class="form-container" id="formContainer8">
                    <iframe src="kp_form15.php"></iframe>
                  </div>
                </li>
                <li>
                  <a href="#kp16" onclick="toggleForm('formContainer9');">KP 16 Amicable Settlement</a>
                  <div class="form-container" id="formContainer9">
                    <iframe src="kp_form16.php"></iframe>
                  </div>
                </li>
                <li>
                  <a href="#kp17" onclick="toggleForm('formContainer10');">KP 17 Repudiation</a>
                  <div class="form-container" id="formContainer10">
                    <iframe src="kp_form17.php"></iframe>
                  </div>
                </li>
          </ul>
        </li>
        <li>
<br>
          <a class="formTitle">III. Administration Forms</a>
          <ul>
<br>        <li id="kp1">
                    <a href="#kp17" onclick="toggleForm('formContainer11');">KP 1 Notice To Constitute The Lupon</a>
                    <div class="form-container" id="formContainer11">
                      <iframe src="kp_form1.php"></iframe>
                    </div>
                  </li>
                  <li id="kp2">
                    <a href="#kp17" onclick="toggleForm('formContainer12');">KP 2 Appointment</a>
                    <div class="form-container" id="formContainer12">
                      <iframe src="kp_form2.php"></iframe>
                    </div>
                  </li>
                  <li id="kp3">
                    <a href="#kp17" onclick="toggleForm('formContainer13');">KP 3 Notice Of Appointment</a>
                    <div class="form-container" id="formContainer13">
                      <iframe src="kp_form3.php"></iframe>
                    </div>
                  </li>
                  <li id="kp4">
                    <a href="#kp17" onclick="toggleForm('formContainer14');">KP 4 List Of Appointed Lupon Members</a>
                    <div class="form-container" id="formContainer14">
                      <iframe src="kp_form4.php"></iframe>
                    </div>
                  </li>
                  <li id="kp5">
                    <a href="#kp17" onclick="toggleForm('formContainer15');">KP 5 Oath Of Office</a>
                    <div class="form-container" id="formContainer15">
                      <iframe src="kp_form5.php"></iframe>
                    </div>
                  </li>
                  <li id="kp6">
                    <a href="#kp17" onclick="toggleForm('formContainer16');">KP 6 Withdrawal Of Appointment</a>
                    <div class="form-container" id="formContainer16">
                      <iframe src="kp_form6.php"></iframe>
                    </div>
                  </li>
          </ul>
        </li>
<br>
          <a class="formTitle">IV. Execution Forms</a>
          <ul>
                  <br>
                  <li id="kp23">
                    <a href="#kp23" onclick="toggleForm('formContainer17');">KP 23 Motion For Execution</a>
                    <div class="form-container" id="formContainer17">
                      <iframe src="kp_form23.php"></iframe>
                    </div>
                  </li>
                  <li id="kp24">
                    <a href="#kp24" onclick="toggleForm('formContainer18');">KP 24 Notice Of Hearing (MfE)</a>
                    <div class="form-container" id="formContainer18">
                      <iframe src="kp_form24.php"></iframe>
                    </div>
                  </li>
                  <li id="kp25">
                    <a href="#kp25" onclick="toggleForm('formContainer19');">KP 25 Notice Of Execution</a>
                    <div class="form-container" id="formContainer19">
                      <iframe src="kp_form25.php"></iframe>
                    </div>
                  </li>
          </ul>
        </li>
        <li>
<br>
          <a class="formTitle">V. Certification Forms</a>
          <ul>
                  <br>
                  <li id="kp20">
                    <a href="#kp20" onclick="toggleForm('formContainer201');">KP 20 Certification To File Action</a>
                    <div class="form-container" id="formContainer201">
                      <iframe src="kp_form20.php"></iframe>
                    </div>
                  </li>


                  <li id="kp20a">
                    <a href="#kp20a" onclick="toggleForm('formContainer20');">KP 20-A Certification To File Action</a>
                    <div class="form-container" id="formContainer20">
                      <iframe src="kp_form20A.php"></iframe>
                    </div>
                  </li>
                  <li id="kp20b">
                    <a href="#kp20b" onclick="toggleForm('formContainer21');">KP 20-B Certification To File Action</a>
                    <div class="form-container" id="formContainer21">
                      <iframe src="kp_form20B.php"></iframe>
                    </div>
                  </li>
                  <li id="kp21">
                    <a href="#kp21" onclick="toggleForm('formContainer22');">KP 21 Certification To Bar Action</a>
                    <div class="form-container" id="formContainer22">
                      <iframe src="kp_form21.php"></iframe>
                    </div>
                  </li>
                  <li id="kp22">
                    <a href="#kp22" onclick="toggleForm('formContainer23');">KP 22 Certification To Bar Counterclaim</a>
                    <div class="form-container" id="formContainer23">
                      <iframe src="kp_form22.php"></iframe>
                    </div>
                  </li>
                  <li id="kp10">
                    <a href="#kp10" onclick="toggleForm('formContainer24');">KP 10 Notice For Constitution Of Pangkat</a>
                    <div class="form-container" id="formContainer24">
                      <iframe src="kp_form10.php"></iframe>
                    </div>
                  </li>
                  <li id="kp18">
                    <a href="#kp18" onclick="toggleForm('formContainer25');">KP 18 Notice Of Hearing (Re: Failure To Appear)</a>
                    <div class="form-container" id="formContainer25">
                      <iframe src="kp_form18.php"></iframe>
                    </div>
                  </li>
                  <li id="kp19">
                    <a href="#kp19" onclick="toggleForm('formContainer26');">KP 19 Notice Of Hearing (Re: Failure To Appear)</a>
                    <div class="form-container" id="formContainer26">
                      <iframe src="kp_form19.php"></iframe>
                    </div>
                  </li>
                  
          </ul>
        </li>
      </ul>
    </nav>
  </div>
   
  
<script>
    function toggleForm(containerId) {
      var container = document.getElementById(containerId);
      var activeContainer = document.querySelector('.form-container.show-form');

      if (activeContainer && activeContainer !== container) {
        activeContainer.classList.remove('show-form');
      }

      container.classList.toggle('show-form');
    }
  </script>
        
</main>
  

</body>

</html>
