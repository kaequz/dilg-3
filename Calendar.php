<!DOCTYPE html>
<html lang="en">

<head>
  
  <?php include 'functions.php'; ?>
  <title>User Dashboard - Calendar Schedule</title>


</head>

<body>

  <br><br>

<main id="main">

  <section id="services" class="services">
      
    <div class="container">
      <div class="section-title">
        <h2>User Dashboard</h2>
      </div>

      <div class="row">
        <div class="col-100 mx-auto">
          <div class="icon-box">


            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="clock">
                    <h4><a><span id="hours"></span><span>:</span><span id="minutes"></span><span>:</span><span id="seconds"></span><span> </span><span id="ampm"></span></a></h4>
<br>
                  </div>
                </div>
              </div>
            </div>
          
            <script>
              function updateClock() {
                var now = new Date();
                var hours = now.getHours();
                var minutes = now.getMinutes();
                var seconds = now.getSeconds();
                var ampm = hours >= 12 ? 'PM' : 'AM';
          
                hours = hours % 12;
                hours = hours ? hours : 12; // convert 0 to 12
          
                document.getElementById('hours').innerHTML = hours;
                document.getElementById('minutes').innerHTML = ('0' + minutes).slice(-2);
                document.getElementById('seconds').innerHTML = ('0' + seconds).slice(-2);
                document.getElementById('ampm').innerHTML = ampm;
          
                setTimeout(updateClock, 1000); // Update the clock every second
              }
          
              updateClock(); // Initial call to start the clock
            </script>
            

            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <h4><a><h4 id="currentMonthYear"></h4></a></h4>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Sun</th>
                        <th>Mon</th>
                        <th>Tue</th>
                        <th>Wed</th>
                        <th>Thu</th>
                        <th>Fri</th>
                        <th>Sat</th>
                      </tr>
                    </thead>
                    <tbody id="calendarBody"></tbody>
                  </table>
                  <div>
                    <button class="btn btn-secondary" id="prevMonth">Previous Month</button>
                    <button class="btn btn-secondary" id="nextMonth">Next Month</button>
                  </div>
                </div>
                <div class="col-md-6">
                  <h4><a>Upcoming Events</a></h4>
                  <div id="eventListContainer">
                    <ul id="eventList"></ul>
                  </div>
                </div>
            </div>
            
            <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="eventModalLabel">Add Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="event">Event:</label>
                      <input type="text" class="form-control" id="event" placeholder="Enter event title">
                    </div>
                    <div class="form-group">
                      <label for="description">Description:</label>
                      <textarea class="form-control" id="description" rows="3" placeholder="Enter event description"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="selection">Appoint Lupon:</label>
                      <select class="form-control" id="selection">
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                        <option value="option3">Option 3</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="time">Time:</label>
                      <select class="form-control" id="time">
                        <option value="08:00 AM">08:00 AM</option>
                        <option value="09:00 AM">09:00 AM</option>
                        <option value="10:00 AM">10:00 AM</option>
                        <!-- Add more time options here -->
                      </select>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-secondary" id="saveEvent">Save</button>
                  </div>
                </div>
              </div>
            </div>
            
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            
            <script>
              $(document).ready(function() {
                var currentDate = new Date();
                var currentMonth = currentDate.getMonth();
                var currentYear = currentDate.getFullYear();
            
                $('#prevMonth').click(function() {
                  currentMonth--;
                  if (currentMonth < 0) {
                    currentMonth = 11;
                    currentYear--;
                  }
                  generateCalendar(currentMonth, currentYear);
                });
            
                $('#nextMonth').click(function() {
                  currentMonth++;
                  if (currentMonth > 11) {
                    currentMonth = 0;
                    currentYear++;
                  }
                  generateCalendar(currentMonth, currentYear);
                });
            
                $('#saveEvent').click(function() {
                  var eventTitle = $('#event').val();
                  var eventDescription = $('#description').val();
                  var eventDate = $('#eventModalLabel').text().split(' - ')[1];
            
                  if (eventTitle && eventDate) {
                    var event = {
                      date: eventDate,
                      event: eventTitle,
                      description: eventDescription
                    };
            
                    events.push(event);
                    updateUpcomingEvents();
                    saveEventsToLocalStorage();
                    $('#eventModal').modal('hide'); // Close the modal
                  }
                });
            
                $('#eventModal').on('show.bs.modal', function(event) {
                  var button = $(event.relatedTarget);
                  var clickedDay = button.text();
                  $('#eventModalLabel').text('Add Event - ' + (currentMonth + 1) + '/' + clickedDay + '/' + currentYear);
                });
            
                // Load events from local storage
                var storedEvents = localStorage.getItem('events');
                if (storedEvents) {
                  events = JSON.parse(storedEvents);
                }
            
                generateCalendar(currentMonth, currentYear);
                updateUpcomingEvents();
              });
            
              var events = [];
            
              function generateCalendar(month, year) {
                var currentDate = new Date();
                var currentDay = currentDate.getDate();
                var currentMonth = currentDate.getMonth();
                var currentYear = currentDate.getFullYear();
            
                var monthNames = [
                  'January', 'February', 'March', 'April', 'May', 'June',
                  'July', 'August', 'September', 'October', 'November', 'December'
                ];
            
                $('#currentMonthYear').text(monthNames[month] + ' ' + year);
            
                var startDate = new Date(year, month, 1);
                var endDate = new Date(year, month + 1, 0);
                var startDay = startDate.getDay();
                var totalDays = endDate.getDate();
            
                var calendarBody = $('#calendarBody');
                calendarBody.empty();
            
                var currentRow = $('<tr>');
                var dayOfWeek = startDay;
            
                // Add empty cells for previous month days
                for (var i = 0; i < startDay; i++) {
                  currentRow.append('<td></td>');
                }
            
                for (var day = 1; day <= totalDays; day++) {
                  var cell = $('<td><button class="btn btn-link" data-toggle="modal" data-target="#eventModal">' + day + '</button></td>');
            
                  if (month === currentMonth && year === currentYear && day === currentDay) {
                    cell.addClass('current-day');
                  }
            
                  currentRow.append(cell);
            
                  if (dayOfWeek === 6) {
                    calendarBody.append(currentRow);
                    currentRow = $('<tr>');
                  }
            
                  dayOfWeek = (dayOfWeek + 1) % 7;
                }
            
                // Add empty cells for next month days
                if (dayOfWeek !== 0) {
                  for (var i = dayOfWeek; i < 7; i++) {
                    currentRow.append('<td></td>');
                  }
                }
            
                calendarBody.append(currentRow);
              }
            
              function updateUpcomingEvents() {
                var eventList = $('#eventList');
                eventList.empty();
            
                for (var i = 0; i < events.length; i++) {
                  var event = events[i];
                  var listItem = $('<li class="event-item">' + event.date + ': ' + event.event +
                    '<div class="event-actions">' +
                    '<button class="btn btn-secondary edit-event" data-index="' + i + '">Edit</button>' +
                    '<button class="btn btn-secondary  delete-event" data-index="' + i + '">Delete</button>' +
                    '</div></li>');
            
                  listItem.find('.edit-event').click(function() {
                    var index = $(this).data('index');
                    var event = events[index];
                    editEvent(index, event.date, event.event, event.description);
                  });
            
                  listItem.find('.delete-event').click(function() {
                    var index = $(this).data('index');
                    deleteEvent(index);
                  });
            
                  eventList.append(listItem);
                }
              }
            
              function showEventDescription(eventDate, eventTitle, eventDescription) {
                var modalBody = $('#eventModal .modal-body');
                modalBody.empty();
            
                modalBody.append('<h5>' + eventDate + '</h5>');
                modalBody.append('<h5>' + eventTitle + '</h5>');
                modalBody.append('<p>' + eventDescription + '</p>');
            
                $('#eventModal').modal('show');
              }
            
              function editEvent(index, eventDate, eventTitle, eventDescription) {
                $('#event').val(eventTitle);
                $('#description').val(eventDescription);
            
                $('#saveEvent').off('click').on('click', function() {
                  var newEventTitle = $('#event').val();
                  var newEventDescription = $('#description').val();
            
                  if (newEventTitle && eventDate) {
                    events[index].event = newEventTitle;
                    events[index].description = newEventDescription;
                    updateUpcomingEvents();
                    saveEventsToLocalStorage();
                    $('#eventModal').modal('hide'); // Close the modal
                  }
                });
            
                $('#eventModal').modal('show');
              }
            
              function deleteEvent(index) {
                events.splice(index, 1);
                updateUpcomingEvents();
                saveEventsToLocalStorage();
              }
            
              function saveEventsToLocalStorage() {
                localStorage.setItem('events', JSON.stringify(events));
              }



              $(document).ready(function() {
  // ...

  function generateTimeOptions() {
    var timeSelect = $('#time');
    timeSelect.empty();

    // Customize the time range and interval as needed
    var startTime = 8; // Start time in hours (e.g., 8 AM)
    var endTime = 18; // End time in hours (e.g., 6 PM)
    var interval = 1; // Time interval in hours (e.g., 1 hour)

    for (var hour = startTime; hour <= endTime; hour += interval) {
      for (var minute = 0; minute < 60; minute += 15) {
        var time = formatTime(hour) + ':' + formatTime(minute) + (hour < 12 ? ' AM' : ' PM');
        timeSelect.append('<option value="' + time + '">' + time + '</option>');
      }
    }
  }

  function formatTime(time) {
    return time < 10 ? '0' + time : time;
  }

  // Call the function to generate the time options
  generateTimeOptions();

  // ...
});


    
            </script>
          </div>
        </div>
        
     
</main>
 

</body>

</html>