<!DOCTYPE html>
<html lang="en">

<head>
 <?php include 'functions.php' ?>
    <title>Verifying...</title>
  

</head>

<body>

    <!-- Loader -->
  <div class="loader">
    <div id="spinner" class="spinner-border" role="status">
      <span class="sr-only"></span>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script>
    // Wait for the page to load
    window.addEventListener('load', function() {
      // Add a delay of 3 seconds (3000 milliseconds) before redirecting
      setTimeout(function() {
        window.location.href = 'Login - User.php'; // Replace 'next-page.html' with the URL of your next page
      }, 1000);
    });

    // Function to change the spinner color
    function changeSpinnerColor(color) {
      var spinner = document.getElementById('spinner');
      spinner.classList.remove('text-primary');
      spinner.style.color = color;
    }
  </script>
  <script>
    // ...existing code...
  
    // Change the spinner color to red
    changeSpinnerColor('#ce1126');
  </script>
</body>

  


</body>

</html>