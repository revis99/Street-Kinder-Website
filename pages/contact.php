<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Street Kinder</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light navigation">
        <div class="container">
            <a class="navbar-brand" href="../index.php"><img class="logo" src="../image/logo.png" alt="logotip"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <?php if($_COOKIE['user']==''): ?>
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php">Главная</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../pages/catalog.php">Каталог</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../pages/contact.php">Контакты</a>
                    </li>
                </ul>
                <?php
                    else:
                ?>
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php">Главная</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../pages/catalog.php">Каталог</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../pages/contact.php">Контакты</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../pages/profile.php">Профиль</a>
                    </li>
                </ul>
                <?php
                    endif;
                ?>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"><i class="fa fa-address-card fa-lg" aria-hidden="true"></i></a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php if($_COOKIE['user']==''): ?>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Регистрация</a></li>
							<li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal1" href="#">Авторизация</a></li>
                            <?php
                                else:
                            ?>
                                <a class="nav-link" href="../pages/exit.php">Выйти</a>
                            <?php
                                endif;
                            ?>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"><i class="fa fa-search fa-lg" aria-hidden="true"></i></a>
					</li>
				</ul>
            </div>
        </div>
        </nav>
       <!-- Регистрация -->
       <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header"> 
                <h5 class="modal-title" id="exampleModalLabel">Регистрация</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form method="post" action="pages/register.php">
            <form class="row g-3 d-flex flex-column">
                <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Логин</label>
                <input type="text" class="form-control"  name="login" id="validationCustom4" required>
                <div class="valid-feedback">
                Все хорошо!
                </div>
                </div>
                <div class="col-12">
                <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-12">
                <label for="validationCustom01" class="form-label">Эл.почта</label>
                <input type="text" class="form-control" name="email" id="validationCustom01"  required>
                <div class="valid-feedback">
                Все хорошо!
                </div>
                </div>
                <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Пароль</label>
                <input type="password" class="form-control"  name="pass" id="validationCustom02" required>
                <div class="valid-feedback">
                Все хорошо!
                </div>
                </div>
                <div class="col-md-12">
                <label for="validationCustom" class="form-label">Адрес</label>
                <div class="input-group has-validation">
                <input type="text" class="form-control"  required name="address" id="validationCustom" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                Пожалуйста, введите верный адрес 
                </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                    </div>
                </div>
                <hr class="hr-line">
                    <button type="submit" class="btn btn-secondary">Зарегистрироваться</button>
                </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
        <!-- Авторизация -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal1Label">Авторизация</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="pages/auth.php"> 
                    <div class="forma_auth">
                        <label for="login">Логин</label><br>
                        <input class="border rounded" required type="login" name="login">
                    </div>
                    <div class="forma_auth">
                        <label for="password">Пароль</label><br>
                        <input class="border rounded"  required type="password" name="pass">
                    </div>
                    <hr class="hr-line">
                    <button type="submit" class="btn btn-secondary">Войти в систему</button>
                </form>
            </div>
            </div>
        </div>
        </div>
    </header>
    <main>
        <section class="first_block_contact container">
            <h3>Контакт центр</h3>
            <p>+7 (495) 544-57-70   +7 (800) 775-28-34</p>
            <p>Ежедневно с 9:00 до 22:00 по Московскому времени</p>
            <p>Интересующие вас вопросы Вы можете написать нам на почту
            store@brandshop.ru</p>
        </section>
        <section class="second_block_contact container">
            <h2 class="text">Наш магазин</h2>
            <div class="our_shop d-flex ">
                <div class="shop">
                    <a href="#"><h5>Street Kinder, ТЦ РИО</h5></a>
                    <p>Дмитровское ш., 163А, корп. 1, Москва, Россия<br>
                    Режим работы – с 10:00 до 22:00, ежедневно</p>
                    <img class="border rounded" src="../image/shops/shop1.jpg" alt="shop1">
                </div>
            </div>
        </section>
        <section class="container   map">
            <h2 class="text-center my-5">Мы на карте</h2>
            <iframe class="border rounded" src="https://yandex.ru/map-widget/v1/?um=constructor%3A3a13380473be140222830ba89d9098c56a952fed054476209364a4f09cf3f3b0&amp;source=constructor"  frameborder="0"></iframe>
        </section>
    </main>
    <footer>
        <hr class="hr-line">
        <footer class="container">
        <div class="footer_flex d-flex justify-content-around my-3">
            <div class="footer_block_first d-flex flex-column">
                <h3>Street Kinder</h3>
                <a href="#">Главная</a>
                <a href="#">Скидки</a>
                <a href="#">Мужское</a>
                <a href="#">Женское</a>
                <a href="#">Контакты</a>
            </div>
            <div class="footer_block_second d-flex flex-column">
                <h3>Поддержка</h3>
                <a href="#">Помощь покупателю</a>
                <a href="#">Доставка и оплата</a>
                <a href="#">Возврат</a>
                <a href="#">Программа лояльности</a>
            </div>
            <div class="footer_block_third d-flex flex-column">
                <h3>Мы в соц. сетях</h3>
                <div class="social d-flex jusify-content-center mx-3">
                    <a href="#"><i class="fa fa-youtube-play mx-2 fa-2x" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter mx-2 fa-2x" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-vk mx-2 fa-2x" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram mx-2 fa-2x" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>