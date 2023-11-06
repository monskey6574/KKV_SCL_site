<!DOCTYPE html>
<html>
<head>
    <title>Grade Selection</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        .grade-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            grid-gap: 10px;
            max-width: 800px;
            margin: 0 auto;
        }

        .grade-link {
            display: block;
            text-decoration: none;
            background: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .grade-link:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Choose Grade</h1>

    <div class="grade-grid">
        <a class="grade-link" href="grade.add.work.php">Grade 1</a>
        <a class="grade-link" href="page_for_grade_2.html">Grade 2</a>
        <a class="grade-link" href="page_for_grade_3.html">Grade 3</a>
        <a class="grade-link" href="page_for_grade_4.html">Grade 4</a>
        <a class="grade-link" href="page_for_grade_5.html">Grade 5</a>
        <a class="grade-link" href="page_for_grade_6.html">Grade 6</a>
        <a class="grade-link" href="page_for_grade_7.html">Grade 7</a>
        <a class="grade-link" href="page_for_grade_8.html">Grade 8</a>
        <a class="grade-link" href="page_for_grade_9.html">Grade 9</a>
        <a class="grade-link" href="page_for_grade_10.html">Grade 10</a>
        <a class="grade-link" href="page_for_grade_11.html">Grade 11</a>
    </div>
</body>
</html>
