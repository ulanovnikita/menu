<!DOCTYPE html>
<html>
<head>
    <title>Меню ресторана</title>
</head>
<body>
    <h2>Меню ресторана</h2>
    <form method="post" action="">
        <p>Выберите блюда из меню, указав их номер:</p>
        <label for="dish">1. Суп-харчо - $12</label><br>
        <input type="checkbox" id="dish1" name="dishes[]" value="12"><br>

        <label for="dish">2. Борщ - $10</label><br>
        <input type="checkbox" id="dish2" name="dishes[]" value="10"><br>

        <label for="dish">3. Плов - $18</label><br>
        <input type="checkbox" id="dish3" name="dishes[]" value="18"><br>

        <label for="dish">4. Шашлык - $25</label><br>
        <input type="checkbox" id="dish4" name="dishes[]" value="25"><br>

        <label for="dish">5. Напиток - $5</label><br>
        <input type="checkbox" id="dish5" name="dishes[]" value="5"><br>

        <input type="submit" name="submit" value="Подтвердить заказ">
    </form>

    <?php
    // Проверяем, был ли отправлен заказ из формы
    if(isset($_POST['submit'])) {
        // Получаем выбранные блюда
        $selected_dishes = isset($_POST['dishes']) ? $_POST['dishes'] : array();

        // Вычисляем итоговую стоимость заказа
        $total_cost = 0;

        // Перебираем выбранные блюда и добавляем их стоимость к общей стоимости
        foreach ($selected_dishes as $dish_cost) {
            $total_cost += $dish_cost;
        }

        // Выводим итоговую стоимость заказа
        echo "<p>Итоговая стоимость заказа: $" . number_format($total_cost, 2) . "</p>";
    }
    ?>
</body>
</html>
