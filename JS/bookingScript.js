let SignupButton = document.querySelector(".signInButton");
SignupButton.addEventListener('click', function () {
  window.location.href = "signupPage.html";
});

let seatsLeft = document.querySelector(".leftSide");
for (var i = 0; i < 63; i++) {
  let randint = Math.floor(Math.random() * 2);
  let booked = randint === 1 ? "booked" : "";
  seatsLeft.insertAdjacentHTML(
    "beforeend",
    '<svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48" class="seatImage" id="s'+
      (i + 2) +
      '" ><path d="M160-120v-220h640v220h-60v-160H220v160h-60Zm9.882-290Q149-410 134.5-424.618q-14.5-14.617-14.5-35.5Q120-481 134.618-495.5q14.617-14.5 35.5-14.5Q191-510 205.5-495.382q14.5 14.617 14.5 35.5Q220-439 205.382-424.5q-14.617 14.5-35.5 14.5ZM280-400v-380q0-24.75 17.625-42.375T340-840h280q24.75 0 42.375 17.625T680-780v380H280Zm509.882-10Q769-410 754.5-424.618q-14.5-14.617-14.5-35.5Q740-481 754.618-495.5q14.617-14.5 35.5-14.5Q811-510 825.5-495.382q14.5 14.617 14.5 35.5Q840-439 825.382-424.5q-14.617 14.5-35.5 14.5ZM340-460h280v-320H340v320Zm0 0h280-280Z"/></svg><label for="s' +
      (i + 2) +
      '" class="seat ' +
      booked +
      '"></label>'
  );
}

let seatsMiddle = document.querySelector(".middleSide");
for (var i = 0; i < 63; i++) {
  let randint = Math.floor(Math.random() * 2);
  let booked = randint === 1 ? "booked" : "";
  seatsMiddle.insertAdjacentHTML(
    "beforeend",
    '<svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48" class="seatImage" id="s'+
      (i + 2) +
      '" ><path d="M160-120v-220h640v220h-60v-160H220v160h-60Zm9.882-290Q149-410 134.5-424.618q-14.5-14.617-14.5-35.5Q120-481 134.618-495.5q14.617-14.5 35.5-14.5Q191-510 205.5-495.382q14.5 14.617 14.5 35.5Q220-439 205.382-424.5q-14.617 14.5-35.5 14.5ZM280-400v-380q0-24.75 17.625-42.375T340-840h280q24.75 0 42.375 17.625T680-780v380H280Zm509.882-10Q769-410 754.5-424.618q-14.5-14.617-14.5-35.5Q740-481 754.618-495.5q14.617-14.5 35.5-14.5Q811-510 825.5-495.382q14.5 14.617 14.5 35.5Q840-439 825.382-424.5q-14.617 14.5-35.5 14.5ZM340-460h280v-320H340v320Zm0 0h280-280Z"/></svg><label for="s' +
      (i + 2) +
      '" class="seat ' +
      booked +
      '"></label>'
  );
}
let seatsRight = document.querySelector(".rightSide");
for (var i = 0; i < 63; i++) {
  let randint = Math.floor(Math.random() * 2);
  let booked = randint === 1 ? "booked" : "";
  seatsRight.insertAdjacentHTML(
    "beforeend",
    '<svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48" class="seatImage" id="s'+
      (i + 2) +
      '" ><path d="M160-120v-220h640v220h-60v-160H220v160h-60Zm9.882-290Q149-410 134.5-424.618q-14.5-14.617-14.5-35.5Q120-481 134.618-495.5q14.617-14.5 35.5-14.5Q191-510 205.5-495.382q14.5 14.617 14.5 35.5Q220-439 205.382-424.5q-14.617 14.5-35.5 14.5ZM280-400v-380q0-24.75 17.625-42.375T340-840h280q24.75 0 42.375 17.625T680-780v380H280Zm509.882-10Q769-410 754.5-424.618q-14.5-14.617-14.5-35.5Q740-481 754.618-495.5q14.617-14.5 35.5-14.5Q811-510 825.5-495.382q14.5 14.617 14.5 35.5Q840-439 825.382-424.5q-14.617 14.5-35.5 14.5ZM340-460h280v-320H340v320Zm0 0h280-280Z"/></svg><label for="s' +
      (i + 2) +
      '" class="seat ' +
      booked +
      '"></label>'
  );
}

let seats = document.querySelectorAll(".seatImage");
seats.forEach((seat) => {
  seat.addEventListener("click", (e) => {
    seat.style.fill == "red"? (seat.style.fill = 'black') : (seat.style.fill = "red");
    seat.style.fill == "black"? seat.style.fill = '': ''
  });
});