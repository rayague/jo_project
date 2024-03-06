<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/css/pack.css') }}">

   <!-- Assurez-vous que jQuery est chargé avant FullCalendar -->
   <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha512-5+ZrrJcyx0S/SNb/zqfMGL6eiJz7HHadzTZPz2Nb2uY6U6V6iDw8nIzGxe3z6naJ1sNhP+2zg7JlG7FZ0MS4TA==" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-k2ATUhrFtJ+gx0p7aajr9hAm1bSmkNUqO2+C/AMUfQTtR5LV6tP2stI/Di0DdIq0shWvYci2S8R8n7Cwv49D9w==" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" integrity="sha512-WzLzMSXBU5X+r+n7L7O5xKqQBUbxo9e/g8X4bVJBSEDSiI6f+CcmFqlgN1R7e1ZjfylOtp6f/06DRnlJeZFYrg==" crossorigin="anonymous" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js" integrity="sha512-2yE9FJ9z2FUZw9lIBpiqjtP9w09sWzix4/OpB5UdITCR6a/NdN4HwrKhp+Q8UTVIj39v6wL5GRLx3R6JcT7+bA==" crossorigin="anonymous"></script>
    <title>Le Digital Master</title>
</head>
<body class="bg-light mb-4">

    <!-- Main wrapper for the calendar application -->
    <div class="wrapper mt-4">
            @if(session('message'))
                <div class=" container mx-auto alert alert-info">
                    {{ session('message') }}
                </div>
            @endif
            <div class="container-calendar">
                <div id="left">
                    <h1>Prendre un Rendez-vous</h1>
                    <div id="event-section">
                        <form action="{{ route('sendNotificationsAdmin') }}" method="POST">
                            @csrf
                        <h3>Ajouter un rendez-vous</h3>
                        <input type="date" id="eventDate"
                        name="rdv_date">
                        <input type="text"
                            id="eventTitle"
                            name="rdv_hour"
                            placeholder="Quelle heure choisissez-vous">
                        <input type="text"
                            id="eventDescription"
                            name="rdv_description"
                            placeholder="A propos de votre rendez-vous">
                        <button type="submit">
                            Envoyer
                        </button>
                    </form>
                    </div>
                    <div id="reminder-section container-fluid">
                        <h3 >Recap</h3>
                        <a href="{{ route('client') }}" class="btn btn-secondary m-4" >Dashbord</a>

                        <!-- List to display reminders -->
                        @foreach ( $rdvs as $rdvs)

                        <ul class="container-fluid bg-gray-50 text-light" >
                            <li data-event-id="1" class="container bg-secondary rounded-3 p-4   ">

                                <h3 class="text-light fw-bolder fs-4">Voici votre date</h3>
                                <strong class="text-warning fs-5" >{{ $rdvs->rdv_date }}</strong> <br>
                                 <span class="fs-bold fs-5">{{ $rdvs->rdv_hour }}</span> <br>
                                <span class="fs-5">{{ $rdvs->rdv_description }}</span> <br>

                                <form action="{{ route('deleteSendNotificationsAdmin', ['id' => $rdvs->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <!-- Votre formulaire -->
                                    <button class="delete-event" type="submit">Supprimer</button>
                                </form>
                        </li>
                    </ul>
                    @endforeach
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
                        <label for="month">Aller à: </label>
                        <!-- Dropdowns to select a specific month and year -->
                        <select id="month" onchange="jump()">
                            <option value=0>Jan</option>
                            <option value=1>Feb</option>
                            <option value=2>Mar</option>
                            <option value=3>Avr</option>
                            <option value=4>Mai</option>
                            <option value=5>Juin</option>
                            <option value=6>Jul</option>
                            <option value=7>Ao</option>
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
