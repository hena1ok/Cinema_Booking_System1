document.addEventListener('DOMContentLoaded', () => {
    const seatArrangement = document.querySelector('.seat__arrangement');

    seatArrangement.addEventListener('click', (event) => {
        if (event.target.classList.contains('available__seat')) {
            event.target.classList.toggle('selected__seat');
        }
    });

    document.querySelectorAll('.book__button').forEach(button => {
        button.addEventListener('click', () => {
            const scheduleId = button.dataset.scheduleId;
            const selectedSeats = document.querySelectorAll('.selected__seat');
            const seatNumbers = Array.from(selectedSeats).map(seat => seat.dataset.seatNumber);

            fetch('book_seat.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ scheduleId, seatNumbers })
            }).then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Seats booked successfully');
                    } else {
                        alert('Failed to book seats');
                    }
                });
        });
    });
});
