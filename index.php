<?php session_start();
if (isset($_SESSION['Auth'])) {
    $session = $_SESSION['Auth'];
} else {
    $session = 0;
}

?>
<!DOCTYPE html>
<html>
<head>
    <?php include("htdocs/head.php"); ?>
    <title>Title</title>

</head>
<body>
<div class="wrapper">
    <?php include("htdocs/header.php"); ?>

    <div class="content">
        <div class="main-news">

            <div class="itemnews">
                <div><h4><a href="item-news.html">Выбор для юго-востока. Пойдут ли Вилкул и Мураев по пути Андрея
                            Садового</a></h4>
                    <ul>
                        <li>Розенко: Средняя зарплата в Украине может составить 12 тыс. гривен</li>
                    </ul>
                </div>

                <img src="https://picsum.photos/700/900/?random" alt="/">
            </div>
            <div class="itemnews">
                <div><h4><a href="item-news.html">Выбор для юго-востока. Пойдут ли Вилкул и Мураев по пути Андрея
                            Садового</a></h4>
                    <ul>
                        <li>Розенко: Средняя зарплата в Украине может составить 12 тыс. гривен</li>
                    </ul>
                </div>

                <img src="https://picsum.photos/700/900/?random" alt="/">
            </div>
            <div class="itemnews">
                <div><h4><a href="item-news.html">Выбор для юго-востока. Пойдут ли Вилкул и Мураев по пути Андрея
                            Садового</a></h4>
                    <ul>
                        <li>Розенко: Средняя зарплата в Украине может составить 12 тыс. гривен</li>
                    </ul>
                </div>

                <img src="https://picsum.photos/700/900/?random" alt="/">
            </div>
            <div class="itemnews">
                <div><h4><a href="item-news.html">Выбор для юго-востока. Пойдут ли Вилкул и Мураев по пути Андрея
                            Садового</a></h4>
                    <ul>
                        <li>Розенко: Средняя зарплата в Украине может составить 12 тыс. гривен</li>
                    </ul>
                </div>

                <img src="https://picsum.photos/700/900/?random" alt="/">
            </div>

        </div>
        <div class="in-news frame">
            <h4>В новостях</h4>
            <div class="hr"></div>
            <div class="tag-news">
                <a href="#!" class="title">Зеленский</a>
                <a href="#!" class="title">PHP 8.2</a>
                <a href="#!" class="title">Новый ректор в КПИ</a>

            </div>
        </div>
    </div>
</div>

<script src="js/header.js">

</script>
<script>
    $(function () {


        function checkfield() {
            let countField = 0;
            $('#auth input').each(function (i, elem) {
                if ($(this).val() == '') {
                    alert('Заполните все поля');
                    countField = 1;

                }
                if ($(this).val().length < 3) {
                    alert('Длина поля должна быть больше 3 симвлов');
                    countField = 1;

                }
            });
            return countField;
        }

        $("#SignUp").on('click', function () {

            let countField = checkfield();
            let email = $("#auth input[name='login']").val();
            let password = $("#auth input[name='password']").val();

            if (countField == 0) {
                $.ajax({
                    url: "../htdocs/jq_index.php",
                    type: "POST",
                    data: {email: email, password: password, a: 'reg'},
                    success: function (data) {
                        $('.info').html(data);

                    },

                });
            }
        })
        $("#SignIn").on('click', function () {

            let countField = checkfield();
            let email = $("#auth input[name='login']").val();
            let password = $("#auth input[name='password']").val();

            if (countField == 0) {
                $.ajax({
                    url: "../htdocs/jq_index.php",
                    type: "POST",
                    data: {email: email, password: password, a: 'auth'},
                    success: function (data) {
                        $('.info').html(data);
                        location.reload();

                    }
                });
            }
        });
        $("#outuser").on('click', function () {
            $.ajax({
                url: "../htdocs/jq_index.php",
                type: "POST",
                data: {a: 'out'},
                success: function (data) {


                    location.reload();


                }

            });
        })
        $.ajax({
            url: "../htdocs/jq_index.php",
            type: "POST",
            data: {a: 'loadNews'},
            datatype: "json",
            success: function (data) {

                let a = "";


                $.each(JSON.parse(data), function (i, item) {
                    a += " <div class=\"itemnews\"><div><h4>" + item.header + "</h4>" +
                        "<ul>" +
                        "<li>" +
                                item.text +
                        "</li>" +
                        "</ul>"+

                        "</div>" +
                        '<img src="https://picsum.photos/700/900/?random" alt="/">'+
                        "</div>"

                });
                $('.main-news').html(a);

            }

        })
    })
</script>
</body>
</html>