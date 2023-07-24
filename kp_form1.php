<!DOCTYPE html>
<html>
<head>
    <title>kp_form1</title>
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
            top: 1200px;
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
                <h5>KP Form No. 1</h5>
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

                <h3 style="text-align: center;"><b>NOTICE TO CONSTITUTE THE LUPON</b></h3>

                <div style="text-align: left;">
					<p style="text-align: justify; font-size: 12px; margin-top: 0;">To All Barangay Members and All Other Persons Concerned:</p>
					<p style="text-align: justify; font-size: 12px; text-indent: 1.5em;">In compliance with Section 1(a), Chapter 7, Title One, Book III, Local Government Code of 1991 (Republic Act No. 7160), of the Katarungang Pambarangay Law, notice is hereby given to constitute the Lupong Tagapamayapa of this Barangay. The persons I am considering for appointment are the following:</p>
						<div style="display: flex;">
							<div style="flex: 1; margin-left: 145px;">
            <?php for ($i = 1; $i <= 12; $i++): ?>
                <?php $formattedIndex = sprintf("%02d", $i); ?>
                <p style="margin: 0;"><?php echo $formattedIndex; ?>. <input type="text" name="appointed_lupon_<?php echo $formattedIndex; ?>" style="width: 210px; margin-bottom: 5px;"></p>
            <?php endfor; ?>
        </div>

        <div style="flex: 1;">
            <?php for ($i = 13; $i <= 25; $i++): ?>
                <p style="margin: 0;"><?php echo $i; ?>. <input type="text" name="appointed_lupon_<?php echo $i; ?>" style="width: 210px; margin-bottom: 5px;"></p>
            <?php endfor; ?>
			</div>
		</div>
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


                <p style="text-align: justify; text-indent: 1.5em;">They have been chosen on the basis of their suitability for the task of conciliation considering their integrity, impartiality, independence of mind, sense of fairness and reputation for probity in view of their age, social standing in the community, tact, patience, resourcefulness, flexibility, open-mindedness and other relevant factors. The law provides that only those actually residing or working in the barangay who are not expressly disqualified by law are qualified to be appointed as Lupon members.</p>

                <form method="POST">
                    <p style="text-align: justify; text-indent: 1.5em;">
                        All persons are hereby enjoined to immediately inform me and of their opposition to or endorsement of any or all the proposed members or recommend to me other persons not included in the list but not later than the
                        <input type="text" id="day" name="day" required style="width:32px; height: 20px; size="1" required> day of
                        <select name="month" required style="width: 93px; required>
                            <option value="">Select Month</option>
                            <?php foreach ($months as $month): ?>
                                <option value="<?php echo $month; ?>"><?php echo $month; ?></option>
                            <?php endforeach; ?>
                        </select>,
                        20
                        <input type="text" name="year" required style="width: 25px; height: 20px; size="1" value="<?php echo substr($currentYear, -2); ?>" pattern="[0-9]{2}" required>
                        (the last day for posting this notice).
                    </p>
                </form>

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
	<body>
    <canvas id="canvas" width="190" height="80"></canvas>
    <script src="signature.js"></script>
    <p class="important-warning-text" style="text-align: center; font-size: 12px; margin-left: 570px; margin-right: auto;">
    <input type="text" id="pngbrgy" name="pngbrgy" style="border: none; border-bottom: 1px solid black; outline: none;" size="25">
	Punong Barangay
	</p>
					<div><br><br>
                    <p class="important-warning-text" style="text-align: justify; font-size: 12px; text-indent: 1.5em;">
                    IMPORTANT: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    This notice is required to be posted in three (3) conspicuous places in the barangay for at least three (3)
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					weeks.
                    </p>
                    <p class="important-warning-text" style="text-align: justify; font-size: 12px; text-indent: 1.5em;">
                    WARNING: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Tearing or defacing this notice shall be subject to punishment according to law.
                    </p>
                    <br>
					</div>
        </div>
    </div><br>
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