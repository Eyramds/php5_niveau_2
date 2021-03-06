<head>
    <title>Salles</title>
</head>


<div class="site-content">
    <div id="head-title">
        <h2 style="font-size:32px;">Salles</h2>
    </div>
    <div id="separation-bar"></div>
    <div class="quick-tools">
        <div id="space-icons">
            <a href="#" class="fas fa-plus fa-lg"></a>
            <a href="#" class="fas fa-trash-alt fa-lg"></a>
        </div>
    </div>

    <div class="page_wrapper_flex">
        <?php
            $max = 6;
            for($i=0; $i < $max; $i++): 
        ?> 
            <div class="box">
                <div class="head-wrapper">
                    <span class="head-title-salle">Gaumont Pathé</span>
                    <span class="ville-salle">Paris 6ème</span>
                </div>
                <div class="bottom-wrapper">
                    <span class="nombre-salle">Nombre de salles :</span>
                    <span class="number-room-info">13</span>
                </div>
                <a href="#" class="button-red">Sélectionner</a>
            </div>
        <?php endfor; ?>
    </div>
</div>