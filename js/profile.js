document.addEventListener("DOMContentLoaded", function() {
    const registerPetBtn = document.getElementById("registerPetBtn");
    const formContent = document.querySelector(".form-content");
    const addMoreLink = document.querySelector(".add-more");

    registerPetBtn.addEventListener("click", function() {
        formContent.style.display = "block"; // Show the form
    });

    addMoreLink.addEventListener("click", function(event) {
        event.preventDefault(); // Prevent default link behavior
        // Code to add more input fields or perform other actions when "Add more" is clicked
    });
});
