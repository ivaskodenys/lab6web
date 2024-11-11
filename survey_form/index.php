<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Анкета опитування</title>
</head>
<body>
    <h1>Анкета опитування</h1>
    <form action="submit_survey.php" method="POST">
        <label for="name">Ім'я:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="question1">Як часто ви користуєтесь інтернетом?</label><br>
        <input type="text" id="question1" name="question1"><br><br>

        <label for="question2">Який ваш улюблений браузер?</label><br>
        <select id="question2" name="question2">
            <option value="Chrome">Chrome</option>
            <option value="Firefox">Firefox</option>
            <option value="Safari">Safari</option>
            <option value="Edge">Edge</option>
        </select><br><br>

        <label for="question3">Чи зручно вам використовувати комп'ютер щодня?</label><br>
        <input type="radio" id="yes" name="question3" value="Так"> Так
        <input type="radio" id="no" name="question3" value="Ні"> Ні<br><br>

        <button type="submit">Надіслати</button>
    </form>
</body>
</html>
