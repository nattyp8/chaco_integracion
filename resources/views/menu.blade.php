<x-layouts.apphome>

    <div class="home-container">

        <!-- IZQUIERDA -->
        <div class="hero-section">


            <div class="hero-content">
                <h1>
                    CHACO <br>
                    PARAGUAYO
                </h1>

                <div class="hero-line"></div>

                <p>
                    Explora los módulos temáticos del proyecto.
                    Selecciona el tema que deseas visualizar.
                </p>
            </div>

        </div>

        <!-- DERECHA -->
        <div class="cards-section">


            <a href="" class="topic-card blue">
                <div class="icon-wrapper">
                    <i class="fa-solid fa-map-location-dot"></i>
                </div>

                <div>
                    <h3>Visit Paraguay</h3>
                    <p>
                        Cultura, turismo y puntos de interés del Paraguay.
                    </p>
                </div>
            </a>

            <a href="{{route('vistaPrincipal')}}" class="topic-card green">
                <div class="icon-wrapper">
                    <i class="fa-solid fa-leaf"></i>
                </div>

                <div>
                    <h3>Ecorregiones</h3>
                    <p>
                        Clima, zonas climáticas y ecosistemas del Chaco Paraguayo.
                    </p>
                </div>
            </a>

            <a href="#" class="topic-card orange">
                <div class="icon-wrapper">
                    <i class="fa-solid fa-timeline"></i>
                </div>

                <div>
                    <h3>El Chaco en Seis Períodos</h3>
                    <p>
                        Evolución histórica y transformaciones del territorio chaqueño.
                    </p>
                </div>
            </a>

            <a href="{{route('home')}}" class="topic-card red">
                <div class="icon-wrapper">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>

                <div>
                    <h3>Guerras del Chaco</h3>
                    <p>
                        Contexto histórico, acontecimientos y visualización interactiva.
                    </p>
                </div>
            </a>

            <a href="#" class="topic-card purple climate-card">
                <div class="icon-wrapper">
                    <i class="fa-solid fa-cloud-sun-rain"></i>
                </div>

                <div>
                    <h3>Escenarios Climáticos</h3>
                    <p>
                        Proyecciones y escenarios futuros del cambio climático en el Chaco.
                    </p>
                </div>
            </a>

            <div id="pulse-wrapper-vi">
                    <div id="pulse">
                        <span></span>
                        <span></span>
                    </div>
                </div>

        </div>

        <div class="hero-circle"></div>
    </div>

</x-layouts.apphome>
