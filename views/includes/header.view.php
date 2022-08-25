<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href='/resources/css/main.css'>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Task</title>
</head>
<body>
<header>
<nav class="wrapper-menu">
    <a href="/" class="logo">
        <h1>Mainpage</h1>
    </a>
    <a href="/controllers/DataController.php" class="btn">Update DB</a>
    <form action="/controllers/SearchController.php" method="post">
        <input type="search" placeholder="Search by comment..." name="search" required>
        <button class="" type="submit">Search</button>
    </form>
</nav>

</header>

