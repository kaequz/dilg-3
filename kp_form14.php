<!DOCTYPE html>
<html>
<head>
    <title>kpform_14</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
          body *:not(button):not(i) {
            color: black;
            font-size: 12px;
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
            background-repeat: repeat;
            margin-top: 20px;
        }
        .top-right-buttons {
        position: absolute;
        top: 40px;
        right: 20px;
        display: flex;
        flex-direction: column;
        }
                
        .button-container {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            margin-top: 10px;
        }
        
        .download-button {
        margin-top: 10px;
        }

        .reset-button {
            margin-right: 10px;
            margin-top: 10px;
        }
        
        
        .save-button {
            margin-right: 10px;
            margin-top: 10px;
        }

        .submit-button {
            margin-right: 10px;
            margin-top: 10px;
        }
        
        .arrow-button {
            background-color: #bbb;
            color: #fff;
            margin-right: 63px;
            margin-top: 10px;
        }

        .arrow-button:hover {
            background-color: #888;
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
            
            @media print {
            .top-right-buttons,
            .print-button,
            .reset-button,
            .submit-button,
            .button-container,
            .blank-page {
            display: none;
                }
            }
            select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-image: none;
            padding: 0;
            margin: 50;
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
        
        @media print {
            .top-right-buttons,
            .arrow-button {
                display: none;
            }
        }
        
        .common-button {
        width: 100px;
        height: 40px;
        margin-right: 1px;
        }
        input{
            border: none; 
            border-bottom: 1px solid black; 

        }
        div .d {
        text-align: center;
        }
        div .e {
        text-align: right;
        }
    </style>
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
                <h5>KP Form No.14</h5>
                <h5 style="text-align: center;">Republic of the Philippines</h5>
                <h5 style="text-align: center;">Province of _________</h5>
                <h5 style="text-align: center;">CITY/MUNICIPALITY OF __________</h5>
                <h5 style="text-align: center;">Barangay _________________</h5>
                <h5 style="text-align: center;">OFFICE OF THE PUNONG BARANGAY</h5>
            </div>

            <?php
            $months = [
                'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

            $currentYear = date('Y');
            ?>

            <script>
                function downloadPDF() {
                    removePlaceholdersForPrinting();
                }

                function saveChanges() {

                    alert("Changes have been saved!");
                }
            </script>

<div class="form-group" style="text-align: right;">

    <div class="input-field">
        <input type="text" name="barangayCaseNo" pattern="\d{3}-\d{3}-\d{4}" maxlength="15" placeholder="Case No. - Blotter No. - MMYY" style="width: 30%;"
> <br><br> <p>For: <input type="text" name="for" id="for" size="30"> <br> <input type="text" name="for" id="for" size="30">
    </div>
</div>

<div class="form-group" style="text-align: justify; text-indent: 0em; margin-left: 20.5px;">
    <div class="label"></div>
    <div class="input-field">
        <p> Complainants:<br><input type="text" name="complainant" id="complainant" size="30"><br><input type="text" name="complainant" id="complainant" size="30"> </p>
    <br><p> — against —</p>
</div>
</div>

<div>
<div class="form-group" style="text-align: justify; text-indent: 0em; margin-left: 20.5px;">
    <div class="label"></div>
    <div class="input-field">
        <p> Respondents:<br><input type="text" name="respondent" id="respondent" size="30"><br><input type="text" name="respondent" id="respondent" size="30"> </p>
    </div>
</div>

   

<h3 style="text-align: center;"> 
AGREEMENT FOR ARBITRATION
</h3>

    <div style="text-align: justify; text-indent: 0em; margin-left: 20.5px;">We hereby agree to submit our dispute for arbitration to the Punong Barangay/Pangkat ng Tagapagkasundo (Please cross out whichever is not applicable) and bind ourselves to comply with the award that may be rendered thereon. We have made this
    agreement freely with a full understanding of its nature and consequences.              
    </div>
   
    <br>

    <div style="text-align: justify; text-indent: 0em; margin-left: 20.5px;"> Entered into this<input type="text" name="day" placeholder="day" size="5" required> day of
                <select name="month" required>
                    <option value="">Select Month</option>
                    <?php foreach ($months as $month): ?>
                        <option value="<?php echo $month; ?>"><?php echo $month; ?></option>
                    <?php endforeach; ?>
                </select> ,
                20
                <input type="text" name="year" placeholder="year" size="1" value="<?php echo substr($currentYear, -2); ?>" pattern="[0-9]{2}" required>.
              
</div>
    
<div class="d">
  <p><br>Complainant/s <br> <input type="text" id="cmplnsts" name="cmplnsts" size="30" > <br>
  <input type="text" id="cmplnsts1" name="cmplnsts1" size="30"> </p>
  <p><br>Respondent/s <br> <input type="text" id="cmplnsts" name="cmplnsts" size="30" > <br>
  <input type="text" id="cmplnsts1" name="cmplnsts1" size="30"> </p>
  </div>

  <p>ATTESTATION</p>

<div style="text-align: justify; text-indent: 0em; margin-left: 20.5px;"> I hereby certify that the foregoing Agreement for Arbitration was entered into by the parties freely and voluntarily, after I had explained to them the nature and the consequences of such agreement.
</div>

  <div class="e">
  <p><input type="text" id="pngbrgy" name="pngbrgy" size="30"> <br> Punong Barangay/Lupon Chairman <br> (Cross out whichever one is not applicable).</p>
  </div>

                <?php if (!empty($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                
            </div>
        </div>
        <br>
     <div class="blank-page"></div>
    <div style="position: fixed; bottom: 20px; right: 20px; display: flex; flex-direction: column;">
        <button class="btn btn-dark arrow-button" onclick="goToTop()">
            <i class="fas fa-arrow-up"></i>
        </button>
        <button class="btn btn-secondary arrow-button" onclick="goToBottom()">
            <i class="fas fa-arrow-down"></i>
        </button>
        </div>
        <script>
        function goToTop() {
            window.scrollTo(0, 0);
        }
        function goToBottom() {
            window.scrollTo(0, document.body.scrollHeight);
        }
    </script>


</body>
</html>
