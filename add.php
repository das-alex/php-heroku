<h2>Добавить новый тур</h2>
<form enctype="multipart/form-data" class="add_admin" action="add_record.php" method="post">
    <ul>
        <li>
            <label for="country">Введите страну</label>
            <input type="text" name="country">
        </li>
        <li>
            <label for="city">Город</label>
            <input type="text" name="city">
        </li>
        <li>
            <label for="type_live">Тип проживания</label>
            <input type="text" name="type_live">
        </li>
        <li>
            <label for="start_date">Дата заезда</label>
            <input type="text" name="start_date">
        </li>
        <li>
            <label for="end_date">Дата выезда</label>
            <input type="text" name="end_date">
        </li>
        <li>
            <label for="cnt_people">Количество людей</label>
            <input type="text" name="cnt_people">
        </li>
        <li>
            <label for="price">Цена</label>
            <input type="text" name="price">
        </li>
        <li>
            <label for="dscrbe">Описание</label>
            <input type="text" name="dscrbe">
        </li>
        <li>
            <label for="transport">Вид транспорта</label>
            <input type="text" name="transport">
        </li>
        <li>
            <label for="picture_sml">Картинка для записи</label>
            <input type="file" name="picture">
        </li>
    </ul>
    <input name="admin_add" type="submit" value="отправить">
</form>