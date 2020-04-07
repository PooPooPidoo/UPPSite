<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <h3>Кабинет пользователя</h3>
            
            <h4>Привет, <?php echo $user['name'];?></h4>
            <h4>ФИО: <?php echo $user['FIO'];?></h4>
            <h4>Почта: <?php echo $user['email'];?></h4>
            <h4>Телефон: <?php echo $user['Telephone'];?></h4>
            <h4>Адрес: <?php echo $user['Adress'];?></h4>
            <h4>Дата рождения: <?php echo $user['Date'];?></h4>
            <ul>
                <li><a href="/cabinet/edit">Редактировать данные</a></li>
                <!--<li><a href="/cabinet/history">Список покупок</a></li>-->
            </ul>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>