<x-layout.layout>

    <header class="header__login">
        <img src="/public/images/logo.png" class="nav__logo" alt="logo">
    </header>

    <form action="#" class="form__login">
        <h2 class="form__title">Iniciar Sesión</h2>
        <section class="form__inputs">
            <input type="text" class="form__text input" id="username" placeholder="Usuario">
            <input type="password" class="form__password input" id="password" placeholder="Contraseña">
            <article class="form__checkbox">
                <input type="checkbox" name="check">
                <label for="check">Recordar Contraseña</label>
            </article>
            <input type="submit" value="Iniciar Sesión" class="form__submit">
            <span class="forgot__password span">Olvidé mi contraseña</span>
            <span class="create__account span">Crear cuenta</span>
        </section>
    </form>

</x-layout.layout>