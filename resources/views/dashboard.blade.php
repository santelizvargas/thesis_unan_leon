<x-dashboard.layout>
    <p class="dashboard__title">Dashboard</p>

    <section class="cards">
        <article class="card">
            <p class="card__title">Paslama</p>
            <div class="statistics">
                <span class="turtles">
                <i class="bi bi-shield-fill-plus"></i>
                    74,4k
                </span>
                <div class="progress__bar">
                    <span class="progress__value">130</span>
                </div>
            </div>
        </article>
        <article class="card">
            <p class="card__title">Torita</p>
            <div class="statistics">
                <span class="turtles">
                <i class="bi bi-shield-fill-plus"></i>
                    357
                </span>
                <div class="progress__bar">
                    <span class="progress__value">65</span>
                </div>
            </div>
        </article>
        <article class="card">
            <p class="card__title">Carey</p>
            <div class="statistics">
                <span class="turtles">
                <i class="bi bi-shield-fill-plus"></i>
                    0
                </span>
                <div class="progress__bar">
                    <span class="progress__value">0</span>
                </div>
            </div>
        </article>
        <article class="card">
            <p class="card__title">Tora</p>
            <div class="statistics">
                <span class="turtles">
                <i class="bi bi-shield-fill-plus"></i>
                    350
                </span>
                <div class="progress__bar">
                    <span class="progress__value">56</span>
                </div>
            </div>
        </article>
    </section>

    <!---- Charts -->

    <div class="temperature__charts">
        <article class="chart__area chart">
            <p class="chart__title">Registros</p>
            <section id="records"></section>
        </article>
        <article class="chart__radial chart">
            <p class="chart__title">Temperatura</p>
            <section id="temperature"></section>
        </article>
    </div>

    <!--<section class="charts__container">
        <article class="chart">
            <p class="chart__title">Semana 01</p>
            <section id="firstWeek"></section>
        </article>

        <article class="chart">
            <p class="chart__title">Semana 02</p>
            <section id="secondWeek"></section>
        </article>

        <article class="chart">
            <p class="chart__title">Semana 03</p>
            <section id="thirdWeek"></section>
        </article>
    </section>-->

</x-dashboard.layout>