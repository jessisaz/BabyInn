<?php
include_once 'header.php';
?>

<section class="main_section">
  <p><br><br></p>
  <h2 class="section_header"> Make Appointment Now! </h2>

  
  <head>
    <meta charset="UTF-8">
    <style>
      table {
        border-collapse: collapse;
      }

      th,
      td {
        padding: 10px;
        text-align: center;
        border: 1px solid black;
      }

      th {
        background-color: rgb(241, 189, 202);
      }

      .selected {
        background-color: #8F1E3F;
        color: white;
      }

      .disabled {
        background-color: lightgray;
        color: white;
        pointer-events: none;
      }
    </style>
  </head>

  <body>
    <p>Select a date and time:</p>
    <table>
      <tr>
        <th colspan="7">
          <input type="month" id="monthPicker" onchange="renderCalendar()">
        </th>
      </tr>
      <tr>
        <th>Sun</th>
        <th>Mon</th>
        <th>Tue</th>
        <th>Wed</th>
        <th>Thu</th>
        <th>Fri</th>
        <th>Sat</th>
      </tr>
      <tbody id="calendarBody"></tbody>
    </table>
    <script>
      function renderCalendar() {
        const monthPicker = document.getElementById('monthPicker');
        const selectedMonth = new Date(monthPicker.value);
        const calendarBody = document.getElementById('calendarBody');
        calendarBody.innerHTML = '';

        const daysInMonth = new Date(selectedMonth.getFullYear(), selectedMonth.getMonth() + 1, 0).getDate();
        const firstDayOfMonth = new Date(selectedMonth.getFullYear(), selectedMonth.getMonth(), 1).getDay();

        let row = document.createElement('tr');
        for (let i = 0; i < firstDayOfMonth; i++) {
          row.appendChild(document.createElement('td'));
        }
        for (let i = 1; i <= daysInMonth; i++) {
          const cell = document.createElement('td');
          cell.innerHTML = i;
          const currentDate = new Date(selectedMonth.getFullYear(), selectedMonth.getMonth(), i);
          if (isDateDisabled(currentDate)) {
            cell.classList.add('disabled');
          } else {
            cell.onclick = function() {
              const selectedCells = document.querySelectorAll('.selected');
              for (let i = 0; i < selectedCells.length; i++) {
                selectedCells[i].classList.remove('selected');
              }
              cell.classList.add('selected');
            };
          }
          row.appendChild(cell);
          if ((i + firstDayOfMonth - 1) % 7 === 6 || i === daysInMonth) {
            calendarBody.appendChild(row);
            row = document.createElement('tr');
          }
        }
      }

      function isDateDisabled(date) {
        // Example: disable weekends and dates before today
        return date < new Date();
      }

      renderCalendar();
    </script>
  </body>

  <head>
    <meta charset="UTF-8">
  </head>

  <body>
    <div>
      <select id="hourPicker"></select>
      <input type="time" id="timePicker">
    </div>
    <script>
      const hourPicker = document.getElementById('hourPicker');
      const timePicker = document.getElementById('timePicker');

      for (let i = 0; i < 24; i++) {
        const option = document.createElement('option');
        option.value = i.toString().padStart(2, '0') + ':00';
        option.textContent = i.toString().padStart(2, '0') + ':00';
        hourPicker.appendChild(option);
      }

      hourPicker.onchange = function() {
        timePicker.value = hourPicker.value;
      };

      timePicker.onchange = function() {
        hourPicker.value = timePicker.value.substr(0, 5);
      };
    </script>
  </body>

  <p> Implementing test </p>
</section>


<?php
    include_once 'footer.php';
?>