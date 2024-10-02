<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Appointment Booking</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .calendar {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-bottom: 10px;
        }

        .calendar-days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            text-align: center;
        }

        .day {
            font-weight: bold;
            padding: 10px;
            background: #f0f0f0;
        }

        .calendar-dates {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
        }

        .date {
            padding: 15px;
            text-align: center;
            cursor: pointer;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .date:hover:not(.past):not(.fully-booked) {
            background: #e0e0e0;
        }

        .selected {
            background: #5cb85c;
            color: white;
        }

        .fully-booked {
            background: #d9534f; /* Red for fully booked dates */
            color: white; /* Change text color for visibility */
            pointer-events: none; /* Make it unclickable */
        }

        .past {
            color: red;
            pointer-events: none; /* Makes the past date unclickable */
            background: #f0f0f0; /* Light background for past dates */
        }

        button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background-color: #5cb85c;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }

        button:hover {
            background-color: #4cae4c;
        }

        .response {
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
        }

        .booked-list {
            list-style-type: none;
            padding: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Book a Doctor Appointment</h1>

        <div class="calendar">
            <div class="calendar-header">
                <button id="prevMonth">❮</button>
                <h2 id="monthYear"></h2>
                <button id="nextMonth">❯</button>
            </div>
            <div class="calendar-days">
                <div class="day">Sun</div>
                <div class="day">Mon</div>
                <div class="day">Tue</div>
                <div class="day">Wed</div>
                <div class="day">Thu</div>
                <div class="day">Fri</div>
                <div class="day">Sat</div>
            </div>
            <div id="calendarDates" class="calendar-dates"></div>
        </div>

        <label for="time">Select Time:</label>
        <select id="time" name="time" required>
            <option value="">--Choose a Time Slot--</option>
        </select>
        <button id="bookAppointment">Book Appointment</button>
        <div id="response" class="response"></div>

        <h2>Booked Appointments</h2>
        <ul id="bookedList" class="booked-list"></ul>
    </div>

    <script>
//         let currentDate = new Date();
//         const bookedAppointments = [];

//         // Time slots available for booking
//         const availableSlots = ["09:00", "10:00", "11:00", "13:00", "14:00", "15:00","16:00"];

//         function renderCalendar() {
//             const monthYear = document.getElementById('monthYear');
//             const calendarDates = document.getElementById('calendarDates');

//             monthYear.innerText = `${currentDate.toLocaleString('default', { month: 'long' })} ${currentDate.getFullYear()}`;
//             calendarDates.innerHTML = ''; // Clear previous dates

//             const firstDay = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1).getDay();
//             const totalDays = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0).getDate();

//             for (let i = 0; i < firstDay; i++) {
//                 calendarDates.innerHTML += `<div class="date"></div>`; // Empty divs for the days before
//             }

//             for (let day = 1; day <= totalDays; day++) {
//                 const dateElement = document.createElement('div');
//                 const dateString = `${currentDate.getFullYear()}-${currentDate.getMonth() + 1}-${day}`;
//                 const isPast = isPastDate(day);

//                 // Check if the date is booked
//                 const bookedSlots = bookedAppointments.filter(appointment => appointment.date === dateString);
//                 const isFullyBooked = bookedSlots.length === availableSlots.length;

//                 dateElement.className = `date ${isFullyBooked ? 'fully-booked' : ''} ${isPast ? 'past' : ''}`;
//                 dateElement.innerText = day;

//                 if (!isPast && !isFullyBooked) {
//                     dateElement.onclick = () => selectDate(day);
//                 }

//                 calendarDates.appendChild(dateElement);
//             }

//             populateTimeSlots();
//         }

//         function isPastDate(day) {
//             const selectedDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), day);
//             return selectedDate < new Date(); // Check if the date is in the past
//         }

//         function selectDate(day) {
//             const selectedDate = document.querySelectorAll('.date');
//             selectedDate.forEach(date => date.classList.remove('selected'));

//             const dayElement = selectedDate[day + new Date(currentDate.getFullYear(), currentDate.getMonth(), 1).getDay() - 1];
//             dayElement.classList.add('selected');

//             document.getElementById('response').innerText = '';
//             populateTimeSlots();
//         }

//         function populateTimeSlots() {
//             const timeSelect = document.getElementById('time');
//             timeSelect.innerHTML = '<option value="">--Choose a Time Slot--</option>';

//             const selectedDate = document.querySelector('.date.selected');
//             if (selectedDate) {
//                 const dateString = `${currentDate.getFullYear()}-${currentDate.getMonth() + 1}-${selectedDate.innerText}`;
//                 const bookedSlots = bookedAppointments.filter(appointment => appointment.date === dateString);

//                 availableSlots.forEach(slot => {
//                     const isBooked = bookedSlots.some(appointment => appointment.time === slot);
//                     if (!isBooked) {
//                         timeSelect.innerHTML += `<option value="${slot}">${slot}</option>`;
//                     }
//                 });
//             }
//         }

//         document.getElementById('prevMonth').onclick = function() {
//             currentDate.setMonth(currentDate.getMonth() - 1);
//             renderCalendar();
//         };

//         document.getElementById('nextMonth').onclick = function() {
//             currentDate.setMonth(currentDate.getMonth() + 1);
//             renderCalendar();
//         };

//         document.getElementById('bookAppointment').onclick = function() {
//             const dateElements = document.querySelectorAll('.date.selected');
//             const time = document.getElementById('time').value;

//             if (dateElements.length > 0 && time) {
//                 const selectedDay = dateElements[0].innerText;
//                 const month = currentDate.getMonth() + 1; // Months are 0-indexed
//                 const year = currentDate.getFullYear();

//                 const appointmentDate = `${year}-${month}-${selectedDay}`;

//                 // Add to booked appointments with a default doctor name
//                 bookedAppointments.push({ doctor: 'General Practitioner', date: appointmentDate, time });

//                 document.getElementById('response').innerText = `Appointment booked on ${month}/${selectedDay}/${year} at ${time}.`;
//                 document.getElementById('response').style.color = 'green';

//                 // Render booked list
//                 renderBookedList();

//                 // Render calendar again to update booked dates
//                 renderCalendar();
//             } else {
//                 document.getElementById('response').innerText = 'Please fill in all fields.';
//                 document.getElementById('response').style.color = 'red';
//             }
//         };

//         function renderBookedList() {
//             const bookedList = document.getElementById('bookedList');
//             bookedList.innerHTML = '';

//             bookedAppointments.forEach(appointment => {
//                 const li = document.createElement('li');
//                 li.innerText = ` ${appointment.date} at ${appointment.time}`;
//                 bookedList.appendChild(li);
//             });
//         }

//         document.getElementById('bookAppointment').onclick = function() {
//     const dateElements = document.querySelectorAll('.date.selected');
//     const time = document.getElementById('time').value;

//     if (dateElements.length > 0 && time) {
//         const selectedDay = dateElements[0].innerText;
//         const month = currentDate.getMonth() + 1; // Months are 0-indexed
//         const year = currentDate.getFullYear();

//         const appointmentDate = `${year}-${month}-${selectedDay}`;
//         const doctorName = 'General Practitioner'; // You can make this dynamic

//         // Send appointment data to the server
//         fetch('/appointments', {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json',
//                 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//             },
//             body: JSON.stringify({ doctor: doctorName, date: appointmentDate, time: time })
//         })
//         .then(response => response.json())
//         .then(data => {
//             document.getElementById('response').innerText = data.message;
//             document.getElementById('response').style.color = 'green';
//             renderBookedList(); // Optionally refresh the booked list
//             renderCalendar(); // Refresh calendar to update booked dates
//         })
//         .catch(error => {
//             console.error('Error:', error);
//             document.getElementById('response').innerText = 'Failed to book appointment.';
//             document.getElementById('response').style.color = 'red';
//         });
//     } else {
//         document.getElementById('response').innerText = 'Please fill in all fields.';
//         document.getElementById('response').style.color = 'red';
//     }
// };

//         // Initial rendering of the calendar
//         renderCalendar();



let currentDate = new Date();
const bookedAppointments = [];

// Time slots available for booking
const availableSlots = ["09:00", "10:00", "11:00", "13:00", "14:00", "15:00", "16:00"];

function renderCalendar() {
    const monthYear = document.getElementById('monthYear');
    const calendarDates = document.getElementById('calendarDates');

    monthYear.innerText = `${currentDate.toLocaleString('default', { month: 'long' })} ${currentDate.getFullYear()}`;
    calendarDates.innerHTML = ''; // Clear previous dates

    const firstDay = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1).getDay();
    const totalDays = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0).getDate();

    for (let i = 0; i < firstDay; i++) {
        calendarDates.innerHTML += `<div class="date"></div>`; // Empty divs for the days before
    }

    for (let day = 1; day <= totalDays; day++) {
        const dateElement = document.createElement('div');
        const dateString = `${currentDate.getFullYear()}-${currentDate.getMonth() + 1}-${day}`;
        const isPast = isPastDate(day);

        // Check if the date is booked
        const bookedSlots = bookedAppointments.filter(appointment => appointment.date === dateString);
        const isFullyBooked = bookedSlots.length === availableSlots.length;

        dateElement.className = `date ${isFullyBooked ? 'fully-booked' : ''} ${isPast ? 'past' : ''}`;
        dateElement.innerText = day;

        if (!isPast && !isFullyBooked) {
            dateElement.onclick = () => selectDate(day);
        }

        calendarDates.appendChild(dateElement);
    }

    populateTimeSlots();
}

function isPastDate(day) {
    const selectedDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), day);
    return selectedDate < new Date(); // Check if the date is in the past
}

function selectDate(day) {
    const selectedDate = document.querySelectorAll('.date');
    selectedDate.forEach(date => date.classList.remove('selected'));

    const dayElement = selectedDate[day + new Date(currentDate.getFullYear(), currentDate.getMonth(), 1).getDay() - 1];
    dayElement.classList.add('selected');

    document.getElementById('response').innerText = '';
    populateTimeSlots();
}

function populateTimeSlots() {
    const timeSelect = document.getElementById('time');
    timeSelect.innerHTML = '<option value="">--Choose a Time Slot--</option>';

    const selectedDate = document.querySelector('.date.selected');
    if (selectedDate) {
        const dateString = `${currentDate.getFullYear()}-${currentDate.getMonth() + 1}-${selectedDate.innerText}`;
        const bookedSlots = bookedAppointments.filter(appointment => appointment.date === dateString);

        availableSlots.forEach(slot => {
            const isBooked = bookedSlots.some(appointment => appointment.time === slot);
            if (!isBooked) {
                timeSelect.innerHTML += `<option value="${slot}">${slot}</option>`;
            }
        });
    }
}

document.getElementById('prevMonth').onclick = function() {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar();
};

document.getElementById('nextMonth').onclick = function() {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar();
};document.getElementById('bookAppointment').onclick = function() {
    const dateElements = document.querySelectorAll('.date.selected');
    const time = document.getElementById('time').value;

    if (dateElements.length > 0 && time) {
        const selectedDay = dateElements[0].innerText;
        const month = currentDate.getMonth() + 1; // Months are 0-indexed
        const year = currentDate.getFullYear();

        const appointmentDate = `${year}-${month}-${selectedDay}`;

        // Send appointment data to the server
        fetch('/appointments', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ date: appointmentDate, time: time })
        })
        .then(response => response.json())
        .then(data => {
            if (data.message) {
                // Store appointment details in local storage
                localStorage.setItem('appointmentDetails', JSON.stringify({
                    date: appointmentDate,
                    time: time
                }));

                // Redirect to billing page
                window.location.href = '/billing';
            }
        })
        .catch(error => {
            console.error('Error:', error);
            document.getElementById('response').innerText = 'Failed to book appointment.';
            document.getElementById('response').style.color = 'red';
        });
    } else {
        document.getElementById('response').innerText = 'Please fill in all fields.';
        document.getElementById('response').style.color = 'red';
    }
};


function renderBookedList() {
    const bookedList = document.getElementById('bookedList');
    bookedList.innerHTML = '';

    bookedAppointments.forEach(appointment => {
        const li = document.createElement('li');
        li.innerText = `${appointment.date} at ${appointment.time}`;
        bookedList.appendChild(li);
    });
}

// Initial rendering of the calendar
renderCalendar();


    </script>
</body>
</html>
