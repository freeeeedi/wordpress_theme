"use strict"

$(document).ready(function () {

    $('#registration').submit(function(e) {

        e.preventDefault();

        let password = $('#password');
        
        if (password.val().length < 6) {
            password.siblings('.text-error').css('display', 'block');
            return;
        } else {
            password.siblings('.text-error').css('display', 'none');
        }

        let formData = $(this).serialize() + '&action=registration';

        $.post(window.ajax.url, formData, function(response) {
            if (response === 'success') {
                window.location.href = '/';
            } else {
                alert('Ошибка регистрации!');
            }
        });
    });

    $('#authorization').submit(function(e) {

        e.preventDefault();

        let errorText = $('#login').siblings('.text-error');

        let formData = $(this).serialize() + '&action=authorization';

        $.post(window.ajax.url, formData, function(response) {
            if (response === 'success') {
                window.location.href = '/';
            } else {
                errorText.css('display', 'block');
            }
        });
    });

    /**
     * Поиск по каждому нажатию клавиши от пользователя с таймаутом на ввод
     */
    
    let searchTimeout;

    $('#search-input').keyup(function(e) {

        clearTimeout(searchTimeout);
        
        e.preventDefault();
        
        let searchQuery = $(this).val().trim();
        let resultContainer = $('#search-result');

        if (searchQuery.length === 0) {
            resultContainer.empty();
            return;
        }
        
        searchTimeout = setTimeout(function() {
            $.post(
                window.ajax.url,
                {
                    action: 'search',
                    search: searchQuery
                },
                function(response) {

                    resultContainer.empty();

                    response.forEach(element => {
                        resultContainer.append(`<h3 class="search-form__result-element">${element}</h2>`);
                    });

                }
            );
        }, 300);
    });
});