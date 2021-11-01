(function () {
  var selectedTab = window.gSelectedTab;
  var postersArr = window.gPostersArr;
  var heartsArr = [];
  var storageKey = 'fabby_posters_wishlist';
  window.gHeartsCount = 0;

  $(document).ready(function () {
    init();
  });

  $(document).on('click', '.toggle-wishlist', function (e) {
    e.preventDefault();
    toggleHeart(e);
  });

  function init() {
    heartsArr = getCookie(storageKey);
    window.gHeartsCount = heartsArr.length;
    displayHeartsList();
  }

  function toggleHeart(e) {
    var $target = $(e.target);
    $target = $target.hasClass('.toggle-wishlist') ? $target : $target.closest('.toggle-wishlist');
    var id = Number($target.data('id'));
    var index = heartsArr.findIndex((h) => {
      return id == Number(h.id);
    });

    if (index < 0) {
      postersArr = [...postersArr, ...window.gPostersArr];
      var heart = postersArr.find((p) => {
        return p.id == id;
      });

      heartsArr.push(heart);
      addToHeart(heart);
    } else {
      heartsArr.splice(index, 1);
      removeFromHeart(id);
    }

    setCookie(storageKey, heartsArr, 30);
  }

  function addToHeart(heart) {
    window.gHeartsCount += 1;
    displayheartsCount();

    var elems = $(`[data-id=${heart.id}]`);

    elems.each(function (i, elem) {
      activeHeart(elem);
    });
    drawWish(heart);
  }

  function removeFromHeart(id) {
    window.gHeartsCount -= 1;
    displayheartsCount();

    var elems = $(`[data-id=${id}]`);

    elems.each(function (i, elem) {
      var $heartElem = $(elem).find('.fa-heart');
      $heartElem.removeClass('fas');
      $heartElem.addClass('far');
      $heartElem.css('color', '#ccc');
    });

    $(`.wishlist [data-id=${id}]`).closest('.image-frame').remove();
  }
  
  function displayHeartsList() {
    displayheartsCount();
    drawWishlist();

    heartsArr.forEach(function (h) {
      activeHeart(`[data-id=${h.id}]`);
    });
  }
  
  function displayheartsCount() {
    $('.wishlist-count').text(window.gHeartsCount);
    $('.modal-content').removeClass('empty');
    if (window.gHeartsCount < 1) {
      disableHeart('.btn-open-wishlist-modal, #btn_favo_wishlist_modal');

      $('#btn_favo_wishlist_modal').find('.wishlist-count').text('');
      if (selectedTab === 'favo') {
        $('.empty-wishlist').css('display', 'flex');
        $('.modal-content').addClass('empty');
        $('#wishlist_modal .modal-footer').css('display', 'none');
        $('.wishlist').hide();
      }
    } else {
      activeHeart('.btn-open-wishlist-modal, #btn_favo_wishlist_modal');
      $('.empty-wishlist').css('display', 'none');
      // $('#wishlist_modal .modal-footer').css('display', 'flex');
      // $('.wishlist').show();
    }
  }
  
  function activeHeart(selector) {
    var $elem = isString(selector) ? $(`${selector}`) : $(selector);
    $elem.find('.fa-heart').removeClass('far').addClass('fas').css('color', '#FFC0CB');
  }

  function disableHeart(selector) {
    var $elem = isString(selector) ? $(`${selector}`) : $(selector);

    $elem.find('.fa-heart').removeClass('fas').addClass('far').css('color', '#ccc');
  }

  function drawWishlist() {
    $('.wishlist').html('');
    heartsArr.forEach(function (h) {
      drawWish(h);
    });
  }

  function drawWish(item) {
    if (!item) {
      return;
    }

    var str = $('.wishlist').html();
    str += `<li class="image-frame">
      <div class="content">
        <a href="#"><img src="${item.img}"></a>
      </div>
      <div class="info">
        <div class="info-text">
          <p class="info-title">${item.name}</p>
          <p>£a${item.price}</p>
        </div>
        <div class="image-wishlist">
          <a class="toggle-wishlist" data-id="${item.id}" href="#" title="Remove from Wish List">
            <i class="fas fa-heart"></i>
          </a>
        </div>
      </div>
    </li>`;

    $('.wishlist').html(str);
  }
})();