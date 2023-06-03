/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content */
var dropdown = document.getElementsByClassName("dropdown-btn");
var dropdown2 = document.getElementsByClassName("dropdown-btn-two");

var i;

// Dropdown one
for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;

        if (dropdownContent.style.display === "flex") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "flex";
        }
    });
}

// Dropdown two
for (i = 0; i < dropdown2.length; i++) {
    dropdown2[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdown2Content = this.nextElementSibling;

        if (dropdown2Content.style.display === "block") {
            dropdown2Content.style.display = "none";
        } else {
            dropdown2Content.style.display = "block";
        }
    });
}