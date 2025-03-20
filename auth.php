<?php
/**
 * Template Name: Авторизация пользователя
 */

get_header();
?>  
<main class="main">
    <div class="popup">
        <div class="popup__title">
            Авторизация
        </div>
        <div class="popup__form-container">
            <form method="post" class="popup__form form" id="authorization">
                <div class="form__input-container">
                    <input type="text" name="login" id="login" class="form__input" placeholder="Логин">
                    <p class="text-error">Неверный логин или пароль</p>
                </div>
                <div class="form__input-container">
                    <input type="password" name="password" id="password" class="form__input form__password"
                        placeholder="Пароль">
                </div>
                <div class="popup__actions">
                    <input class="form__submit" type="submit" value="Войти">
                    <div class="popup__actions-other">
                        <a href="/registr" class="regestration">Зарегистироваться</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

<?php
get_footer();
?>