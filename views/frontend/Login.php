<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Se connecter</title>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins');


    html {
      background-color: with;
    }

    body {
      font-family: "Poppins", sans-serif;
      height: 100vh;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    a {
      color: #92badd;
      display: inline-block;
      text-decoration: none;
      font-weight: 400;
    }

    h1 {
      text-align: left;
      font-size: 24px;
      font-weight: 600;
      color: #0d0d0d;
    }

    p {
      text-align: left;
      font-size: 14px;
      color: #0d0d0d;
    }

    /* STRUCTURE */

    .login {
      border-radius: 10px;
      background: #fff;
      padding: 30px;
      width: 90%;
      max-width: 450px;
      position: relative;
      box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
      text-align: center;
    }

    /* FORM TYPOGRAPHY*/

    input[type="text"],
    input[type="password"] {
      background-color: #f6f6f6;
      border: none;
      color: #0d0d0d;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 5px;
      width: 85%;
      border: 2px solid #f6f6f6;
      border-radius: 5px;
      transition: all 0.5s ease-in-out;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
      background-color: #fff;
      border-bottom: 2px solid #5fbae9;
    }

    input[type="submit"] {
      background-color: #fff;
      border: none;
      color: black;
      border: 2px solid #000;
      padding: 15px 80px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      text-transform: uppercase;
      font-size: 13px;
      border-radius: 5px;
      transition: all 0.3s ease-in-out;
    }

    input[type="submit"]:hover {
      background-color: #5A3A31;
      color: #fff;
      border: 2px solid #5A3A31;
    }

    </style>
  </head>

  <body>

    <section class="connexion">

      <div class="login">
        <img src="/src/images/Logo.png" alt="Logo" width="158.465px" height="128.826px">

        <h1>Se connecter</h1>
        <p>Petite phrase de début pour donner envie</p>
        <form method="post" action="login.php">
          <p><input type="text" name="PseudoMemb" value="" placeholder="nom.prenom@mail.com"></p>
          <p><input type="password" name="passMemb" value="" placeholder="* * * * *"></p>

          <p class="submit"><input type="submit" name="commit" value="Se connecter"></p>
        </form>
      </div>

    </section>

  </body>

  </html>
