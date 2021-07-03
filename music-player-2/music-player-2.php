<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="music-player-2.css">

</head>

<body>

<div class="player">

    <div class="player__header">

      <div class="player__img player__img--absolute slider">

        <button class="player__button player__button--absolute--nw playlist">

          <img src="http://physical-authority.surge.sh/imgs/icon/playlist.svg" alt="playlist-icon">

        </button>

        <button class="player__button player__button--absolute--center play">

          <img src="http://physical-authority.surge.sh/imgs/icon/play.svg" alt="play-icon">
          <img src="http://physical-authority.surge.sh/imgs/icon/pause.svg" alt="pause-icon">

        </button>

        <div class="slider__content">

          <img class="img slider__img" src="..\img\phucnguyenn_60795615_205097390464094_2841667732337502767_n.jpg" alt="cover">

        </div>

      </div>

      <div class="player__controls">

        <button class="player__button back">

          <img class="img" src="http://physical-authority.surge.sh/imgs/icon/back.svg" alt="back-icon">

        </button>
        
        <p class="player__context slider__context">

          <strong class="slider__name"></strong>
          <span class="player__title slider__title"></span>

        </p>

        <button class="player__button next">

          <img class="img" src="http://physical-authority.surge.sh/imgs/icon/next.svg" alt="next-icon">

        </button>

        <div class="progres">

          <div class="progres__filled"></div>

        </div>

      </div>

    </div>

    <ul class="player__playlist list">

      <li class="player__song">

        <img class="player__img img" src="img\81884974_3054139197938944_6775622483547521024_o.jpg" alt="cover">

        <p class="player__context">

          <b class="player__song-name">Diana</b>
          <span class="flex">

            <span class="player__title">John Le</span>
            <span class="player__song-time"></span>

          </span>

        </p>

        <audio class="audio" src="music/diana.mp3"></audio>

      </li>

    </ul>

  </div>

</div>
  
<script src="music-player-2.js"></script>

</body>
</html>