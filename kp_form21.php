<!DOCTYPE html>
<html>
<head>
    <title>KP. FORM 21</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <link rel="stylesheet" href="style.css">
</head>
<body>
    <br>
    <div class="container">
        <div class="paper">
                <div class="top-right-buttons">
                <!-- Print button -->
                <button class="btn btn-primary print-button common-button" onclick="window.print()">
                    <i class="fas fa-print button-icon"></i> Print
                </button>
                <!-- Download button -->
                <button class="btn btn-primary download-button common-button" onclick="downloadPDF()">
                    <i class="fas fa-download button-icon"></i> Download
                </button>
                <!-- Reset button -->
                <button type="reset" name="reset" onclick="resetFields()" class="btn btn-danger reset-button common-button">
                    <i class="fas fa-undo reset-icon"></i> Reset
                </button>
                <!-- Save button -->
            <button type="button" name="save" class="btn btn-info save-button common-button">
                <i class="fas fa-save save-icon"></i> Save
            </button>
                 <!-- Submit button -->
                 <button type="submit" name="submit" class="btn btn-success submit-button common-button">
                     <i class="fas fa-check-circle submit-icon"></i> Submit
                 </button>
            </div>

            <div style="text-align: left;">
                <h5>KP Form No. 21</h5>
                <h5 style="text-align: center;">Republic of the Philippines</h5>
                <h5 style="text-align: center;">Province of _________</h5>
                <h5 style="text-align: center;">CITY/MUNICIPALITY OF __________</h5>
                <h5 style="text-align: center;">Barangay _________________</h5>
                <h5 style="text-align: center;">OFFICE OF THE PUNONG BARANGAY</h5>
            </div>
            
            <div class="form-group" style="text-align: right;">
    <div class="input-field">
        <input type="text" name="barangayCaseNo" pattern="\d{3}-\d{3}-\d{4}" maxlength="15" placeholder="Case No. - Blotter No. - MMYY" style="width: 25%;"
        value="">  <p>For: <input type="text" name="for" id="for" size="30" value=""> <br> <input type="text" name="for" id="for" size="30">
    </div>
</div>

<div class="form-group" style="text-align: justify; text-indent: 0em; margin-left: 20.5px;">
    <div class="label"></div>
    <div class="input-field">
        <p> Complainants:<br><input type="text" name="complainant" id="complainant" size="30"><br><input type="text" name="complainant" id="complainant" size="30"> </p>
    <br><p> — against —</p>
</div>
</div>

<div class="form-group" style="text-align: justify; text-indent: 0em; margin-left: 20.5px;">

    <div class="input-field">
        <p> Respondents:<br><input type="text" name="respondent" id="respondent" size="30"><br><input type="text" name="respondent" id="respondent" size="30">
           </p>
    </div>
</div>

            <?php
            $months = [
                'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
            ];

            $currentYear = date('Y');
            ?>

          
                <script>
                    var yearInput = document.getElementById('year');

                    yearInput.addEventListener('keyup', function(event) {
                        if (event.keyCode === 38) {
                            event.preventDefault();
                            var year = parseInt(yearInput.value);
                            yearInput.value = year + 1;
                        }
                    });

                    yearInput.addEventListener('keyup', function(event) {
                        if (event.keyCode === 40) {
                            event.preventDefault();
                            var year = parseInt(yearInput.value);
                            yearInput.value = year - 1;
                        }
                    });
                </script>

                <h3 style="text-align: center;"><b> CERTIFICATION TO BAR ACTION</b> </h3>
  
    <div>
    <p style="text-indent: 2.8em; text-align: justify;">
    This is to certify that the above-captioned case was dismissed pursuant to the Order dated

    <input type="text" name="day" placeholder="day" size="1" required>  of
                <select name="month" required>
                    <option value="">Select Month</option>
                    <?php foreach ($months as $month): ?>
                        <option value="<?php echo $month; ?>"><?php echo $month; ?></option>
                    <?php endforeach; ?>
                </select>,
                20
                <input type="text" name="year" placeholder="year" size="1" value="<?php echo substr($currentYear, -2); ?>" pattern="[0-9]{2}" required>
              for
              <label for="complainant"> </label>
            <input type="text" name="complainant" id="complainant/s" placeholder="Complainant's name"required> and
             <label for="complainant"> </label>
            <input type="text" name="complainant" id="complainant/ss" placeholder="Complainant's name"> willful failure or refusal to appear for hearing before the Punong Barangay/Pangkat
ng Tagapagkasundo and therefore complainant/s is/are barred from filing an action in court/government office.

    </div>
      

        <p style="text-align: justify; text-indent: 2.8em; "> This <input type="text" name="day" placeholder="day" size="1" required>  of
                <select name="month" required>
                    <option value="">Select Month</option>
                    <?php foreach ($months as $month): ?>
                        <option value="<?php echo $month; ?>"><?php echo $month; ?></option>
                    <?php endforeach; ?>
                </select>,
                20
                <input type="text" name="year" placeholder="year" size="1" value="<?php echo substr($currentYear, -2); ?>" pattern="[0-9]{2}" required>
               
            </p>

        <?php if (!empty($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

    <div style="position: relative;">
        <br>
        <br>
        <br>
    <hr style="border-top: 1px solid black; width: 30%; margin-left: 530px;">
        <p style="text-align: right; margin-left: 500px; margin-right: auto;">Lupon Secretary/Pangkat Secretary</p>
        <br>
       ATTESTED:
<br>
<br>
    </div>
       <br>
       <div>
       <hr style="border-top: 1px solid black; width: 30%; margin-right: 580px;"> 
        <p style="text-align: left; margin-right: 560px; margin-right: auto;">Lupon Chairman/Pangkat Chairman</p>
    
        <br>
        <br>
 <p style="text-align: justify; margin-right: 560px; margin-right: auto;"> IMPORTANT: If Lupon Secretary makes the certification, the Lupon Chairman attests. If the Pangkat Secretary makes the certification,
the Pangkat Chairman attests.</p>
</div>
 <br>
      
        <br>
        <br>
  </div><br>
  <br>


</div>
<br>
</p>
</div>
<br>

<!-- New arrow buttons -->
        <div style="position: fixed; bottom: 20px; right: 20px; display: flex; flex-direction: column;">
        <!-- Button to go to the top of the form -->
        <button class="btn btn-dark arrow-button" onclick="goToTop()">
            <i class="fas fa-arrow-up"></i>
        </button>
        <!-- Button to go to the bottom of the form -->
        <button class="btn btn-secondary arrow-button" onclick="goToBottom()">
            <i class="fas fa-arrow-down"></i>
        </button>
        </div>
        <script>
        // Function to scroll to the top of the form
        function goToTop() {
            window.scrollTo(0, 0);
        }
        
        // Function to scroll to the bottom of the form
        function goToBottom() {
            window.scrollTo(0, document.body.scrollHeight);
        }
    </script>
      
</body>
</html>