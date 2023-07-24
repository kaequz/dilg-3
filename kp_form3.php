<!DOCTYPE html>
<html>
<head>
    <title>kp_form3</title>
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
			margin-top: 20px; /* Add top margin */
			height: 920px;
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
			.blank-page 
			.arrow-button {
			display: none;
				}
			}
			
			/* Hide dropdown button in select elements */
			select {
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			background-image: none;
			/* Add padding and margin adjustments */
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
            /* Hide the top-right buttons and arrow buttons when printing */
            .top-right-buttons,
            .arrow-button {
                display: none;
            }
        }
		
		.common-button {
		width: 100px; /* You can adjust the width as needed */
		height: 40px; /* You can adjust the height as needed */
		margin-right: 1px; /* Adjust the margin if you want space between the buttons */
		}
		
		#canvas {
        border: 1px solid lightgray;
        float: right;   
        }
		
		#clearBtn {
            position: absolute;
            top: 980px;
            right: 130px;
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
                <h5>KP Form No. 3</h5>
                <h5 style="text-align: center;">Republic of the Philippines</h5>
                <h5 style="text-align: center;">Province of _________</h5>
                <h5 style="text-align: center;">CITY/MUNICIPALITY OF __________</h5>
                <h5 style="text-align: center;">Barangay _________________</h5>
                <h5 style="text-align: center;">OFFICE OF THE PUNONG BARANGAY</h5>
            </div>
            <?php
            $months = [
                'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
            ];

            $currentYear = date('Y');
            ?>

            <div style="text-align: right;">
                <select id="monthInput" name="month" required style="width: 93px; height: 19px; border: 1px solid black;">
                    <?php
                    $currentMonth = date('F');
                    foreach ($months as $index => $month) {
                        $monthNumber = $index + 1;
                        $selected = ($month == $currentMonth) ? 'selected' : '';
                        echo '<option value="' . $monthNumber . '" ' . $selected . '>' . $month . '</option>';
                    }
                    ?>
                </select>
                <input type="text" id="day" name="day" required style="width: 25px; height: 19px; border: 1px solid black;">
                <label for="day">,</label>
                <input type="text" id="year" name="year" required style="width: 50px; border: none;" value="<?php echo $currentYear; ?>">

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

                <h3 style="text-align: center;"><b>NOTICE OF APPOINTMENT</b></h3>

                <div style="text-align: left;">
				<input type="text" id="recipient" name="recipient" required style="width: 20%; border: none; border-bottom: 1px solid black; margin-right: 0;"></br>
				<input type="text" id="recipient" name="recipient" required style="width: 20%; border: none; border-bottom: 1px solid black; margin-right: 0;"></br>
				<input type="text" id="recipient" name="recipient" required style="width: 20%; border: none; border-bottom: 1px solid black; margin-right: 0;"></br>
				<br><p style="text-align: justify; font-size: 12px; margin-top: 0;">Sir/Madam: </p>
				<p style="text-align: justify; font-size: 12px; text-indent: 1.5em;">Please be informed that you have been appointed by the Punong Barangay as a MEMBER OF THE LUPONG TAGAPAMAYAPA,
					effective upon taking your oath of office, and until a new Lupon is constituted on the third year following your appointment. You may
					take your oath of office before the Punong Barangay on
				<input type="text" id="recipient" name="recipient" required style="width: 20%; border: none; border-bottom: 1px solid black; margin-right: 0;">.
				</p><br><br><br><br>
				</div>

			<script>
				function resetFields() {
				// Clear the value of the day input field
			document.getElementById('day').value = "";
        
				// Get all input elements within the specified div
			var inputs = document.querySelectorAll('.paper div[style="display: flex;"] input[type="text"]');
        
				// Clear the value of each input field
				inputs.forEach(function(input) {
            input.value = "";
				});
			}
			</script>

                <?php if (!empty($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

    <div style="position: relative;"><br>
    <style>
        #canvas {
            border: 1px solid lightgray;
            float: right;
            
        }
    </style>
		<p style="text-align: center; margin-left: 570px; margin-right: auto;">Very truly yours, </p>
	<body>
    <canvas id="canvas" width="190" height="80"></canvas>
    <script src="signature.js"></script>
    <p class="important-warning-text" style="text-align: center; font-size: 12px; margin-left: 570px; margin-right: auto;">
    <input type="text" id="pngbrgy" name="pngbrgy" style="border: none; border-bottom: 1px solid black; outline: none;" size="25">
	Barangay Secretary
	</p>
    </div>
    </div>
    <div class="blank-page"></div>
    </body>
        </div><br><br><br><br><br> 
		
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
	<div class="bottom-right-buttons">
             <button id="clearBtn"class="btn btn-danger clear-button">Clear signature</button></div><br><br>
</body>
</html>	