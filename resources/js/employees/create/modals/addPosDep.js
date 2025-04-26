export function allAboutModals(modalId, openButton, closeButton, cancelButton) {
    const modal = document.getElementById(modalId);
    const openModalButton = document.getElementById(openButton);
    const closeModalButton = document.getElementById(closeButton);
    const cancelModalButton = document.getElementById(cancelButton);

    openModalButton.addEventListener("click", () => {
        modal.classList.remove("hidden");
    });

    closeModalButton.addEventListener("click", () => {
        modal.classList.add("hidden");
    });

    cancelModalButton.addEventListener("click", () => {
        modal.classList.add("hidden");
    });

    modal.addEventListener("click", (event) => {
        if (event.target === modal) {
            modal.classList.add("hidden");
        }
    });
}

export function setDatePicker() {
    const defaultDatepicker = document.querySelector("#default-datepicker");
    defaultDatepicker.value = "01/01/2025";
}

var departmentId;
var positionId;

export function comboBox(name) {
    const searchInput = document.getElementById(name + "_search");
    const dropdown = document.getElementById(name + "_list");
    const options = dropdown.querySelectorAll("li");

    if (options.length == 0) {
        searchInput.addEventListener("focus", () => {
            dropdown.style.display = "block";
        });
        document.addEventListener("click", (event) => {
            if (
                !dropdown.contains(event.target) &&
                event.target !== searchInput
            ) {
                dropdown.style.display = "none";
            }
        });
        return;
    }

    searchInput.value = options[0].textContent;
    if (name === "department") {
        departmentId = options[0].getAttribute("data-value");
    } else if (name === "position") {
        positionId = options[0].getAttribute("data-value");
    }

    searchInput.addEventListener("focus", () => {
        options.forEach((option) => {
            option.style.display = "block";
        });

        dropdown.style.display = "block";
    });

    searchInput.addEventListener("input", () => {
        const query = searchInput.value.toLowerCase();
        let hasVisibleOptions = false;

        options.forEach((option) => {
            const text = option.textContent.toLowerCase();
            if (text.includes(query)) {
                option.style.display = "block";
                hasVisibleOptions = true;
            } else {
                option.style.display = "none";
            }
        });

        dropdown.style.display = hasVisibleOptions ? "block" : "none";
    });

    options.forEach((option) => {
        option.addEventListener("click", () => {
            // searchInput.value = option.textContent;
            searchInput.value = option.textContent;
            if (name === "department") {
                departmentId = option.getAttribute("data-value");
            } else if (name === "position") {
                positionId = option.getAttribute("data-value");
            }
            dropdown.style.display = "none";
        });
    });

    document.addEventListener("click", (event) => {
        if (!dropdown.contains(event.target) && event.target !== searchInput) {
            dropdown.style.display = "none";
        }
    });


    const mainForm = document.querySelector("#mainForm");

    mainForm.addEventListener("submit", (event) => {
        document.querySelector('input[name="department_search"]').value =
            departmentId;
        document.querySelector('input[name="position_search"]').value =
            positionId;
    });
}
