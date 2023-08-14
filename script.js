document.addEventListener("DOMContentLoaded", function () {
    // Fetch and display questions
    fetch('get_questions.php')
        .then(response => response.json())
        .then(questions => {
            const questionList = document.getElementById('questionList');
            questions.forEach(question => {
                const li = document.createElement('li');
                li.textContent = question.question_text;
                questionList.appendChild(li);
            });
        });

    // Fetch answer distribution and display pie chart
    fetch('get_answers.php')
        .then(response => response.json())
        .then(answers => {
            const pieChartCanvas = document.getElementById('pieChart');
            const data = {
                labels: Object.keys(answers),
                datasets: [{
                    data: Object.values(answers),
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(75, 192, 192, 0.7)',
                        // Add more colors as needed
                    ],
                }],
            };
            new Chart(pieChartCanvas, {
                type: 'pie',
                data: data,
            });
        });
});
