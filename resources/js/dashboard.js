document.addEventListener("DOMContentLoaded", function () {
    // Event listener for refresh button
    document
        .getElementById("refreshButton")
        .addEventListener("click", function () {
            // Call the refreshData function via AJAX
            fetch("/refresh-data")
                .then((response) => response.json())
                .then((data) => {
                    // Update the displayed data
                    document.getElementById("dataDisplay").innerText =
                        data.data;
                })
                .catch((error) =>
                    console.error("Error refreshing data:", error)
                );
        });
});
