<div class="cabinet-user-datas">
    <h3>Мои данные</h3> 
    <a href=""><h5>Редактировать</h3></a>
    <table class="user-info">
        <tbody>
            <tr>
                <td>Имя, Фамилия:</td>
                <td><?php echo $user['name']; ?></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><?php echo $user['email']; ?></td>
            </tr>
            <tr>
                <td>Телефон:</td>
                <td><?php echo $user['id']; ?></td>
            </tr>
            <tr>
                <td>Дата регистрации:</td>
                <td><?php echo $user['registration_date']; ?></td>
            </tr>
        </tbody>
    </table>
</div>
