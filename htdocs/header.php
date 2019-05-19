<header>
    <nav>
        <div class="hitem"><i class="material-icons">dehaze</i>Google news</div>
        <div class="hitem search">
            <form action="">
                <i class="material-icons">search</i>
                <input type="text"  id="search-field"placeholder="Поиск тем, мест , источников">
            </form>
        </div>
        <div class="hitem right">

           <?php  if($_SESSION['Auth']==0){ echo " <a href=\"#!\" id=\"opensing\">sing in</a>";}else{echo "<a href=\"#!\" id=\"outuser\">exit</a><a href=\"#!\" id=\"opensing\"></a>";}?></a>

            <i class="material-icons">person</i>
        </div>

    </nav>

    <div class="leftbar">
        <div class="listbar">
            <div class="itembar current" ><i class="material-icons">featured_play_list</i><a href="index.html">Главные новости</a></div>
            <div class="itembar"><i class="material-icons">person</i>Рекомендованые вам</div>
            <div class="itembar"><i class="material-icons">star_border</i>Избраное</div>
            <div class="itembar"><i class="material-icons">search</i>Сохраненные запросы</div>

            <div class="hr"></div>
            <div class="itembar"><i class="material-icons">flag</i>Украина</div>
            <div class="itembar"><i class="material-icons">public</i>В мире</div>
            <div class="itembar"><i class="material-icons">place</i>Местные</div>
            <div class="itembar"><i class="material-icons">directions_bike</i>Спорт</div>
            <div class="itembar"><i class="material-icons">accessibility</i>Выборы</div>
            <div class="hr"></div>
        </div>
    </div>
    <div>
        <div class="modal"></div>
        <div class="modal-content">
            <h2>Вход</h2>
            <form id = "auth">
                <input type="email" class="inline-input" name="login" placeholder="example@gmail.com">
                <input type="password" class="inline-input" name="password" placeholder="password">
            </form>
            <div class="info">
            </div>
            <a class="btn" id="SignIn">Sign in</a>
            <a class="btn" id="SignUp">Sign up</a>
        </div>
    </div>
</header>
