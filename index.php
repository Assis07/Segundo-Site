<!DOCTYPE html>
<html>
    <head>
        <?php
        include_once './head.php';
        ?>
    </head>
    <body>
        <?php
        include_once './topo.php';
        ?>
        <div id="slider">
            <ul class="slides">
                <input type="radio" name="radio-btn" id="img-1" checked />
                <li class="slide-container">
                    <div class="slide">
                        <img src="imagens/casa1.jpg" alt="casa" />
                    </div>
                    <div class="nav">
                        <label for="img-6" class="prev">&#x2039;</label>
                        <label for="img-2" class="next">&#x203a;</label>
                    </div>
                </li>

                <input type="radio" name="radio-btn" id="img-2" />
                <li class="slide-container">
                    <div class="slide">
                        <img src="imagens/apartamento.jpg" alt="apartamento" />
                    </div>
                    <div class="nav">
                        <label for="img-1" class="prev">&#x2039;</label>
                        <label for="img-3" class="next">&#x203a;</label>
                    </div>
                </li>

                <input type="radio" name="radio-btn" id="img-3" />
                <li class="slide-container">
                    <div class="slide">
                        <img src="imagens/casa2.jpg" alt="casa2" />
                    </div>
                    <div class="nav">
                        <label for="img-2" class="prev">&#x2039;</label>
                        <label for="img-4" class="next">&#x203a;</label>
                    </div>
                </li>

                <input type="radio" name="radio-btn" id="img-4" />
                <li class="slide-container">
                    <div class="slide">
                        <img src="imagens/apartamento2.jpg" alt="apartamento2" />
                    </div>
                    <div class="nav">
                        <label for="img-3" class="prev">&#x2039;</label>
                        <label for="img-5" class="next">&#x203a;</label>
                    </div>
                </li>

                <input type="radio" name="radio-btn" id="img-5" />
                <li class="slide-container">
                    <div class="slide">
                        <img src="imagens/casacompiscina.jpg" alt="casa com piscina" />
                    </div>
                    <div class="nav">
                        <label for="img-4" class="prev">&#x2039;</label>
                        <label for="img-6" class="next">&#x203a;</label>
                    </div>
                </li>
                <li class="nav-dots">
                    <label for="img-1" class="nav-dot" id="img-dot-1"></label>
                    <label for="img-2" class="nav-dot" id="img-dot-2"></label>
                    <label for="img-3" class="nav-dot" id="img-dot-3"></label>
                    <label for="img-4" class="nav-dot" id="img-dot-4"></label>
                    <label for="img-5" class="nav-dot" id="img-dot-5"></label>
                </li>
            </ul>

        </div>
        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>
