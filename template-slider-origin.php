<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
  <title>Fabby Prints</title>

  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script><![endif]-->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  <link rel="stylesheet" href="css/master.css">

  <style>
    .swiper-container {
      max-width: 1155px;
      width: calc(100vw - 120px);
      margin: auto;
    }

    .swiper-container .image-frame {
      width: 92%;
    }

    .swiper {
      position: relative;
      width: calc(100vw - 100px);
    }

    .swiper .swiper-button-prev, .swiper .swiper-button-next {
      color: #333;
    }

    .swiper .swiper-button-prev:after, .swiper .swiper-button-next:after {
      font-size: 24px;
    }

    .swiper .swiper-button-prev:focus, .swiper .swiper-button-next:focus {
      outline: none;
    }

    .image-frame {
      width: 22%;
      font-size: 1em;
      display: inline-block;
      margin: 0.5em;
    }

    .image-frame img {
      border: 0.2em solid #000;
      padding: 1em;
      margin-bottom: 0.5em;
    }

    .image-wishlist {
      float: right;
      font-size: 1.2em;
      color: #999;
    }

    .image-wishlist i {
      color: #ccc;
    }

    @media only screen and (max-width: 50em) {
      .image-frame {
        width: 40%;
      }
    }

    @media only screen and (max-width: 30em) {
      .image-frame {
        width: 90%;
      }

      #wishlist_modal .image-frame {
        width: 40%;
      }
    }

    @media only screen and (max-width: 60em) {
      .swiper-container {
        width: calc(100vw - 50px);
      }
    }
  </style>
</head>

<body>

<br>
<br>

<!-- Swiper slider -->
<div class="swiper">
  <div class="swiper-container">
    <div class="swiper-wrapper">


      <div class='swiper-slide'>
        <div class='image-frame'>
          <a href='#'><img src='BackUp-B4_D/work3/assets/img/100.jpg'></a>
          <div class='image-wishlist'><a class='toggle-wishlist' data-id='$favs_json_id[$x]' href='#'
                                         title='Add to Wish List'><i class='far fa-heart'></i></a></div>
          <p>Name1</p>
          <p>Price</p>
        </div>
      </div>

      <div class='swiper-slide'>
        <div class='image-frame'>
          <a href='#'><img src='BackUp-B4_D/work3/assets/img/101.jpg'></a>
          <div class='image-wishlist'><a class='toggle-wishlist' data-id='$favs_json_id[$x]' href='#'
                                         title='Add to Wish List'><i class='far fa-heart'></i></a></div>
          <p>Name2</p>
          <p>Price</p>
        </div>
      </div>

      <div class='swiper-slide'>
        <div class='image-frame'>
          <a href='#'><img src='BackUp-B4_D/work3/assets/img/102.jpg'></a>
          <div class='image-wishlist'><a class='toggle-wishlist' data-id='$favs_json_id[$x]' href='#'
                                         title='Add to Wish List'><i class='far fa-heart'></i></a></div>
          <p>Name3</p>
          <p>Price</p>
        </div>
      </div>

      <div class='swiper-slide'>
        <div class='image-frame'>
          <a href='#'><img src='BackUp-B4_D/work3/assets/img/103.jpg'></a>
          <div class='image-wishlist'><a class='toggle-wishlist' data-id='$favs_json_id[$x]' href='#'
                                         title='Add to Wish List'><i class='far fa-heart'></i></a></div>
          <p>Name4</p>
          <p>Price</p>
        </div>
      </div>

      <div class='swiper-slide'>
        <div class='image-frame'>
          <a href='#'><img src='BackUp-B4_D/work3/assets/img/100.jpg'></a>
          <div class='image-wishlist'><a class='toggle-wishlist' data-id='$favs_json_id[$x]' href='#'
                                         title='Add to Wish List'><i class='far fa-heart'></i></a></div>
          <p>Name5</p>
          <p>Price</p>
        </div>
      </div>

      <div class='swiper-slide'>
        <div class='image-frame'>
          <a href='#'><img src='BackUp-B4_D/work3/assets/img/100.jpg'></a>
          <div class='image-wishlist'><a class='toggle-wishlist' data-id='$favs_json_id[$x]' href='#'
                                         title='Add to Wish List'><i class='far fa-heart'></i></a></div>
          <p>Name6</p>
          <p>Price</p>
        </div>
      </div>

      <div class='swiper-slide'>
        <div class='image-frame'>
          <a href='#'><img src='BackUp-B4_D/work3/assets/img/100.jpg'></a>
          <div class='image-wishlist'><a class='toggle-wishlist' data-id='$favs_json_id[$x]' href='#'
                                         title='Add to Wish List'><i class='far fa-heart'></i></a></div>
          <p>Name7</p>
          <p>Price</p>
        </div>
      </div>


    </div>
  </div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>
<!-- End Swiper slider -->

<br>
<br>
<br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/2e71692c1b.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="js/web-model.js"></script>
</body>

</html>