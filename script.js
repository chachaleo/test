document.addEventListener("DOMContentLoaded", function () {
    const goButton = document.getElementById("goButton");
    const answerContainer = document.getElementById("answerContainer");

    console.log("DOMContentLoaded event listener triggered."); // Log event listener trigger

    goButton.addEventListener("click", function () {
        console.log("Go button clicked."); // Log button click

        fetch("get_first_answer.php")
            .then(response => {
                console.log("Fetch request made."); // Log fetch request
                return response.json();
            })
            .then(answer => {
                console.log("Response received:", answer); // Log response
                answerContainer.textContent = `First answer: ${answer}`;
            })
            .catch(error => {
                console.error("Fetch error:", error); // Log fetch error
            });
    });
});

