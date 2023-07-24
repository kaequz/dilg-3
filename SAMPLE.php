<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    .current-day {
      background-color: yellow;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2 id="currentMonthYear"></h2>
    <div class="btn-group">
      <button type="button" class="btn btn-secondary" id="prevMonth">&lt;</button>
      <button type="button" class="btn btn-secondary" id="nextMonth">&gt;</button>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Sunday</th>
          <th>Monday</th>
          <th>Tuesday</th>
          <th>Wednesday</th>
          <th>Thursday</th>
          <th>Friday</th>
          <th>Saturday</th>
        </tr>
      </thead>
      <tbody id="calendarBody">
        <!-- Days will be dynamically generated here -->
      </tbody>
    </table>

    <div id="upcomingEvents">
      <h2>Upcoming Events</h2>
      <ul id="eventList"></ul>
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
          <form>
            <div class="form-group">
              <label for="event">Event:</label>
              <input type="text" class="form-control" id="event">
            </div>
            <div class="form-group">
              <label for="description">Description:</label>
              <textarea class="form-control" id="description"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="saveEvent">Save Event</button>
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

      generateCalendar(currentMonth, currentYear);

      $('#saveEvent').click(function() {
        var event = $('#event').val();
        var description = $('#description').val();
        var selectedDate = $('#eventModalLabel').text().replace('Add Event - ', '');

        // Perform your desired action with the event, description, and selectedDate values
        var upcomingEvent = {
          date: selectedDate,
          event: event,
          description: description
        };

        // Save the event in an array or any other desired data structure
        // For this example, we will use an array called 'events'
        events.push(upcomingEvent);

        // Sort the events based on their dates
        events.sort(function(a, b) {
          var dateA = new Date(a.date);
          var dateB = new Date(b.date);
          return dateA - dateB;
        });

        // Update the upcoming events list
        updateUpcomingEvents();

        // Clear the input fields
        $('#event').val('');
        $('#description').val('');

        // Hide the modal
        $('#eventModal').modal('hide');
      });
    });

    var events = []; // Array to store the events

    function generateCalendar(month, year) {
      var currentDate = new Date();
      var currentMonth = currentDate.getMonth();
      var currentYear = currentDate.getFullYear();
      var currentDay = currentDate.getDate();

      var monthNames = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
      ];

      $('#currentMonthYear').text(monthNames[month] + ' ' + year);

      var calendarBody = $('#calendarBody');
      calendarBody.empty();

      var firstDay = new Date(year, month, 1);
      var lastDay = new Date(year, month + 1, 0);
      var numDays = lastDay.getDate();

      var dayOfWeek = firstDay.getDay();
      var currentRow = $('<tr>');

      // Add empty cells for previous month days
      for (var i = 0; i < dayOfWeek; i++) {
        currentRow.append('<td></td>');
      }

      // Generate cells for current month days
      for (var day = 1; day <= numDays; day++) {
        var cell = $('<td><button class="btn btn-link" data-toggle="modal" data-target="#eventModal">' + day + '</button></td>');

        if (month === currentMonth && year === currentYear && day === currentDay) {
          cell.addClass('current-day');
        }

        cell.find('button').click(function() {
          var clickedDay = $(this).text();
          $('#eventModalLabel').text('Add Event - ' + (month + 1) + '/' + clickedDay + '/' + year);
        });

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
        var upcomingEvent = event.date + ': ' + event.event + ' - ' + event.description;
        eventList.append('<li>' + upcomingEvent + '</li>');
      }
    }
  </script>
</body>
</html>
