<!DOCTYPE html>
<html>
<head>
    <title>kpform_17</title>
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
        flex-direction: column; /* Changed to a column layout */
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
        div .a {
        text-align: center;
        }
        div .e{
        text-align: left;
        }
        div .z{
            text-align: right;
        }

    </style>
</head>
<body>

    <br>
<div class="container">
        <div class="paper">
            <div class="top-right-buttons">
                <button class="btn btn-primary print-button common-button" onclick="window.print()">
                    <i class="fas fa-print button-icon"></i> Print
                </button>
                <button class="btn btn-primary download-button common-button" onclick="downloadPDF()">
                    <i class="fas fa-download button-icon"></i> Download
                </button>
                <button type="reset" name="reset" onclick="resetFields()" class="btn btn-danger reset-button common-button">
                    <i class="fas fa-undo reset-icon"></i> Reset
                </button>
            <button type="button" name="save" class="btn btn-info save-button common-button">
                <i class="fas fa-save save-icon"></i> Save
            </button>
                 <button type="submit" name="submit" class="btn btn-success submit-button common-button">
                     <i class="fas fa-check-circle submit-icon"></i> Submit
                 </button>
            </div>



            <div style="text-align: left;">
                <h5>KP Form No.17</h5>
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
REPUDIATION
</h3>

<div style="text-align: justify; text-indent: 0em; margin-left: 20.5px;">I/WE hereby repudiate the settlement/agreement for arbitration on the ground that my/our consent was vitiated by: <br>
(Check out whichever is applicable)
    </div>
    <br>

    <div  style="text-align: justify; text-indent: 0em; margin-left: 20.5px;"> [ ] Fraud. (State details) <input type="type" name="frd" id="frd" size="50"> <br> <input type="type" name="frd" id="frd" size="60"> <br><input type="type" name="frd" id="frd" size="60"> </div> <br>
    <div  style="text-align: justify; text-indent: 0em; margin-left: 20.5px;"> [ ] Violence. (State details) <input type="type" name="frd" id="frd" size="50"> <br> <input type="type" name="vlcne" id="vlcne" size="60"> <br><input type="type" name="frd" id="frd" size="60"> </div> <br>
    <div  style="text-align: justify; text-indent: 0em; margin-left: 20.5px;"> [ ] Intimidation. (State details) <input type="type" name="frd" id="frd" size="50"> <br> <input type="type" name="intmdtn" id="intmdtn" size="60"> <br><input type="type" name="frd" id="frd" size="60"> </div> <br>


    <div style="text-align: justify; text-indent: 0em; margin-left: 20.5px;"> This <input type="text" name="day" placeholder="day" size="1" required> day of
                <select name="month" required>
                    <option value="">Select Month</option>
                    <?php foreach ($months as $month): ?>
                        <option value="<?php echo $month; ?>"><?php echo $month; ?></option>
                    <?php endforeach; ?>
                </select> ,
                20
                <input type="text" name="year" placeholder="year" size="1" value="<?php echo substr($currentYear, -2); ?>" pattern="[0-9]{2}" required>.              
</div> 

<div class="a">
  <p><br>Complainant/s <br> <input type="text" id="cmplnsts" name="cmplnsts" size="30" > <br>
  <input type="text" id="cmplnsts1" name="cmplnsts1" size="30"> </p>
  <p><br>Respondent/s <br> <input type="text" id="cmplnsts" name="cmplnsts" size="30" > <br>
  <input type="text" id="cmplnsts1" name="cmplnsts1" size="30"> </p>
                    </div>

<div style="text-align: justify; text-indent: 0em; margin-left: 20.5px;"> SUBSCRIBED AND SWORN TO before me this <input type="text" name="day" placeholder="day" size="1" required> day of
                <select name="month" required>
                    <option value="">Select Month</option>
                    <?php foreach ($months as $month): ?>
                        <option value="<?php echo $month; ?>"><?php echo $month; ?></option>
                    <?php endforeach; ?>
                </select> ,
                20
                <input type="text" name="year" placeholder="year" size="1" value="<?php echo substr($currentYear, -2); ?>" pattern="[0-9]{2}" required>.              
</div><br>

<div class="z">
  <p><input type="text" id="pngbrgy" name="pngbrgy" size="30"> <br> Punong Barangay/Pangkat Chairman/Member</p>
  </div>

<div style="text-align: justify; text-indent: 0em; margin-left: 20.5px;"> Received and filed * this <input type="text" name="day" placeholder="day" size="1" required> day of
                <select name="month" required>
                    <option value="">Select Month</option>
                    <?php foreach ($months as $month): ?>
                        <option value="<?php echo $month; ?>"><?php echo $month; ?></option>
                    <?php endforeach; ?>
                </select> ,
                20
                <input type="text" name="year" placeholder="year" size="1" value="<?php echo substr($currentYear, -2); ?>" pattern="[0-9]{2}" required>.              
</div><br>

<div class="z">
<p class="important-warning-text" style="text-align: center; font-size: 12px; margin-left: 570px; margin-right: auto;"><input type="text" id="cmplnts" name="cmplnts" size="25">Punong Barangay</p>
  </div>

  <div style="text-align: justify; text-indent: 0em; margin-left: 20.5px;">* Failure to repudiate the settlement or the arbitration agreement within the time limits respectively set (ten [10] days from the date of settlement and five[5] days from the date of arbitration agreement) shall be deemed a waiver of the right to challenge on
said grounds.
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
