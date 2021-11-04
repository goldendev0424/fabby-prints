<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
  <title>Fabby Prints</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap">

  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/template.css">

  <style>
    .container {
      max-width: 100vw;
      padding-inline: 30px;
      position: relative;
    }

    .slick-button-prev,
    .slick-button-next,
    .slick-button-prev:hover,
    .slick-button-next:hover {
      color: #333;
      font-size: 24px;
    }

    .slick-disabled {
      opacity: 0.5;
    }

    .slick-prev:before,
    .slick-next:before {
      content: '';
    }

    .slick-button-prev {
      left: 0;
    }

    .slick-button-next {
      right: 0;
    }

    .slick-track {
      display: flex;
    }

    .image-frame.slick-slide {
      margin: 0.5em 1em;
      height: auto;
      display: flex;
    }

    .image-frame img {
      border: 0.2em solid #000;
      padding: 1em;
      margin-bottom: 0.5em;
      width: 100%;
    }

    .image-wishlist {
      float: right;
      font-size: 1.2em;
      color: #999;
    }

    .image-wishlist i {
      color: #ccc;
    }

    @media only screen and (max-width: 480px) {

      .slick-button-prev,
      .slick-button-next {
        display: none;
      }
    }
  </style>
</head>

<body>

  <br>
  <br>

  <!-- slick slider -->
  <div class="container">
    <div class="slider">
      <div class="image-frame">
        <div class="content">
          <a href="#"><img src="BackUp-B4_D/work3/assets/img/100.jpg"></a>
        </div>
        <div class="info">
          <div class="info-text">
            <p class="info-title">Name1</p>
            <p>Price</p>
          </div>
          <div class="image-wishlist">
            <a class="toggle-wishlist" data-id="$favs_json_id[$x]" href="#" title="Add to Wish List"><i class="far fa-heart"></i></a>
          </div>
        </div>
      </div>

      <div class="image-frame">
        <div class="content">
          <a href="#"><img src="BackUp-B4_D/work3/assets/img/101.jpg"></a>
        </div>
        <div class="info">
          <div class="info-text">
            <p class="info-title">Name2</p>
            <p>Price</p>
          </div>
          <div class="image-wishlist">
            <a class="toggle-wishlist" data-id="$favs_json_id[$x]" href="#" title="Add to Wish List"><i class="far fa-heart"></i></a>
          </div>
        </div>
      </div>

      <div class="image-frame">
        <div class="content">
          <a href="#"><img src="BackUp-B4_D/work3/assets/img/102.jpg"></a>
        </div>
        <div class="info">
          <div class="info-text">
            <p class="info-title">Name3</p>
            <p>Price</p>
          </div>
          <div class="image-wishlist">
            <a class="toggle-wishlist" data-id="$favs_json_id[$x]" href="#" title="Add to Wish List"><i class="far fa-heart"></i></a>
          </div>
        </div>
      </div>

      <div class="image-frame">
        <div class="content">
          <a href="#"><img src="BackUp-B4_D/work3/assets/img/103.jpg"></a>
        </div>
        <div class="info">
          <div class="info-text">
            <p class="info-title">Name4</p>
            <p>Price</p>
          </div>
          <div class="image-wishlist">
            <a class="toggle-wishlist" data-id="$favs_json_id[$x]" href="#" title="Add to Wish List"><i class="far fa-heart"></i></a>
          </div>
        </div>
      </div>

      <div class="image-frame">
        <div class="content">
          <a href="#"><img src="BackUp-B4_D/work3/assets/img/100.jpg"></a>
        </div>
        <div class="info">
          <div class="info-text">
            <p class="info-title">Name5</p>
            <p>Price</p>
          </div>
          <div class="image-wishlist">
            <a class="toggle-wishlist" data-id="$favs_json_id[$x]" href="#" title="Add to Wish List"><i class="far fa-heart"></i></a>
          </div>
        </div>
      </div>

      <div class="image-frame">
        <div class="content">
          <a href="#"><img src="BackUp-B4_D/work3/assets/img/100.jpg"></a>
        </div>
        <div class="info">
          <div class="info-text">
            <p class="info-title">Name6</p>
            <p>Price</p>
          </div>
          <div class="image-wishlist">
            <a class="toggle-wishlist" data-id="$favs_json_id[$x]" href="#" title="Add to Wish List"><i class="far fa-heart"></i></a>
          </div>
        </div>
      </div>

      <div class="image-frame">
        <div class="content">
          <a href="#"><img src="BackUp-B4_D/work3/assets/img/100.jpg"></a>
        </div>
        <div class="info">
          <div class="info-text">
            <p class="info-title">Name7</p>
            <p>Price</p>
          </div>
          <div class="image-wishlist">
            <a class="toggle-wishlist" data-id="$favs_json_id[$x]" href="#" title="Add to Wish List"><i class="far fa-heart"></i></a>
          </div>
        </div>
      </div>

      <div class="image-frame">
        <div class="content">
          <a href="#"><img src="BackUp-B4_D/work3/assets/img/100.jpg"></a>
        </div>
        <div class="info">
          <div class="info-text">
            <p class="info-title">Name8</p>
            <p>Price</p>
          </div>
          <div class="image-wishlist">
            <a class="toggle-wishlist" data-id="$favs_json_id[$x]" href="#" title="Add to Wish List"><i class="far fa-heart"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="slick-button-prev slick-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
    <div class="slick-button-next slick-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
  <!-- End slick slider -->

  <br>
  <br>
  <br>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/2e71692c1b.js" crossorigin="anonymous"></script>

  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script src="/js/web-model.js"></script>
</body>

</html>