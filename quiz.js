$(document).ready(function () {
    // Define your quiz questions and answers
    const questions = [
        {
            question: "1- The web is based on?",
            options: ["Images", "Text", "HTML", "Information"],
            correctAnswer: "HTML"
        },
        {
            question: "2- HTML stands for?",
            options: ["Hyper Text Marking Language", "Hyperdiaper Text Markup Lingo", "VHyperdiaper Text Markup", "Hyper Text Markup Language"],
            correctAnswer: "Hyper Text Markup Language"
        },
        {
            question: "3- What is the predominant markup language for web pages?",
            options: ["PHP", "HTML", "CSS", "JavaScript"],
            correctAnswer: "HTML"
        },
        {
            question: "4- A domain name is a identification label.",
            options: ["True", "False", "Wrong Question", "Dont Know"],
            correctAnswer: "True"
        },
        {
            question: "5- What type of web hosting did we not talk about in class?",
            options: ["Shared Web Hosting", "Virtual Private Server Hosting", "Unified Location Hosting", "Markup Language"],
            correctAnswer: "Unified Location Hosting"
        },
        {
            question: "6- What is a web server?",
            options: ["Computer program that delivers content", "World Wide Web", "VHyperdiaper Text Markup", "Markup Language"],
            correctAnswer: "Computer program that delivers content"
        },
        {
            question: "7- HTML stands for?",
            options: ["Hyper Text Marking Language", "Hyperdiaper Text Markup Lingo", "VHyperdiaper Text Markup", "Hyper Text Markup Language"],
            correctAnswer: "Hyper Text Markup Language"
        },
        {
            question: "8- What is the predominant markup language for web pages?",
            options: ["PHP", "HTML", "CSS", "JavaScript"],
            correctAnswer: "HTML"
        },
        {
            question: "9- The web is based on?",
            options: ["Images", "Text", "HTML", "Information"],
            correctAnswer: "HTML"
        },
        {
            question: "4- A domain name is a identification label.",
            options: ["True", "False", "Wrong Question", "Dont Know"],
            correctAnswer: "True"
        },
    ];

    // Populate questions
    function populateQuestions() {
        for (let i = 0; i < questions.length; i++) {
            const questionHTML = `
                <div class="question" id="q${i}">
                    <h3>${questions[i].question}</h3>
                    ${generateOptions(questions[i].options, i)}
                </div>
            `;
            $("#question-container").append(questionHTML);
        }
    }

    // Generate options for each question
    function generateOptions(options, questionIndex) {
        let optionsHTML = "";
        for (let i = 0; i < options.length; i++) {
            optionsHTML += `
                <input type="radio" name="q${questionIndex}" value="${options[i]}">
                <label>${options[i]}</label><br>
            `;
        }
        return optionsHTML;
    }

    // Calculate and display the results
    function showResults() {
        let score = 0;
        for (let i = 0; i < questions.length; i++) {
            const selectedAnswer = $(`input[name="q${i}"]:checked`).val();
            if (selectedAnswer === questions[i].correctAnswer) {
                score++;
            }
        } 
        const resultHTML = `<br> <h4>Your score is: ${score} out of ${questions.length}</h4>`;
        $("#result-container").html(resultHTML);
    }

    // Event listener for the submit button
    $("#submit-btn").on("click", function () {
        showResults();
    });

    // Initialize the quiz
    populateQuestions();
});
