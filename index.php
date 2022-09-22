<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Street Kinder</title>
</head>
<body>
    <?php if($_COOKIE['user']==''): ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light navigation">
        <div class="container">
            <a class="navbar-brand" href="../index.php"><img class="logo" src="image/logo.png" alt="logotip"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="pages/catalog.php">Каталог</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="pages/contact.php">Контакты</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"><i class="fa fa-address-card fa-lg" aria-hidden="true"></i></a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Регистрация</a></li>
							<li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal1" href="#">Авторизация</a></li>
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
    <?php else:?>
        <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light navigation">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img class="logo" src="image/logo.png" alt="logotip"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="pages/catalog.php">Каталог</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="pages/contact.php">Контакты</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="pages/profile.php">Профиль</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"><i class="fa fa-address-card fa-lg" aria-hidden="true"></i></a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="nav-link" href="../pages/exit.php">Выйти</a>
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
    <?php endif; ?>
    <main>
        <section class="container first_section">
            <div class="d-flex justify-content-around cart_people">
                <div class="card_flex d-flex flex-column">
                    <img src="image/men.jpg" alt="men">
                    <h3>Мужское</h3>
                    <a href="pages/catalog.php"><p>Смотреть</p></a>
                </div>
                <div class="card_flex">
                    <img src="image/woman.jpg" alt="woman">
                    <h3>Женское</h3>
                    <a href="pages/catalog.php"><p>Смотреть</p></a>
                </div>
            </div>
        </section>
        <section class="second_section bg-light">
            <div class="container my_carousel">
                <h2 class="p-5 h1 text-center text-light fw-bold">Популярные товары</h2>
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="15000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active d-flex flex-row justify-content-center my-5">
                            <div class="card mx-3 my-5 text-center" style="width: 18rem;">
                                <a href="#"><img src="image/cart1.jpg" class="card-img-top" alt="cart1"></a>
                                <h2>adidas Originals</h2>
                                <p>Кроссовки<br>Streetball 2</p>
                                <p>13 500р</p>
                            </div>
                            <div class="card mx-3 my-5 text-center" style="width: 18rem;">
                                <a href="#"><img src="image/cart2.jpg" class="card-img-top" alt="cart1"></a>
                                <h2>YEEZY</h2>
                                <p>Кроссовки<br>YEEZY Boost 700 MNVN</p>
                                <p>18 990р</p>
                            </div>
                            <div class="card mx-3 my-5 text-center" style="width: 18rem;">
                                <a href="#"><img src="image/cart3.jpg" class="card-img-top" alt="cart1"></a>
                                <h2>Nike</h2>
                                <p>Кроссовки<br>Blazer Mid 77 Jumbo</p>
                                <p>10 690р</p>
                            </div>
                            <div class="card mx-3 my-5 text-center" style="width: 18rem;">
                                <a href="#"><img src="image/cart4.jpg" class="card-img-top" alt="cart1"></a>
                                <h2>Nike </h2>
                                <p>Кроссовки<br>Shane O'Neill</p>
                                <p>7 190р</p>
                            </div>
                        </div>
                        <div class="carousel-item d-flex flex-row justify-content-center my-5">
                            <div class="card mx-3 my-5 text-center" style="width: 18rem;">
                                <a href="#"><img src="image/cart5.jpg" class="card-img-top" alt="cart1"></a>
                                <h2>Nike </h2>
                                <p>Кроссовки<br>Air force 1 07 LV8</p>
                                <p>11 490р</p>
                            </div>
                            <div class="card mx-3 my-5 text-center" style="width: 18rem;">
                                <a href="#"><img src="image/cart6.jpg" class="card-img-top" alt="cart1"></a>
                                <h2>adidas Originals</h2>
                                <p>Кроссовки<br>Ozelia</p>
                                <p>8 790р</p>
                            </div>
                            <div class="card mx-3 my-5 text-center" style="width: 18rem;">
                                <a href="#"><img src="image/cart7.jpg" class="card-img-top" alt="cart1"></a>
                                <h2>adidas Originals</h2>
                                <p>Кроссовки<br>YEEZY Boost 700</p>
                                <p>19 990р</p>
                            </div>
                            <div class="card mx-3 my-5 text-center" style="width: 18rem;">
                                <a href="#"><img src="image/cart8.jpg" class="card-img-top" alt="cart1"></a>
                                <h2>adidas Originals </h2>
                                <p>Кроссовки<br>YEEZY Boost 350 V2</p>
                                <p>21 190р</p>
                            </div>
                        </div>
                        <div class="carousel-item d-flex flex-row justify-content-center my-5">
                            <div class="card mx-3 my-5 text-center" style="width: 18rem;">
                                <a href="#"><img src="image/cart9.jpg" class="card-img-top" alt="cart1"></a>
                                <h2>adidas Originals </h2>
                                <p>Кроссовки<br>YEEZY 500</p>
                                <p>17 990р</p>
                            </div>
                            <div class="card mx-3 my-5 text-center" style="width: 18rem;">
                                <a href="#"><img src="image/cart10.jpg" class="card-img-top" alt="cart1"></a>
                                <h2>Nike </h2>
                                <p>Кроссовки<br>Air force 1 07 Next Nature Toasty</p>
                                <p>10 990р</p>
                            </div>
                            <div class="card mx-3 my-5 text-center" style="width: 18rem;">
                                <a href="#"><img src="image/cart11.jpg" class="card-img-top" alt="cart1"></a>
                                <h2>Nike </h2>
                                <p>Кроссовки<br>Air Force 1 07 LX</p>
                                <p>11 990р</p>
                            </div>
                            <div class="card mx-3 my-5 text-center" style="width: 18rem;">
                                <a href="#"><img src="image/cart12.jpg" class="card-img-top" alt="cart1"></a>
                                <h2>Nike </h2>
                                <p>Кроссовки<br>Air Flight Lite Mid</p>
                                <p>10 990р</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Следующий</span>
                    </button>
                </div>
            </div>
        </section>
        <section class="container third_section">
            <div class="new_collection d-flex jusify-content-around align-items-center">
                <div class="image_block mx-5">
                    <img src="image/image.jpg" alt="new_collection">
                </div>
                <div class="text_block d-flex flex-column justify-content-around" >
                    <a href="#"><h5>НОВЫЕ ПОСТУПЛЕНИЯ</h5></a>
                    <h2>Air Jordan 1 Mid Red</h2>
                    <p>Повседневные позиции в лучших традициях американской стиля</p>
                    <a href="pages/catalog.php"><h5>СМОТРЕТЬ</h5></a>
                </div>
            </div>
        </section>
        <section class="container four_section">
            <h2 class="h1 text-center my-5">Бренды</h2>
            <div class="brend_logo d-flex justify-content-around">
                <img class="mx-4" src="image/brends/brend1.svg" alt="nike">
                <img class="mx-4" src="image/brends/brend2.svg" alt="jordan">
                <img class="mx-4" src="image/brends/brend3.svg" alt="adidas">
                <img class="mx-4" src="image/brends/brend4.svg" alt="puma">
                <img class="mx-4" src="image/brends/brend6.svg" alt="tnf">
            </div>
        </section>
    </main>
    <hr class="hr-line">
    <footer class="container footer-light">
        <div class="footer_flex d-flex justify-content-around my-3">
            <div class="footer_block_first d-flex flex-column">
                <h3>Street Kinder</h3>
                <a href="#">Главная</a>
                <a href="#">Скидки</a>
                <a href="pages/catalog.php">Мужское</a>
                <a href="pages/catalog.php">Женское</a>
                <a href="pages/contact.php">Контакты</a>
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
                <div class="social">
                    <a href="#"><i class="fa fa-youtube-play fa-2x mx-2" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-2x mx-2" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-vk fa-2x mx-2" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram fa-2x mx-2" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>