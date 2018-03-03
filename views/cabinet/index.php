<?php include ROOT . '/views/layouts/header.php'; ?>

    <section>
        <div class="container">
            <div class="row">

                <h3>Личный кабинет</h3>

                <h4><?php echo $user['name'];?>, Добро пожаловать!</h4>
                <ul>
                    <li><a class="button" href="/cabinet/edit">Edit info</a></li>
                </ul>

            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>