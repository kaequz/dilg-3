<!DOCTYPE html>
<html>
<head>
    <title>KP. FORM 23</title>
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
                <h5>KP Form No. 23</h5>
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

                <h3 style="text-align: center;"><b>
MOTION FOR EXECUTION</b>
 </h3>
         <div style="text-align: justify; text-indent: 0em; margin-left: 20.5px;">
           
             <select id="Complainant/s/Respondent/s"name="municipality" onchange="selectBarangays()" required>
        <option value="" disabled selected>Complainant/s/Respondent/s</option>
        <option value="Complainant">Complainant/s</option>
        <option value="Respondent">Respondent/s</option>  
    </select> state as follows:
        </div>
           <br>
           <br>
    <div>

   <div style="text-align: justify; text-indent: 0em; margin-left: 38.5px;"> 1. On <input type="text" name="day" placeholder="day" size="1" required>  of
                <select name="month" required>
                    <option value="">Select Month</option>
                    <?php foreach ($months as $month): ?>
                        <option value="<?php echo $month; ?>"><?php echo $month; ?></option>
                    <?php endforeach; ?>
                </select>,
                20
                <input type="text" name="year" placeholder="year" size="1" value="<?php echo substr($currentYear, -2); ?>" pattern="[0-9]{2}" required>
              the parties in this case signed an amicable settlement/received the arbitration award rendered by
the Lupon/Chairman/Pangkat ng Tagapagkasundo;
           
</div>
<br>

<div style="text-align: justify; text-indent: 0em; margin-left: 20.5px;">
    <p style="text-indent: 0em; margin-left: 18px;">
       2. The period of ten (10) days from the above-stated date has expired without any of the parties filing a sworn statement of
repudiation of the settlement before the Lupon Chairman a petition for nullification of the arbitration award in court; and


    </p>
</div>
</div>
<br>
           <div style="text-align: justify; text-indent: 0em; margin-left: 20.5px;">
    <p style="text-indent: 0em; margin-left: 18px;">
       3. The amicable settlement/arbitration award is now final and executory.

    </p>
    <div style="text-align: justify; text-indent: 0em; margin-left: 20.5px;">
    WHEREFORE, Complainant/s/Respondent/s request that the corresponding writ of execution be issued by the Lupon Chairman in
this case.
</div>
</div>
<br>


            <div style="text-align: justify; text-indent: 0em; margin-left: 38.5px;"> <input type="text" name="day" placeholder="day" size="1" required>  
                <select name="month" required>
                    <option value="">Select Month</option>
                    <?php foreach ($months as $month): ?>
                        <option value="<?php echo $month; ?>"><?php echo $month; ?></option>
                    <?php endforeach; ?>
                </select>,
                20
                <input type="text" name="year" placeholder="year" size="1" value="<?php echo substr($currentYear, -2); ?>" pattern="[0-9]{2}" required>
              
            </p>

        </form>
</div>

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

        <!-- <p style="text-align: center; margin-left: 570px; margin-right: auto;">Complainant/s/Respondent/s</p> -->
         <select id="Complainant/s/Respondent/s"name="Complainant/s/Respondent/s" onchange="ComplainantRespondents()" style="text-align: right; margin-left: 580px; margin-right: auto;"required>
        <option value="" disabled selected>Complainant/s/Respondent/s</option>
        <option value="Complainant">Complainant/s</option>
        <option value="Respondent">Respondent/s</option>  
    </select>
        </div>
    <br>
                       <br>
        <br>
        <br>
        
         
           
        </div><br>
          <br>
        <br>
        <br>
    </div>
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