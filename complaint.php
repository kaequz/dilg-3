<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    Case Description
  </title>
       <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>


.form-container h2 {
  text-align: center;
  margin-bottom: 20px;
}

.form-content {
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 10px;
}

label {
  font-weight: bold;
  display: block;
}

span {
  display: inline-block;
  margin-left: 10px;
}
.form-container {
  position: relative;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  text-align: center;
}

.watermark-container {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: -1;
  pointer-events: none;
  display: flex;
  justify-content: center;
  align-items: center;
}

.watermark {
  opacity: 0.2;
  width: 500px; /* Adjust size as needed */
}

</style>
<body>
<div class="form-container">
  <h4><a>Case Description</a></h4>
  <div class="watermark-container">
  </div>
  <div class="form-content">
    <div class="form-group">
      <label for="complainant-name">Complainant Name:</label>
      <span>John Doe</span>
    </div>
    <div class="form-group">
      <label for="complainant-address">Complainant Address:</label>
      <span>123 Main Street, City, State</span>
    </div>
    <div class="form-group">
      <label for="complainant-contact">Complainant Contact No.:</label>
      <span>123-456-7890</span>
    </div>
    <div class="form-group">
      <label for="respondent-name">Respondent Name:</label>
      <span>Jane Smith</span>
    </div>
    <div class="form-group">
      <label for="respondent-address">Respondent Address:</label>
      <span>456 Elm Street, City, State</span>
    </div>
    <div class="form-group">
      <label for="respondent-contact">Respondent Contact No.:</label>
      <span>987-654-3210</span>
    </div>
    <div class="form-group">
      <label for="complaint-category">Nature/Category of Complaint:</label>
      <span>Product Defect</span>
    </div>
    <div class="form-group">
      <label for="incident-date">Date and Time of Incident:</label>
      <span>2023-07-14 15:30</span>
    </div>
    <div class="form-group">
      <label for="incident-location">Location of Incident:</label>
      <span>City Park, XYZ Street</span>
    </div>
  </div>
</div>

</body>
</html>