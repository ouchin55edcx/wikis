<?php require_once APPROOT . '/views/inc/head.php' ?>


<div class="bg-gradient-to-br from-purple-700 to-pink-500 min-h-screen flex flex-col justify-center items-center">
    <div class="bg-white rounded-lg shadow-lg p-8 max-w-md">
        <h1 class="text-4xl font-bold text-center text-purple-700 mb-8">Welcome to Wiki™ </h1>
        <form method="post" action="<?= URLROOT ?>UsersController/sign" class="space-y-6">
            <div>
                <label class="block text-gray-700 font-bold mb-2" for="username">
                    User Name
                </label>
                <input class="w-full px-4 py-2 rounded-lg border border-gray-400" id="username" name="username"
                    type="username" required>
                <!-- <input type="hidden" value="65a0030f5586f_profile.png" name="default_img"> -->

            </div>
            <div>
                <label class="block text-gray-700 font-bold mb-2" for="email">
                    Email
                </label>
                <input class="w-full px-4 py-2 rounded-lg border border-gray-400" id="email" name="email"
                    type="email" required>
            </div>
            <div>
                <label class="block text-gray-700 font-bold mb-2" for="password">
                    Password
                </label>
                <input class="w-full px-4 py-2 rounded-lg border border-gray-400" id="password" name="password"
                    type="password" required>
            </div>
            <div>
                <button class="w-full bg-purple-700 hover:bg-purple-900 text-white font-bold py-2 px-4 rounded-lg">
                    Sign_Up
                </button>
            </div>
            <div>
                <p >If you have accound <span class="underline"><a href="<?=URLROOT?>Pages/login">Loign</a></span> </p>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.querySelector('form');
        const usernameInput = document.getElementById('username');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');

        form.addEventListener('submit', function (event) {
            if (!validateUsername(usernameInput.value)) {
                alert('Invalid username format. It should contain only letters, numbers, and underscores.');
                event.preventDefault();
            }

            if (!validateEmail(emailInput.value)) {
                alert('Invalid email format.');
                event.preventDefault();
            }

            if (!validatePassword(passwordInput.value)) {
                alert('Invalid password format. It should be at least 6 characters long.');
                event.preventDefault();
            }
        });

        function validateUsername(username) {
            const regex = /^[a-zA-Z0-9_]+$/;
            return regex.test(username);
        }

        function validateEmail(email) {
            const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return regex.test(email);
        }

        function validatePassword(password) {
            // Adjust the regex as needed for your password requirements
            const regex = /^.{6,}$/;
            return regex.test(password);
        }
    });
</script>
