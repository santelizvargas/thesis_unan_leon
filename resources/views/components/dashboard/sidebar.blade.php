<main class="sidebar">
    <section class="sidebar__logo">
        <i class="bi bi-grid-fill toggle"></i>
        <figure class="logo">
            <h4 class="link__text">MONITORIZACIÓN</h4>
        </figure>
    </section>

    <section class="links__container">
        <ul class="sidebar__links">
            <li class="link__item">
                <a href="/">
                    <i class="bi bi-graph-down-arrow sidebar__icons"></i>
                    <span class="link__text">Monitorización</span>
                </a>
            </li>
            <li class="link__item">
                <a href="{{route('users')}}">
                    <i class="bi bi-people-fill sidebar__icons"></i>
                    <span class="link__text">Usuarios</span>
                </a>
            </li>
            <li class="link__item">
                <a href="{{route('settings')}}">
                    <i class="bi bi-gear-fill sidebar__icons"></i>
                    <span class="link__text">Ajustes</span>
                </a>
            </li>
        </ul>

        <ul class="sidebar__footer">
            <li class="link__item">
                <a href="#">
                    <i class="bi bi-box-arrow-left sidebar__icons"></i>
                    <span class="link__text">Logout</span>
                </a>
            </li>
            <li class="link__item mode">

                <div class="switch__toggle">
                    <span class="switch"></span>
                </div>
                <span class="mode__text">Light mode</span>

                <div class="sun__moon">
                    <i class="bi bi-sun sidebar__icons"></i>
                    <i class="bi bi-moon sidebar__icons"></i>
                </div>
            </li>
        </ul>
    </section>
</main>