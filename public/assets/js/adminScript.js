let subCategory = document.getElementById("subCategory");
subCategory.style.display = "none";

let year = document.getElementsByClassName("year");
let checkbox = document.getElementsByClassName("doubleYear");
let doubleYear = document.getElementById("doubleYear");
doubleYear.style.display = "none";

function openDoubleYear() {
    if (doubleYear.style.display === "none") {
        doubleYear.style.display = "block";
        year.style.display = "none";
    } else {
        doubleYear.style.display = "none";
        year.style.display = "block";
    }
}

document.addEventListener("DOMContentLoaded", function () {
    // Event delegation - Listening for change events on a parent element
    document.addEventListener("change", function (event) {
        var target = event.target;
        if (target && target.classList.contains("category")) {
            if (target.value == 1) {
                subCategory.style.display = "block";
            } else {
                subCategory.style.display = "none";
            }
        }
    });
});
