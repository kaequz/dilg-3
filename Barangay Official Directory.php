<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'functions.php' ?>
  <title>Barangay Official Directory</title>
  

</head>

<body>

 

    <section id="services" class="services">
    <div class="container">

    <div class="section-title">
    <h2>Barangay Official Directory</h2>
    </div>

    <div class="row">
        <div class="col-5 mx-auto">
          <div class="icon-box">
            <img src="logo.png" class="rounded mx-auto d-block" alt="...">
            <br>
            <h4><a>Barangay Official Directory</a></h4>

<br>

    <div class="myForm col-10 mx-auto">

        <form id="myForm" action="#" method="post">
            <div class="form-group">
                <select class="form-control" id="municipality" name="municipality">
                    <option value="Municipality A">Municipality A</option>
                    <option value="Municipality B">Municipality B</option>
                    <option value="Municipality C">Municipality C</option>
                    <!-- Add more municipalities as needed -->
                </select>
            </div><br>

            <div class="form-group">
                <select class="form-control" id="barangay" name="barangay">
                    <option value="Barangay X">Barangay X</option>
                    <option value="Barangay Y">Barangay Y</option>
                    <option value="Barangay Z">Barangay Z</option>
                    <!-- Add more barangays as needed -->
                </select>
            </div><br><br>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form><br>

        <div id="output"></div><br>

        <div id="resetBtn">
            <button class="btn btn-secondary" onclick="resetForm()">Reset</button>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myForm').submit(function(event) {
                event.preventDefault(); // Prevent form submission

                // Get the selected values
                var municipality = $('#municipality').val();
                var barangay = $('#barangay').val();

                // Perform any necessary processing here to get the corresponding officials based on the selected municipality and barangay

                // Example officials for demonstration purposes
                var barangayChairman = "Barangay Chairman ABC";
                var barangaySecretary = "Barangay Secretary DEF";
                var barangayCouncilor = "Barangay Councilor GHI";
                var skChairman = "SK Chairman JKL";
                var contactNumber = "123-456-7890";
                var email = "example@example.com";

                // Display the output
                var output = "<div class='output-line'><strong>Municipality:</strong> " + municipality + "</div>";
                output += "<div class='output-line'><strong>Barangay:</strong> " + barangay + "</div>";
                output += "<div class='output-line'><strong>Barangay Chairman:</strong> " + barangayChairman + "</div>";
                output += "<div class='output-line'><strong>Barangay Secretary:</strong> " + barangaySecretary + "</div>";
                output += "<div class='output-line'><strong>Barangay Councilor:</strong> " + barangayCouncilor + "</div>";
                output += "<div class='output-line'><strong>SK Chairman:</strong> " + skChairman + "</div>";
                output += "<div class='output-line'><strong>Contact Number:</strong> " + contactNumber + "</div>";
                output += "<div class='output-line'><strong>Email:</strong> " + email + "</div>";

                $('#output').html(output);
            });
        });

        function resetForm() {
            $('#myForm')[0].reset();
            $('#output').html('');
        }
    </script>



</body>

</html>