<?php include $_SERVER['DOCUMENT_ROOT'].'/views/layouts/header.php' ?>
<!--content-->
	<div class="content">
        <div class="container">
            <div class="single">
                <div class="register">
                    <?php if($result):?>   
                        <div class="alert alert-success">
                            <strong>Вы успешно зарегистрированы!</strong>
                            <div>
                                Для входа на сайт используйте указанный вами E-mail адресс
                            </div>
                        </div>                    
                    <?php else: ?>
                        <form method="POST">                            
                            <h3>Регистрация</h3>                            
                                <?php if (isset($errors) && is_array($errors)): ?>
                                    <?php foreach ($errors as $error): ?>
                                    <div class="alert alert-danger">
                                        <strong><?php echo $error; ?></strong>
                                    </div>
                                    <?php endforeach; ?>
                                    
                                <?php endif; ?>                             
                            <input type="email" name="email" placeholder="E-mail" value="<?php echo $email?>">
                            <input type="text" name="name" placeholder="Имя" value="<?php echo $name?>">
                            <input type="password" name="password" placeholder="Пароль" value="<?php echo $password?>">
                            <input type="submit" name="submit" value="Регистрация">
                            <p><a href="/login">Уже есть аккаунт?</a></p>                    
                        </form>
                    <?php endif; ?>
                </div>
            </div>
	   </div>
	</div>
	<!---->
<?php include $_SERVER['DOCUMENT_ROOT'].'/views/layouts/footer.php' ?>

