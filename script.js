document.addEventListener('DOMContentLoaded', function () {
    const fetchAnswerButton = document.getElementById('fetchAnswerButton');
    const answerDisplay = document.getElementById('answerDisplay');

    fetchAnswerButton.addEventListener('click', () => {
        fetch('fetch_answer.php')
            .then(response => response.text())
            .then(answer => {
                answerDisplay.textContent = `First answer: ${answer}`;
            })
            .catch(error => {
                answerDisplay.textContent = `Error: ${error.message}`;
            });
    });
});

