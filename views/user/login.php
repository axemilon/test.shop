<?php include $_SERVER['DOCUMENT_ROOT'].'/views/layouts/header.php' ?>
<!--content-->
	<div class="content">
        <div class="container">
            <div class="single">
                <div class="register">
                    <form method="POST">
                    <h3>Вход в личный кабинет</h3>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <?php foreach ($errors as $error): ?>
                            <div class="alert alert-danger">
                                <strong><?php echo $error; ?></strong>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>  
                    <input type="email" name="email" placeholder="E-mail" value="<?php echo $email?>">
                    <input type="password" name="password" placeholder="Пароль" value="<?php echo $password?>">
                    <input type="submit" name="submit" value="Войти">  
                    <p>
                        <a href="/login">Забыли пароль?</a><br>
                        <a href="/register">Регистрация</a>
                    </p>                    
                </form>
                </div>
            </div>
	   </div>
	</div>
	<!---->
<?php include $_SERVER['DOCUMENT_ROOT'].'/views/layouts/footer.php' ?>

