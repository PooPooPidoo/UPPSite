<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">
                
                <?php if ($result): ?>
                    <p>Данные отредактированы!</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h2>Редактирование данных</h2>
                        <form action="#" method="post">
                            <p>Имя:</p>
                            <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>
                            
                            <p>Пароль:</p>
                            <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                            
                            <p>Почта:</p>
                            <input type="text" name="email" placeholder="Почта" value="<?php echo $email; ?>"/>
                            
                            <p>ФИО:</p>
                            <input type="text" name="FIO" placeholder="ФИО" value="<?php echo $FIO; ?>"/>
                            
                            <p>Телефон:</p>
                            <input type="text" name="Telephone" placeholder="Телефон" value="<?php echo $Telephone; ?>"/>
                            
                            <p>Адрес:</p>
                            <input type="text" name="Adress" placeholder="Адрес" value="<?php echo $Adress; ?>"/>
                            
                            <p>дата рождения:</p>
                            <input type="text" name="Date" placeholder="Дата" value="<?php echo $Date; ?>"/>                      
                                                        
                            <br/>
                            <input type="submit" name="submit" class="btn btn-default" value="Сохранить" />
                        </form>
                    </div><!--/sign up form-->
                
                <?php endif; ?>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>