<?php include ROOT . '/views/layouts/header_admin.php'; ?>

    <section>
        <div class="container">
            <div class="row">

                <br/>

                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                        <li><a href="/admin">Админпанель</a></li>
                        <li class="active">Управление комментариями</li>
                    </ol>
                </div>

                <h4>Список вопросов</h4>

                <br/>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Сообщение покупателя</th>

                        </tr>
                        <?php foreach ($commentList as $comment): ?>
                            <tr>
                                <td>
                                    <a href="/admin/comment/<?php echo $comment['id']; ?>">
                                        <?php echo $comment['id']; ?>
                                    </a>
                                </td>
                                <td><?php echo $comment['userEmail']; ?></td>
                                <td><?php echo htmlspecialchars($comment['userText']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>