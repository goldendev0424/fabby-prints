(function () {
  var selectedTab = '';
  var heartsCount = window.gHeartsCount;

  var swiper = null;
  var swiperOpt = {
    slidesPerView: 1,
    spaceBetween: 30,
    freeMode: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 10
      },
      640: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      850: {
        slidesPerView: 4,
        spaceBetween: 30
      }
    },
    on: {
      init: function () {
        checkSwiperArrow();
      },
      resize: function () {
        checkSwiperArrow();
      }
    }
  };

  window.gSelectedTab = selectedTab;
  $(document).ready(function () {
    init();
  });

  $(window).on('resize', function () {
    if (window.innerWidth > 960) {
      var $target = $('.has-dropdown .fas');
      toggleNavDropdown($target, true);
    }
  });

  $('.has-dropdown').on('click', 'a', function (e) {
    var target = e.target;

    if (!!target.className && target.className.includes('fas')) {
      e.preventDefault();
      toggleNavDropdown(target);
    }
  });

  $('.btn-open-wishlist-modal').on('click', function (e) {
    e.preventDefault();
    var $target = $(e.target);
    $target = $target.hasClass('.btn-open-wishlist-modal') ? $target : $target.closest('.btn-open-wishlist-modal');

    var btnName = $target.data('btnName');

    if (openHeartModal()) {
      switchModalTab(btnName);
    }
  });

  $('#btn_close_wishlist_modal').on('click', function () {
    closeHeartModal();
  });

  $('#btn_visited_wishlist_modal').on('click', function () {
    switchModalTab('visited');
  });

  $('#btn_favo_wishlist_modal').on('click', function () {
    switchModalTab('favo');
  });

  function init() {
    swiper = new Swiper('.swiper-container', swiperOpt);
  }

  function checkSwiperArrow() {
    var $swiperPrev = $('.swiper-button-prev');
    var $swiperNext = $('.swiper-button-next');
    var $swiperContainer = $('.swiper-container');
    var containerMarginLeft = Number($swiperContainer.css('margin-left').replace('px', ''));

    var left = containerMarginLeft - 20;
    var right = Number($swiperContainer.css('margin-right').replace('px', '')) - 35;


    $swiperPrev.css('left', left);
    $swiperNext.css('right', right);

    if (window.innerWidth > 960) {
      $swiperPrev.css('display', 'block');
      $swiperNext.css('display', 'block');
    } else {
      $swiperPrev.css('display', 'none');
      $swiperNext.css('display', 'none');
    }
  }

  function toggleNavDropdown(target, isExpanded = null) {
    isExpanded = isExpanded ? isExpanded : $(target).hasClass('fa-chevron-up');
    var $containerNode = $(target.closest('.has-dropdown'));

    if (isExpanded) {
      $(target).removeClass('fa-chevron-up');
      $(target).addClass('fa-chevron-down');
      $containerNode.find('.dropdown-container').hide();
      return;
    }

    $(target).addClass('fa-chevron-up');
    $(target).addClass('fa-chevron-down');
    $containerNode.find('.dropdown-container').show();
  }

  function openHeartModal() {
    // $('#wishlist_modal, #wishlist_modal_background').css('top', window.scrollY).addClass('opened-modal');
    $('#wishlist_modal, #wishlist_modal_background').addClass('opened-modal');
    $(document.body).css('overflow', 'hidden');
    return true;
  }

  function closeHeartModal() {
    $('#wishlist_modal, #wishlist_modal_background').removeClass('opened-modal');
    $(document.body).css('overflow', 'auto');
  }

  function switchModalTab(tabName) {
    selectedTab = tabName;
    $target = $(`#btn_${tabName}_wishlist_modal`);

    $('.selected-tab').removeClass('selected-tab');
    $target.addClass('selected-tab');
    $('#wishlist_modal .modal-body').removeClass('empty');
    $('.modal-content').removeClass('empty');

    if (tabName === 'visited') {
      $('.empty-wishlist, .wishlist, .modal-footer').css('display', 'none');
      $('.visited-list').css('display', 'flex');
      return;
    }

    if (tabName === 'favo' && heartsCount > 0) {
      $('.wishlist').css('display', 'flex');
      $('.modal-footer').css('display', 'flex');
      $('.visited-list').hide();
      return;
    }

    if (heartsCount < 1) {
      $('#wishlist_modal .modal-body').addClass('empty');
      $('.empty-wishlist').css('display', 'flex');
      $('.modal-content').addClass('empty');
      $('.visited-list').hide();
      $('.wishlist').hide();
    }
  }
})();