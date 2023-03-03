<!DOCTYPE html>
<html lang="en">

<head>

  <style>
    body {
      width: 100%;
      height: 100vh;
    }

    .main {
      margin-top: 20%;
    }

    .main h2 {
      margin: 20px;
      font-size: 40px;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form</title>
</head>

<body>
  <div class="main">
    <form method='POST' action="assi-1.php">
      <h2 style="text-align: center; text-decoration: underline;">Reading rss feed using php:</h2>
      <div class="container">
        <input style="width: 80%; padding: 10px;" type="text" name="name">
        <input class=btn" style="padding: 10px; background: yellow;" type="submit" value="Submit Link">
      </div>
    </form>
  </div>