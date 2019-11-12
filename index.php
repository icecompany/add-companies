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
        <div class="container-fluid">
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
        </div>
        <div class="container-fluid">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <h3>Юридический адрес</h3>
                    <div class="form-row text-left">
                        <div class="form-group col-md-3 col-lg-4">
                            <label for="regID" class="form-check-label">Город</label>
                            <select id="regID" class="selectpicker form-control" data-live-search="true"></select>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <h3>Фактический адрес</h3>
                    <div class="form-row text-left">
                        <div class="form-group col-md-3 col-lg-4">
                            <label for="regID_fact" class="form-check-label">Город</label>
                            <select id="regID_fact" class="selectpicker form-control" data-live-search="true"></select>
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
<script src="js/form.js"></script>
</body>
</html>