document.addEventListener("DOMContentLoaded", function () {
    const goButton = document.getElementById("goButton");
    const answerContainer = document.getElementById("answerContainer");

    goButton.addEventListener("click", function () {
        fetch("get_first_answer.php")
            .then(response => response.json())
            .then(answer => {
                answerContainer.textContent = `First answer: ${answer}`;
            });
    });
});
