/* Opening the modal */ 



/* 1. Creating a variable toggle corresponding to the element with class 'openModalBtn' within the document */
var toggle = document.getElementsByClassName('openModalBtn')[0];
var modal = document.getElementById('modal');
/* 2. Defining a function named openModal, to write instructions that should run on clicking the element toggle */
function openModal() {
  
  modal.style.display = "grid";
}

/* 3. Attach the function to the element toggles on click event */
/* jquery */
/*
    $('.openModalBtn').on('click', openModal);
*/

toggle.onclick = openModal;

/* Closing the modal */ 

/* 1. Creating a variable closeModalBtn corresponding to the element with ID 'closeModalBtn' within the document */
var closeModalBtn = document.getElementById('closeModalBtn');

/* 2. Defining a function named closeModal, to write instructions that sould run on clicking the element closeModalBtn */

function closeModal() {

  modal.style.display = "none";
}

/* 3. Attach the function to the element closeModalBtn on click event */

/* jquery */
/*$('#closeModalBtn').on('click', closeModal);*/

closeModalBtn.onclick = closeModal;
