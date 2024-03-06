<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Certification Test</title>
    <style>
        /* Add some basic styling if needed */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }
        p{
            color:red;
        }
        h2{
            margin-top: 10px;
            color: #007bff;
        }

       
    </style>
</head>
<body>
    <div id="quiz-container">
        <h2>Full STack Web Developer</h2>
        <p> Note! Check all the questions with right answers and submit it. Double check before submiting the test.</p>
        <div id="question-container">
            <!-- Questions will be dynamically inserted here -->
        </div> <br>
        <button class="btn btn-primary" id="submit-btn">Submit</button> <br>
        <div id="result-container"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="quiz.js"></script>
</body>
</html>
