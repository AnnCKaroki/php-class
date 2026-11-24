<!DOCTYPE html>
<html lang >
    <head>
        <title>Class Form</title>
        <link rel="stylesheet" href="css/mystyle.css">
    </head>

    <body>
        <h1>Please enter user data </h1>
        <form>
            <label for="fname" value="name">First Name</label>
                <input type="text" id="fname" value="fname">
            <label for="lname">Last Name</label>
                <input type="text" id="lname" value="lname">
            <label for="email">Email</label>
                <input type="email" id="email" placeholder="you@example.com">
            <label for="gender">Gender</label>
                <select id="gender">
                    <option id="female">Female</option>
                    <option id="male">Male</option>
                </select>
            <button type="submit">Submit</button>

        </form>
    </body>
