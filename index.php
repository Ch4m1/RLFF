<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Integrantes</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,900">
  <style>
    *:before, *:after {
      box-sizing: border-box;
    }
    body {
      background: linear-gradient(to bottom, rgba(140,122,122,1) 0%, rgba(175,135,124,1) 65%, rgba(175,135,124,1) 100%) fixed;
      background: url('Assets/fondo.png') no-repeat center center fixed;
      background-size: cover;
      font: 14px/20px "Lato", Arial, sans-serif;
      color: #9E9E9E;
      margin-top: 30px;
    }
    .slide-container {
      margin: auto;
      width: 600px;
      text-align: center;
    }
    .wrapper {
      padding: 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
    }
    .wrapper:focus {
      outline: 0;
    }
    
    /* Media query para pantallas más pequeñas */
    @media (max-width: 900px) {
      .item {
        flex: 1 1 calc(50% - 40px); /* Ajusta para 2 columnas menos margen */
      }
    }
    /* Media query para pantallas muy pequeñas */
    @media (max-width: 600px) {
      .item {
        flex: 1 1 calc(100% - 40px); /* Ajusta para 1 columna menos margen */
      }
    }
    
    /* Estilos para las tarjetas de equipo */
    .clash-card {
      background: rgba(50, 50, 50, 0.75);
      background: 
        radial-gradient(circle at 30% 30%, rgba(0, 0, 0, 0.75), transparent 70%), 
        radial-gradient(circle at 70% 70%, rgba(0, 0, 0, 0.75), transparent 70%), 
        linear-gradient(135deg, rgba(0, 0, 0, 0.75), rgba(100, 100, 100, 0.75));
      border-radius: 14px;
      padding: 20px;
      margin-bottom: 40px;
      text-align: center;
      box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
      position: relative;
      width: 200px;
      height: 370px;
      backdrop-filter: blur(10px); /* Añade desenfoque */
    }
    .clash-card__image {
      position: relative;
      margin-bottom: 35px;
    }
    .clash-card__image img {
      max-width: 100%;
    }
    .clash-card__level {
      font-size: 12px;
      font-weight: 700;
      color: #2e2e2e;
    }
    .clash-card__unit-name {
      font-size: 20px;
      font-weight: 900;
      margin-bottom: 5px;
      color: white; /* Color del nombre del equipo */
    }
    .clash-card__unit-description {
      margin-bottom: 30px;
      font-size: 14px;
      font-weight: 400;
      color: #a5a5a5; /* Color de la descripción */
    }
    .clash-card__unit-stats {
      display: flex;
      justify-content: space-between;
      font-size: 14px;
      font-weight: 700;
      text-align: center;
      border-top: 1px solid #e5e5e5;
      padding-top: 20px;
    }
    .one-third {
      width: 33%;
    }
    .one-third .stat {
      font-size: 20px;
      font-weight: 900;
      margin-bottom: 5px;
      color: #ffffff; /* Color de los iconos */
    }
    .one-third .stat-value {
      font-size: 12px;
      font-weight: 400;
      color: #a5a5a5; /* Color de los valores */
    }
    .one-third.no-border {
      border-left: none;
    }
    .clash-card__mini-label {
      position: absolute;
      top: 10px;
      left: 10px;
      width: 50px;
      height: 50px;
    }
    
    .duo {
      width: 80%;
      height: auto;
    }
    .icon {
      width: 50px;
      height: 50px;
      display: inline-block;
      background-size: cover;
      filter: brightness(0%);
    }
.defeats-icon {
    background-image: url('iconos/derrotas.png');
    width: 50px;
    height: 50px;
    display: inline-block;
    background-size: cover;
    filter: brightness(0%);
}

.kills-icon {
    background-image: url('iconos/kills.png');
    width: 50px;
    height: 50px;
    display: inline-block;
    background-size: cover;
    filter: brightness(0%);
}

.deaths-icon {
    background-image: url('iconos/muertes.png');
    width: 50px;
    height: 50px;
    display: inline-block;
    background-size: cover;
    filter: brightness(0%);
}

.victories-icon {
    background-image: url('iconos/victorias.png');
    width: 50px;
    height: 50px;
    display: inline-block;
    background-size: cover;
    filter: brightness(0%);
}
    
    /* Colores específicos para cada equipo */
    .clash-card--black-wolves {
      background-color: #000000; /* Negro */
    }
    .clash-card--team-rex {
      background-color: #008000; /* Verde */
    }
    .clash-card--fire-lions {
      background-color: #FFA500; /* Naranja */
    }
    .clash-card--liberators {
      background-color: #00FFFF; /* Celeste */
    }
    .clash-card--polaris {
      background-color: #FFFFFF; /* Blanco */
    }
    .clash-card--rufus-equus {
      background-color: #FF0000; /* Rojo */
    }
    .clash-card--runners {
      background-color: #0000FF; /* Azul */
    }
    .clash-card--aguila-del-sol {
      background-color: #FFFF00; /* Amarillo */
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <!-- Black Wolves Card -->
    <div class="clash-card clash-card--black-wolves">
      <div class="clash-card__image clash-card__image--black-wolves">
      </div>
      <img src="Assets/BlackWolves.png" alt="Black Wolves Label" class="clash-card__mini-label">
      <div class="clash-card__level clash-card__level--black-wolves"></div>
      <div class="clash-card__unit-name">Black Wolves</div>
      <img class="duo" src="Assets/Base.png" alt="Black Wolves Duo.png" />
      <div class="clash-card__unit-description">
        Member1 | Member2
      </div>
      <div class="clash-card__unit-stats clash-card__unit-stats--black-wolves clearfix">
        <div class="one-third">
          <div class="stat kills-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
        <div class="one-third">
          <div class="stat deaths-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
        <div class="one-third no-border">
          <div class="stat victories-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
        <div class="one-third no-border">
          <div class="stat defeats-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
      </div>
    </div> <!-- end clash-card black-wolves -->

    <!-- Team Rex Card -->
    <div class="clash-card clash-card--team-rex">
      <div class="clash-card__image clash-card__image--team-rex">
      </div>
      <img src="Assets/TeamRex.png" alt="Team Rex Label" class="clash-card__mini-label">
      <div class="clash-card__level clash-card__level--team-rex"></div>
      <div class="clash-card__unit-name">Team Rex</div>
      <img class="duo" src="Assets/Base.png" alt="Team Rex Duo.png" />
      <div class="clash-card__unit-description">
        Member1 | Member2
      </div>
      <div class="clash-card__unit-stats clash-card__unit-stats--team-rex clearfix">
        <div class="one-third">
          <div class="stat kills-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
        <div class="one-third">
          <div class="stat deaths-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
        <div class="one-third no-border">
          <div class="stat victories-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
        <div class="one-third no-border">
          <div class="stat defeats-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
      </div>
    </div> <!-- end clash-card team-rex -->

    <!-- Fire Lions Card -->
    <div class="clash-card clash-card--fire-lions">
      <div class="clash-card__image clash-card__image--fire-lions">
      </div>
      <img src="Assets/FireLions.png" alt="Fire Lions Label" class="clash-card__mini-label">
      <div class="clash-card__level clash-card__level--fire-lions"></div>
      <div class="clash-card__unit-name">Fire Lions</div>
      <img class="duo" src="Assets/Base.png" alt="Fire Lions Duo.png" />
      <div class="clash-card__unit-description">
        Member1 | Member2
      </div>
      <div class="clash-card__unit-stats clash-card__unit-stats--fire-lions clearfix">
        <div class="one-third">
          <div class="stat kills-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
        <div class="one-third">
          <div class="stat deaths-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
        <div class="one-third no-border">
          <div class="stat victories-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
        <div class="one-third no-border">
          <div class="stat defeats-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
      </div>
    </div> <!-- end clash-card fire-lions -->

    <!-- Liberators Card -->
    <div class="clash-card clash-card--liberators">
      <div class="clash-card__image clash-card__image--liberators">
      </div>
      <img src="Assets/Liberators.png" alt="Liberators Label" class="clash-card__mini-label">
      <div class="clash-card__level clash-card__level--liberators"></div>
      <div class="clash-card__unit-name">Liberators</div>
      <img class="duo" src="Assets/Base.png" alt="Liberators Duo.png" />
      <div class="clash-card__unit-description">
        Member1 | Member2
      </div>
      <div class="clash-card__unit-stats clash-card__unit-stats--liberators clearfix">
        <div class="one-third">
          <div class="stat kills-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
        <div class="one-third">
          <div class="stat deaths-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
        <div class="one-third no-border">
          <div class="stat victories-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
        <div class="one-third no-border">
          <div class="stat defeats-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
      </div>
    </div> <!-- end clash-card liberators -->

    <!-- Polaris Card -->
    <div class="clash-card clash-card--polaris">
      <div class="clash-card__image clash-card__image--polaris">
      </div>
      <img src="Assets/Polaris.png" alt="Polaris Label" class="clash-card__mini-label">
      <div class="clash-card__level clash-card__level--polaris"></div>
      <div class="clash-card__unit-name">Polaris</div>
      <img class="duo" src="Assets/Base.png" alt="Polaris Duo.png" />
      <div class="clash-card__unit-description">
        Member1 | Member2
      </div>
      <div class="clash-card__unit-stats clash-card__unit-stats--polaris clearfix">
        <div class="one-third">
          <div class="stat kills-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
        <div class="one-third">
          <div class="stat deaths-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
        <div class="one-third no-border">
          <div class="stat victories-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
        <div class="one-third no-border">
          <div class="stat defeats-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
      </div>
    </div> <!-- end clash-card polaris -->

    <!-- Rufus Equus Card -->
    <div class="clash-card clash-card--rufus-equus">
      <div class="clash-card__image clash-card__image--rufus-equus">
      </div>
      <img src="Assets/RufusEquus.png" alt="Rufus Equus Label" class="clash-card__mini-label">
      <div class="clash-card__level clash-card__level--rufus-equus"></div>
      <div class="clash-card__unit-name">Rufus Equus</div>
      <img class="duo" src="Assets/Base.png" alt="Rufus Equus Duo.png" />
      <div class="clash-card__unit-description">
        Member1 | Member2
      </div>
      <div class="clash-card__unit-stats clash-card__unit-stats--rufus-equus clearfix">
        <div class="one-third">
          <div class="stat kills-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
        <div class="one-third">
          <div class="stat deaths-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
        <div class="one-third no-border">
          <div class="stat victories-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
        <div class="one-third no-border">
          <div class="stat defeats-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
      </div>
    </div> <!-- end clash-card rufus-equus -->

    <!-- Runners Card -->
    <div class="clash-card clash-card--runners">
      <div class="clash-card__image clash-card__image--runners">
      </div>
      <img src="Assets/Runners.png" alt="Runners Label" class="clash-card__mini-label">
      <div class="clash-card__level clash-card__level--runners"></div>
      <div class="clash-card__unit-name">Runners</div>
      <img class="duo" src="Assets/Base.png" alt="Runners Duo.png" />
      <div class="clash-card__unit-description">
        Member1 | Member2
      </div>
      <div class="clash-card__unit-stats clash-card__unit-stats--runners clearfix">
        <div class="one-third">
          <div class="stat kills-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
        <div class="one-third">
          <div class="stat deaths-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
        <div class="one-third no-border">
          <div class="stat victories-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
        <div class="one-third no-border">
          <div class="stat defeats-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
      </div>
    </div> <!-- end clash-card runners -->

    <!-- Aguila Del Sol Card -->
    <div class="clash-card clash-card--aguila-del-sol">
      <div class="clash-card__image clash-card__image--aguila-del-sol">
      </div>
      <img src="Assets/AguilaDelSol.png" alt="Aguila Del Sol Label" class="clash-card__mini-label">
      <div class="clash-card__level clash-card__level--aguila-del-sol"></div>
      <div class="clash-card__unit-name">Aguila Del Sol</div>
      <img class="duo" src="Assets/Base.png" alt="Aguila Del Sol Duo.png" />
      <div class="clash-card__unit-description">
        Member1 | Member2
      </div>
      <div class="clash-card__unit-stats clash-card__unit-stats--aguila-del-sol clearfix">
        <div class="one-third">
          <div class="stat kills-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
        <div class="one-third">
          <div class="stat deaths-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
        <div class="one-third no-border">
          <div class="stat victories-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
        <div class="one-third no-border">
          <div class="stat defeats-icon"></div>
          <div class="stat-value">0|0</div>
        </div>
      </div>
    </div> <!-- end clash-card aguila-del-sol -->
  </div> <!-- end wrapper -->
</body>
</html>
