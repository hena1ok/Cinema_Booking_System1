// booking.js

document.addEventListener('DOMContentLoaded', function () {
    const seats = document.querySelectorAll('.seat');
    const errorText = document.querySelector('.errorText');

    seats.forEach(seat => {
        seat.addEventListener('click', function () {
            if (!this.classList.contains('seatBooked')) {
                this.classList.toggle('seatSelected');
            } else {
                errorText.textContent = "This seat is already booked.";
            }
        });
    });

    const bookButtons = document.querySelectorAll('.book__button');
    bookButtons.forEach(button => {
        button.addEventListener('click', function () {
            const selectedSeats = document.querySelectorAll('.seatSelected');
            if (selectedSeats.length === 0) {
                errorText.textContent = "Please select at least one seat.";
                return;
            }

            const seatIds = Array.from(selectedSeats).map(seat => seat.getAttribute('id').substring(1));
            const scheduleId = this.getAttribute('data-schedule-id');

            fetch('../CRUD/bookSeats.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    schedule_id: scheduleId,
                    seats: seatIds,
                }),
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        selectedSeats.forEach(seat => {
                            seat.classList.remove('seatSelected');
                            seat.classList.add('seatBooked');
                        });
                        errorText.textContent = "Seats successfully booked.";
                    } else {
                        errorText.textContent = "There was an error booking the seats. Please try again.";
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    errorText.textContent = "There was an error booking the seats. Please try again.";
                });
        });
    });
});
