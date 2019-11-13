<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/ajax-bootstrap-select.min.css">

    <title>Hello, world!</title>
</head>
<body>
<div class="container-fluid text-center">
    <h1>Упрощённое добавление компании</h1>
    <form name="companies">
        <div class="container-fluid form-group">
            <div class="form-check form-check form-check-inline">
                <input class="form-check-input" type="radio" name="type" id="type-standard" value="standard" checked>
                <label for="type-standard" class="form-check-label">Обычная компания</label>
            </div>
            <div class="form-check form-check form-check-inline">
                <input class="form-check-input" type="radio" name="type" id="type-ndp" value="ndp">
                <label for="type-ndp" class="form-check-label">НДП</label>
            </div>
            <div class="form-check form-check form-check-inline">
                <input class="form-check-input" type="radio" name="type" id="type-contractor" value="contractor">
                <label for="type-contractor" class="form-check-label">Подрядчик</label>
            </div>
            <div class="form-check form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="duplicate_address" id="duplicate_address" value="1" checked>
                <label for="duplicate_address" class="form-check-label">Адреса совпадают</label>
            </div>
        </div>
        <div class="container-fluid form-group text-left">
            <div class="form-row form-group">
                <div class="col-lg-1 col-md-6">
                    <label for="jsc">Тип</label>
                    <input type="text" class="form-control" placeholder="ООО" id="jsc" required>
                </div>
                <div class="col-lg-3 col-md-6">
                    <label for="title_short">Краткое название компании</label>
                    <input type="text" class="form-control" placeholder="Вектор+" id="title_short" required>
                </div>
                <div class="col-lg-5 col-md-6">
                    <label for="title_full">Полное название компании</label>
                    <input type="text" class="form-control" placeholder="Вектор плюс" id="title_full">
                </div>
                <div class="col-lg-3 col-md-6">
                    <label for="title_en">Название на английском</label>
                    <input type="text" class="form-control" placeholder="Vector plus" id="title_en">
                </div>
            </div>
        </div>
        <div class="container-fluid" id="similar">

        </div>
        <div class="container-fluid">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <h3>Юридический адрес</h3>
                    <div class="form-row text-left">
                        <div class="form-group col-md-6 col-lg-4">
                            <label for="regID" class="form-check-label">Город</label>
                            <select id="regID" class="selectpicker form-control" data-live-search="true" required></select>
                        </div>
                        <div class="form-group col-md-6 col-lg-2">
                            <label for="index" class="form-check-label">Индекс</label>
                            <input type="number" id="index" class="form-control addr">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="street" class="form-check-label">Улица</label>
                            <input type="text" id="street" class="form-control addr">
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="house" class="form-check-label">Дом</label>
                            <input type="text" id="house" class="form-control addr">
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <h3>Фактический адрес</h3>
                    <div class="form-row text-left">
                        <div class="form-group col-md-6 col-lg-4">
                            <label for="regID_fact" class="form-check-label">Город</label>
                            <select id="regID_fact" class="selectpicker form-control" data-live-search="true" required></select>
                        </div>
                        <div class="form-group col-md-6 col-lg-2">
                            <label for="index_fact" class="form-check-label">Индекс</label>
                            <input type="number" id="index_fact" class="form-control addr">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="street_fact" class="form-check-label">Улица</label>
                            <input type="text" id="street_fact" class="form-control addr">
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="house_fact" class="form-check-label">Дом</label>
                            <input type="text" id="house_fact" class="form-control addr">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/ajax-bootstrap-select.min.js"></script>
<script src="js/locale/ajax-bootstrap-select.ru-RU.min.js"></script>
<script src="js/form.js"></script>
</body>
</html>