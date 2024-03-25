let editorValue;
document.addEventListener("DOMContentLoaded", function () {
    if (document.getElementById("editor")) {
        ClassicEditor.create(document.querySelector("#editor"), {})
            .then((editor) => {
                editor.model.document.on("change:data", () => {
                    editorValue = editor.getData();
                    if (title) {
                        updateButtonColor();
                    }
                });
            })
            .catch((error) => {
                console.error(error);
            });
    }
});
const fileInput = document.getElementById("image");
const imageButton = document.getElementById("imageButton");

if (fileInput) {
    fileInput.addEventListener("change", function () {
        // Check if file is selected
        if (fileInput.files.length > 0) {
            // Set button style to green
            imageButton.classList.remove("blue-button");
            imageButton.classList.add("green-button");
            imageButton.textContent = "Selected";
        } else {
            // Set button style to red
            imageButton.classList.remove("green-button");
            imageButton.classList.add("blue-button");
            imageButton.textContent = "Choose";
        }
    });
}
if (imageButton) {
    imageButton.addEventListener("click", function () {
        fileInput.click();
    });
}
const errorField = document.getElementsByClassName("error-field")[0];
const galleryForm = document.getElementById("galleryForm");
const imageInput = document.getElementById("image");
const uploadButton = document.getElementById("uploadButton");
if (imageInput) {
    imageInput.addEventListener("change", function () {
        if (imageInput.files.length > 0) {
            // If a file is selected, change the style of the Upload Image button to green
            uploadButton.classList.remove("red-button");
            uploadButton.classList.add("green-button");
            errorField.style.display = "none";
        } else {
            // If no file is selected, revert the style of the Upload Image button to red
            uploadButton.classList.remove("green-button");
            uploadButton.classList.add("red-button");
        }
    });
}
if (galleryForm) {
    galleryForm.addEventListener("submit", function (event) {
        if (imageInput.files.length === 0) {
            // If no file is selected, prevent form submission
            event.preventDefault();
            errorField.style.display = "block";
            errorField.textContent = "Please select an image to upload";
        } else {
            errorField.textContent = "";
        }
    });
}

const title = document.getElementById("title");
const shortContent = document.getElementById("short_content");
const editor = document.getElementById("editor");
const submitButton = document.getElementById("submit-button");
if (title) {
    title.addEventListener("input", updateButtonColor);
}
if (shortContent) {
    shortContent.addEventListener("input", updateButtonColor);
}

function updateButtonColor() {
    console.log(editorValue);
    if (title.value && shortContent.value && editorValue !== "") {
        submitButton.classList.remove("red-button");
        submitButton.classList.add("green-button");
    } else {
        submitButton.classList.remove("green-button");
        submitButton.classList.add("red-button");
    }
}

const documentButton = document.getElementById("documentButton");
const documentInput = document.getElementById("document");
if (documentInput) {
    documentInput.addEventListener("change", () => {
        console.log(documentInput);
        if (documentInput.files.length > 0) {
            documentButton.classList.remove("red-button");
            documentButton.classList.add("green-button");
            documentButton.textContent = "Selected";
            if (document.getElementById("name")) {
                submitButtonChange();
            }
        } else {
            documentButton.classList.remove("green-button");
            documentButton.classList.add("red-button");
            documentButton.textContent = "Choose document";
        }
    });
}
if (documentButton) {
    documentButton.addEventListener("click", () => {
        documentInput.click();
    });
}
const nameErasmus = document.getElementById("name");
const startYear = document.getElementById("start_date");
const endYear = document.getElementById("end_date");

if (nameErasmus && startYear && endYear) {
    nameErasmus.addEventListener("input", submitButtonChange);
    startYear.addEventListener("input", submitButtonChange);
    endYear.addEventListener("input", submitButtonChange);
}
function submitButtonChange() {
    if (
        document.getElementById("editMode") &&
        document.getElementById("name")
    ) {
        console.log(true);
        console.log(nameErasmus.value);
        console.log(startYear.value);
        console.log(endYear.value);
        console.log(documentInput.files.length);
        if (nameErasmus.value && startYear.value && endYear.value !== "") {
            submitButton.classList.remove("red-button");
            submitButton.classList.add("green-button");
        } else {
            submitButton.classList.remove("green-button");
            submitButton.classList.add("red-button");
        }
    } else {
        if (
            nameErasmus.value &&
            startYear.value &&
            endYear.value !== "" &&
            documentInput.files.length > 0
        ) {
            submitButton.classList.remove("red-button");
            submitButton.classList.add("green-button");
        } else {
            submitButton.classList.remove("green-button");
            submitButton.classList.add("red-button");
        }
    }
}
const documentTitle = document.getElementById("documents-title");
const documentFile = document.getElementById("document");
const documentCategory = document.getElementsByClassName("category")[0];
const documentYear = document.getElementById("year");
const documentEndYear = document.getElementById("end_year");
const submitDocumentsButton = document.getElementById("submit-documents");
if ((documentTitle, documentFile, documentCategory, documentYear)) {
    documentTitle.addEventListener("input", submitDocuments);
    documentFile.addEventListener("input", submitDocuments);
    documentCategory.addEventListener("input", submitDocuments);
    documentYear.addEventListener("input", () => {
        submitDocuments();
        endYearOptions();
    });
}

function submitDocuments() {
    if (
        document.getElementById("editMode") &&
        document.getElementById("documents-title")
    ) {
        if (
            documentTitle.value &&
            documentCategory.value &&
            documentYear.value !== "" &&
            documentFile.files.length >= 0
        ) {
            submitDocumentsButton.classList.remove("red-button");
            submitDocumentsButton.classList.add("green-button");
        } else {
            submitDocumentsButton.classList.remove("green-button");
            submitDocumentsButton.classList.add("red-button");
        }
    } else {
        if (
            documentTitle.value &&
            documentCategory.value &&
            documentYear.value !== "" &&
            documentFile.files.length > 0
        ) {
            console.log(documentTitle.value);
            console.log(documentCategory.value);
            console.log(documentYear.value);
            console.log(documentEndYear.value);
            submitDocumentsButton.classList.remove("red-button");
            submitDocumentsButton.classList.add("green-button");
        } else {
            submitDocumentsButton.classList.remove("green-button");
            submitDocumentsButton.classList.add("red-button");
        }
    }
}
function endYearOptions() {
    let startYear = parseInt(documentYear.value);
    if (document.getElementById("editMode")) {
        console.log(documentEndYear.value);
        let endYear = documentEndYear.value;
        documentEndYear.innerHTML = "<option value=''>Select year</option>";
        for (let year = startYear + 1; year <= 2030; year++) {
            let option = document.createElement("option");
            option.value = year;
            option.textContent = year;
            if (year == endYear) {
                // Check if current year matches the desired year
                option.selected = true; // Set the 'selected' attribute
            }
            documentEndYear.appendChild(option);
        }
    } else {
        documentEndYear.innerHTML = "<option value=''>Select year</option>";
        for (let year = startYear + 1; year <= 2030; year++) {
            let option = document.createElement("option");
            option.value = year;
            option.textContent = year;
            documentEndYear.appendChild(option);
        }
    }
}
