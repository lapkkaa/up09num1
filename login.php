<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crazy Mega Games - сайт о видеоиграх</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./css/reset.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel=”icon” href="./img/favicon.ico" type=”image/x-icon”>.
</head>
<body>
    <header class="header">
        <div class="wrapper">
           <div class="header__wrapper">
            <div class="header_logo">
            <a href="MAIN.php" class="header__link">
                <img src="./img/logo.png" alt="NDS" width=200 height=50 class="header__logo-pic">
                </a>
            </div>

            <nav class="header__nav">
                <ul class="header__list">
                    <li class="header__item">
                        <a href="./catalogue.php" class="header__link">Каталог</a>
                    </li>
                    <li class="header__item">
                        <a href="./bin.php" class="header__link">Корзина</a>
                    </li>
                    <li class="header__item">
                        <a href="./login.php" class="header__link">Войти</a>
                    </li>
                </ul>
            </nav>
           </div>

        </div>
    </header>

    <main class="main">
        <section class="intro">
            <div class="wrapper">
               
            <form>
  <!-- Email input -->
  <div class="intro__text3"></div>
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="email" id="form2Example1" class="form-control" />
    <label class="form-label" for="form2Example1">Email</label>
  </div>

  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">Пароль</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Запомнить меня </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Забыли пароль?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Войти</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Еще не зарегистрированы? <a href="register.php">Зарегистрироваться</a></p>
            </div>
        </section>
    </main>
</body>
</html>