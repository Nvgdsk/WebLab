<?php session_start();
if (isset($_SESSION['Auth'])) {
    $session = $_SESSION['Auth'];
} else {
    $session = 0;
}
if($session==0){
    header('Location: index.php');
}

?>
<!doctype html>
<html lang="en">
<head>
    <?php include("htdocs/head.php"); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<meta charset="utf-8">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>AdminPanel</title>
</head>
<body>
<header>
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Admin panel</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/">News</a></li>
            </ul>
        </div>
    </nav>
</header>

<div class="container">
    <h2>
        Добавить новость
    </h2>
    <div class="row">
        <form class="col s12" name="addNews">
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Headernews" id="headerNews" name ="headernews"type="text" >
                    <label for="first_name">Header</label>
                </div>

            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input  placeholder="Some info" id="content" name = "contentnews" type="text">
                    <label for="content">Content</label>
                </div>
            </div>


        </form>
        <a class="waves-effect waves-light btn green right" id = "uploadNews">Опубликовать</a>
    </div>

</div>
</body>
<script>
$('#uploadNews').on('click',function () {
    let headernews = $('#headerNews').val();
    let content = $('#content').val();
    var news = {
        header:headernews,
        content: content

    };
    if(headernews!="" && content!=""){
    $.ajax({
        url: "../htdocs/jq_index.php",
        type: "POST",
        data: {a: 'uploadNews', news: news},
        datatype: "json",
        success: function (data) {
            $('#headerNews').val("");
            $('#content').val("");
                alert("Новость добавлена")



        }

    })}
})


</script>
</html>
