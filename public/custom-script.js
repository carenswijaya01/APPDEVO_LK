var modelId = document.getElementById("modelId");

modelId.addEventListener("show.bs.modal", function (event) {
    let button = event.relatedTarget;
    let recipient = button.getAttribute("data-bs-whatever");
});
