function checkConnection() {
    const loader = document.getElementById("slowLoader");

    const connection = navigator.connection || navigator.mozConnection || navigator.webkitConnection;

    if (!connection) return;

    const slowTypes = ["slow-2g", "2g", "3g"];

    function updateStatus() {
        if (slowTypes.includes(connection.effectiveType)) {
            loader.style.display = "flex";
        } else {
            loader.style.display = "none";
        }
    }

    updateStatus();
    connection.addEventListener("change", updateStatus);
}

window.addEventListener("load", checkConnection);