<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Терминал заказа пиццы</title>
    <link rel="stylesheet" href="public\style.css">
</head>
<body>
    <div class="container">
        <h1>Выберите пиццу для заказа</h1>
        <form id="orderForm" class="order-form">
        <div class="form-group">
                <label for="pizza">Название:</label>
                <select name="pizza" id="pizza" class="form-select">
                    <?php foreach ($pizzas as $pizza): ?>
                        <option value="<?= htmlspecialchars($pizza) ?>"><?= htmlspecialchars($pizza) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="size">Размер пиццы:</label>
                <select name="sizes" id="sizes" class="form-select">
                    <?php foreach ($sizes as $size): ?>
                        <option value="<?= htmlspecialchars($size) ?>"><?= htmlspecialchars($size) ?> см</option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="sauce">Соус:</label>
                <select name="sauce" id="sauce" class="form-select">
                    <?php foreach ($sauces as $sauce): ?>
                        <option value="<?= htmlspecialchars($sauce) ?>"><?= htmlspecialchars($sauce) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <button type="submit" class="submit-btn">Заказать</button>
        </form>
        <div id="receiptModal" class="receipt" style="display: none;">
            <h2>Чек заказа:</h2>
            <p id="orderDetails" class="order-details"></p>
            <p id="totalPrice" class="total-price"></p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/script.js"></script>
</body>
</html>