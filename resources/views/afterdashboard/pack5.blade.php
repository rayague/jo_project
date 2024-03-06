<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/css/pack.css') }}">

   <!-- Assurez-vous que jQuery est chargé avant FullCalendar -->
   <script defer src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha512-5+ZrrJcyx0S/SNb/zqfMGL6eiJz7HHadzTZPz2Nb2uY6U6V6iDw8nIzGxe3z6naJ1sNhP+2zg7JlG7FZ0MS4TA==" crossorigin="anonymous"></script>
   <script defer src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-k2ATUhrFtJ+gx0p7aajr9hAm1bSmkNUqO2+C/AMUfQTtR5LV6tP2stI/Di0DdIq0shWvYci2S8R8n7Cwv49D9w==" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" integrity="sha512-WzLzMSXBU5X+r+n7L7O5xKqQBUbxo9e/g8X4bVJBSEDSiI6f+CcmFqlgN1R7e1ZjfylOtp6f/06DRnlJeZFYrg==" crossorigin="anonymous" />
   <script defer src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js" integrity="sha512-2yE9FJ9z2FUZw9lIBpiqjtP9w09sWzix4/OpB5UdITCR6a/NdN4HwrKhp+Q8UTVIj39v6wL5GRLx3R6JcT7+bA==" crossorigin="anonymous"></script>
    <title>Le Digital Master</title>
</head>
<body class="bg-light mb-4">
        <!-- Main wrapper for the calendar application -->
        <div class="wrapper mt-5">
            <div class="container-calendar">
                <div id="left">
                    <h1>Dynamic Calendar</h1>
                    <div id="event-section">
                        <h3>Add Event</h3>
                        <input type="date" id="eventDate">
                        <input type="text"
                            id="eventTitle"
                            placeholder="Event Title">
                        <input type="text"
                            id="eventDescription"
                            placeholder="Event Description">
                        <button id="addEvent" onclick="addEvent()">
                            Add
                        </button>
                    </div>
                    <div id="reminder-section">
                        <h3>Reminders</h3>
                        <!-- List to display reminders -->
                        <ul id="reminderList">
                            <li data-event-id="1">
                                <strong>Event Title</strong>
                                - Event Description on Event Date
                                <button class="delete-event"
                                    onclick="deleteEvent(1)">
                                    Delete
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="right">
                    <h3 id="monthAndYear"></h3>
                    <div class="button-container-calendar">
                        <button id="previous"
                                onclick="previous()">
                            ‹
                        </button>
                        <button id="next"
                                onclick="next()">
                            ›
                        </button>
                    </div>
                    <table class="table-calendar"
                        id="calendar"
                        data-lang="en">
                        <thead id="thead-month"></thead>
                        <!-- Table body for displaying the calendar -->
                        <tbody id="calendar-body"></tbody>
                    </table>
                    <div class="footer-container-calendar">
                        <label for="month">Jump To: </label>
                        <!-- Dropdowns to select a specific month and year -->
                        <select id="month" onchange="jump()">
                            <option value=0>Jan</option>
                            <option value=1>Feb</option>
                            <option value=2>Mar</option>
                            <option value=3>Apr</option>
                            <option value=4>May</option>
                            <option value=5>Jun</option>
                            <option value=6>Jul</option>
                            <option value=7>Aug</option>
                            <option value=8>Sep</option>
                            <option value=9>Oct</option>
                            <option value=10>Nov</option>
                            <option value=11>Dec</option>
                        </select>
                        <!-- Dropdown to select a specific year -->
                        <select id="year" onchange="jump()"></select>
                    </div>
                </div>
            </div>
        </div>
        <!-- Include the JavaScript file for the calendar functionality -->
        <script src="{{ asset('assets/js/calendarPacK.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
