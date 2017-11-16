<?php include 'header.php'; ?>

    <div class="panel panel-default">
        <div class="panel-body">
            <div class="form-order col-md-12">
                <form action="#" method="POST" class="form-horizontal" id="order-form">
                    <div class="control-group">
                        <label class="control-label" for="name">Як до вас звертатись?</label>
                        <div class="controls">
                            <input class="form-control" type="text" name="name" id="name">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="email">Ваша e-mail адреса:</label>
                        <div class="controls">
                            <input class="form-control" type="text" name="email" id="email">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="phone">Ваш телефон:</label>
                        <div class="controls">
                            <input class="form-control" type="text" name="phone" id="phone">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="description">Опис замовлення:</label>
                        <div class="controls">
                            <textarea class="form-control" name="description" id="description" rows="6"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="description">Прикріпіть технічне завдання:</label>
                        <div class="controls">
                            <input type="file">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"></label>
                        <div class="controls">
                            <button type="button" class="btn btn-success">Подати заявку</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>