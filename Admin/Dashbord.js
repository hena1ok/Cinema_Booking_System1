const Addmvs = document.querySelector(".btnM");
const Edmvs = document.querySelector(".btnEm");
const Delmvs = document.querySelector(".btnDm");
const Addsch = document.querySelector(".btnS");
const Edsch = document.querySelector(".btnEs");
const Delsch = document.querySelector(".btnDs");
const Viewtkt = document.querySelector(".btnT");
const Canseltkt = document.querySelector(".btnCt");
const Addusr = document.querySelector(".btnU");
const Edusr = document.querySelector(".btnEu");
const Delusr = document.querySelector(".btnDu");
const btns = document.querySelectorAll(".btn");
btns.forEach(a => {
    a.addEventListener('click', () => {
        if (a.classList.contains('btnM')) {
            header("location: ./Movies/Create.php")  ;
        } else if (a.classList.contains('btnEm')) {
            header("location: ./Movies/Update.php");

        } else if (a.classList.contains('btnDm')) {
            header("location: ./Movies/Delte.php");
           
        }
    }

    )
});