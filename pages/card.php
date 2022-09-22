<?php
    $mysql = new mysqli('localhost','root','root','streetkinder'); 
?>
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
            <form method="post" action="/pages/register.php">
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
              <form method="post" action="/pages/auth.php"> 
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
        <section class="card_block_first container">
            <?php
                $id = $_GET['id'];
                $cards = $mysql->query("SELECT * FROM `product` WHERE `id` = '$id'");
                $card = mysqli_fetch_assoc($cards);
            ?>
            <div class="container my-5 d-flex flex-row">
                <div class="picture d-flex align-items-center">
                    <img class="mx-5" src="/image/<?=$card['img']?>" alt="#">
                    <div class="text-start mx-5 text-dark">
                        <h4><?=$card['name']?></h4>
                        <p>Описание: <?=$card['description']?></p>
                        <p>Цена: <?=$card['price']?></p>
                        <!-- Кнопка-триггер модального окна -->
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Купить
                    </button>

                    <!-- Модальное окно -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Оформление заказа</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="/pages/orders.php"> 
                    <div class="forma_auth">
                        <label for="name">ФИО</label><br>
                        <input class="border rounded" required type="name" name="name">
                    </div>
                    <div class="forma_auth">
                        <label for="mail">Эл.почта</label><br>
                        <input class="border rounded"  required type="email" name="email">
                    </div>
                    <div class="forma_auth">
                        <label for="tel">Телефон</label><br>
                        <input class="border rounded"  required type="tel" name="tel">
                    </div>
                    <div class="forma_auth">
                        <label for="address">Адрес</label><br>
                        <input class="border rounded"  required type="address" name="address">
                    </div>
                    <div class="forma_auth">
                        <label for="dostavka">Дата доставки</label><br>
                        <input class="border rounded"  required type="dostavka" name="dostavka">
                    </div>
                    <hr class="hr-line">
                    <button type="submit" class="btn btn-secondary">Отправить</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <hr class="hr-line">
        <footer class="container">
        <div class="footer_flex d-flex justify-content-around my-3">
            <div class="footer_block_first d-flex flex-column">
                <h3>Street Kinder</h3>
                <a href="#">Главна</a>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></scrip>
	<script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>