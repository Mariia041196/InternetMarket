<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Главная</title>
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="/template/css/font-awesome.min.css" rel="stylesheet">
    <link href="/template/css/prettyPhoto.css" rel="stylesheet">
    <link href="/template/css/price-range.css" rel="stylesheet">
    <link href="/template/css/animate.css" rel="stylesheet">
    <link href="/template/css/main.css" rel="stylesheet">
    <link href="/template/css/responsive.css" rel="stylesheet">
    <link href="/template/css/finder.css" rel="stylesheet">
    <link href="/template/css/list.css" rel="stylesheet">
    <link href="/template/css/catalog.css" rel="stylesheet">
    <link href="/template/css/text.css" rel="stylesheet">
    <link href="/template/css/cart.css" rel="stylesheet">
    <link href="/template/css/form.css" rel="stylesheet">
    <link href="/template/css/button.css" rel="stylesheet">
    <link href="/template/css/drop.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="/template/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/template/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/template/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/template/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/template/images/ico/apple-touch-icon-57-precomposed.png">
    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
</head><!--/head-->
<body>
<div class="navbar-wrapper">
    <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Интернет-магазин</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Главная</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Дополнительная информация <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/catalog/">Каталог товаров</a></li>
                                <li><a href="/contacts/">Контакты</a></li>
                            </ul>
                        </li>
                        <li><a href="/cart">
                                <i class="fa fa-shopping-cart"></i> Корзина
                                <span id="cart-count">(<?php echo Cart::countItems();?>)</span>
                            </a>
                        </li>
                        <?php if (User::isGuest()): ?>
                            <li><a href="/user/login/"><i class="fa fa-lock"></i> Вход</a></li>|
                            <li><a href="/user/register/"><i class="fa fa-laptop"></i> Регистрация</a></li>
                        <?php else: ?>
                            <li><a href="/cabinet/"><i class="fa fa-user"></i> Аккаунт</a></li>
                            <li><a href="/user/logout/"><i class="fa fa-unlock"></i> Выход</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <div class="category-wrap">
                            <h3>Категории</h3>
                            <ul>
                                <?php foreach ($categories as $categoryItem): ?>
                                    <li><a href="/category/<?php echo $categoryItem['id']; ?>"
                                           class="<?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>">
                                            <?php echo $categoryItem['name']; ?>
                                        </a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <?php if ($result): ?>
                            <p>Заказ оформлен. Мы Вам перезвоним.</p>
                        <?php else: ?>

                            <p>Выбрано товаров: <?php echo $totalQuantity; ?>, на сумму: <?php echo $totalPrice; ?>, $</p><br/>

                            <?php if (!$result): ?>

                                <div class="col-sm-4">
                                    <?php if (isset($errors) && is_array($errors)): ?>
                                        <ul>
                                            <?php foreach ($errors as $error): ?>
                                                <li> - <?php echo $error; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>

                                    <p>Для оформления заказа заполните форму. Наш менеджер свяжется с Вами.</p>

                                    <div class="login-form">
                                        <form action="#" method="post">

                                            <p>Ваше имя</p>
                                            <input type="text" name="userName" placeholder="" value="<?php echo $userName; ?>"/>

                                            <p>Номер телефона</p>
                                            <input type="text" name="userPhone" placeholder="" value="<?php echo $userPhone; ?>"/>

                                            <p>Комментарий к заказу</p>
                                            <input type="text" name="userComment" placeholder="Сообщение" value="<?php echo $userComment; ?>"/>

                                            <br/>
                                            <br/>
                                            <input type="submit" name="submit" class="btn btn-default" value="Оформить" />
                                        </form>
                                    </div>
                                </div>

                            <?php endif; ?>

                        <?php endif; ?>

                    </div>

                </div>
            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>