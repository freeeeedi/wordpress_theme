<?php
/**
 * Template Name: Регистрация пользователя
 */

get_header();
?>  
<main class="main">
    <div class="popup">
        <div class="popup__title">
            Регистрация
        </div>
        <div class="popup__form-container">
            <form method="post" class="popup__form form" id="registration">
                <div class="form__input-container">
                    <input type="email" name="email" id="email" class="form__input" placeholder="Email">
                    <p class="text-error"></p>
                </div>
                <div class="form__input-container">
                    <input type="text" name="login" id="login" class="form__input" placeholder="Логин">
                    <p class="text-error"></p>
                </div>
                <div class="form__input-container">
                    <input type="password" name="password" id="password" class="form__input form__password"
                        placeholder="Пароль">
                    <p class="text-error">Пароль должен быть не менее 6 символов </p>
                </div>
                <p class="popup__text"><span>*</span> Обязательные поля</p>
                <div class="popup__actions">
                    <input class="form__submit" type="submit" value="Зарегистироваться">
                    <div class="popup__actions-other">
                        <a href="/auth" class="authorization">Авторизоваться</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

<?php
get_footer();
?>