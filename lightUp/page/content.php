<div id="content">
    <div class="katalog">
        <?php
        $result = $mysqli->query('SELECT * FROM `tovats`'); // запрос на выборку
        while($row = $result->fetch_assoc())// получаем все строки в цикле по одной
        {
            echo '
            <div class="tovar">
            <img src="'.$row['image'].'" alt="">
            <h1>'.$row['Name'].'</h1>
            <p>'.$row['description'].'</p>
            <p>'.$row['price'].'</p>
            <input type="button" value="добавить">
            </div>
            ';// выводим данные
        }
        ?>
        <div class="tovar add" id="modalButton">
            +
        </div>
        <div id="myModal" class="modal">

            <!-- Модальное содержание -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <form action="POST">
                    <p>Ссылка на картинку</p>
                    <input type="text"/>
                    <p>Название</p>
                    <input type="text"/>
                    <p>Описание</p>
                    <input type="text"/>
                    <p>Цена</p>   
                </form>
            </div>

        </div>
    </div>
</div>