<html>
<head>
    <title>Tugas Day 1</title>
</head>
<body>
    <form method="POST" action="/welcome">
        {{ csrf_field() }}
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>

        <p><label for="first_name">First name:</label></p>
        <input id="first_name" name="first_name" type="text" placeholder="First name">

        <p><label for="last_name">Last name:</label></p>
        <input id="last_name" name="last_name" type="text" placeholder="Last name">

        <p><label>Last name:</label></p>
        <input type="radio" name="gender" value="0">Male<br>
        <input type="radio" name="gender" value="1">Female<br>
        <input type="radio" name="gender" value="2">Other<br>

        <p>Nationality:</p>
        <select>
            <option value="indonesia">Indonesia</option>
            <option value="singapore">Singapore</option>
            <option value="malaysia">Malaysia</option>
            <option value="australia">Australia</option>
        </select>

        <p><label>Language Spoken:</label></p>
        <input type="checkbox" name="language" value="0">Bahasa Indonesia<br>
        <input type="checkbox" name="language" value="1">English<br>
        <input type="checkbox" name="language" value="2">Other<br>

        <p><label for="bio">Bio:</label></p>
        <textarea id="bio" name="bio" cols="30" rows="7"></textarea>
        <br>
        <input type="submit" value="Sing Up">
    </form>
</body>