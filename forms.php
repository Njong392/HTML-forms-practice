<!Doctype html>
<html>
<head>
    <title>HTML Forms</title>
</head>
<body>
    <h1>HTML Forms</h1>

    <form action="" method="POST">
        <label for="username">enter username:</label>
        <input type="text" id="username" name="username" placeholder="username">
        <br><br>
        <label for="email">enter email:</label>
        <input type="email" id="email" name="email" placeholder="Enter email">
        <br><br>
        <label for="password">password</label>
        <input type="password" id="password" name="password" placeholder="Enter password">

        <p>Select your age:</p>

        <input type="radio" name="age" value="18-24" id="opt-1">
        <label for="opt-1">18-24</label>
        <input type="radio" name="age" value="25-30" id="opt-2">
        <label for="opt-2">25-30</label>
        <input type="radio" name="age" value="31+" id="opt-3">
        <label for="opt-3">31+</label>
        <br><br>

        <label for="question">Security Questions</label>
        <select name="questions" id="question">
          <option value="q1">What is your favourite color?</option>
          <option value="q2">If you were a vegetable, what would it be?</option>
          <option value="q3">What is your best ever security question?</option>
        </select>
        <br><br>

        <label for="answer">Answer for security questions:</label>
        <input type="text" id="answer" name="answer">
        <br><br>

        <label for="bio">Your bio</label><br>
        <textarea name="bio" id="bio" cols="30" rows="10"  placeholder="About you..."></textarea>
        <br><br>

        <input type="submit" value="Submit form">
    </form>

</body>
</html>
