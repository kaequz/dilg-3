<!DOCTYPE html>
<html>
<head>
    <title>Archive Table</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        .status-settled {color: green;}
        .status-pending {color: red;}

       h2 {
  border: 2px solid dimgray;
  border-radius: 5px;
}
span {
  display: inline; /* the default for span */
  width: 100px;
  height: 100px;

}

.container {
    margin-bottom: 100px;
}

    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="container"><img src="https://www.dilg.gov.ph/images/logo-dilg-new.png" width="645" height="104" alt="Department of the Interior and Local Government - Kagawaran ng Interyor at Pamahalaang Lokal"> </div>
      <center>  <h2><span> ARCHIVE FILES</span></h2></center>
        <div class="d-flex justify-content-end align-items-center mb-3">
            <form class="d-flex me-2">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
               
            </form>
            <span class="text-secondary">
                <i class="bi bi-gear"></i>
            </span>
        </div>
             <table class="table table-striped">
            <thead>
                <tr>
                    <th>Case No.</th>
                    <th>Docket No.</th>
                    <th>Complaint Title</th>
                    <th>Complainant</th>
                    <th>Category</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>2023-001</td>
                    <td>Lorem Ipsum</td>
                    <td>John Doe</td>
                    <td>Category A</td>
                    <td class="status-settled">Settled</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>2023-002</td>
                    <td>Dolor Sit Amet</td>
                    <td>Jane Smith</td>
                    <td>Category B</td>
                    <td class="status-pending">Pending</td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>2023-003</td>
                    <td>Consectetur Adipiscing</td>
                    <td>David Johnson</td>
                    <td>Category A</td>
                    <td class="status-settled">Settled</td>
                </tr>
                <tr>
                    <td>004</td>
                    <td>2023-004</td>
                    <td>Sed Eiusmod Tempor</td>
                    <td>Emily Davis</td>
                    <td>Category C</td>
                    <td class="status-settled">Settled</td>
                </tr>
                <tr>
                    <td>005</td>
                    <td>2023-005</td>
                    <td>Aliquam Tristique Nibh</td>
                    <td>Michael Wilson</td>
                    <td>Category B</td>
                    <td class="status-pending">Pending</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        var statusCells = document.getElementsByClassName("status-settled");
        for (var i = 0; i < statusCells.length; i++) {
            statusCells[i].classList.add("text-success");
        }

        statusCells = document.getElementsByClassName("status-pending");
        for (var i = 0; i < statusCells.length; i++) {
            statusCells[i].classList.add("text-danger");
        }
        
        var table = document.getElementsByTagName("table")[0];
        table.addEventListener("click", function(event) {
            var target = event.target;
            if (target.classList.contains("status-settled")) {
                target.textContent = "Pending";
                target.classList.remove("status-settled", "text-success");
                target.classList.add("status-pending", "text-danger");
            } else if (target.classList.contains("status-pending")) {
                target.textContent = "Settled";
                target.classList.remove("status-pending", "text-danger");
                target.classList.add("status-settled", "text-success");
            }
        });
    </script>
</body>
</html>