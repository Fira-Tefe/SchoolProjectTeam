
// Get the modal
var modal = document.getElementById("myModal");

// Get the link that opens the modal
var link = document.getElementById("techInfo");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the link, open the modal 
link.onclick = function(event) {
    event.preventDefault();
    fetch('Tech.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById("modalBody").innerHTML = data;
            modal.style.display = "block";
        });
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
