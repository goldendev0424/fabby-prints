(function () {
  var selectedTab = '';

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
    $('.slider').slick({
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      prevArrow: $('.slick-button-prev'),
      nextArrow: $('.slick-button-next'),
      responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false
        }
      }]
    });
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
    if (tabName === 'favo' && window.gHeartsCount > 0) {
      $('.wishlist').css('display', 'flex');
      $('.modal-footer').css('display', 'flex');
      $('.visited-list').hide();
      return;
    }

    if (window.gHeartsCount < 1) {
      $('#wishlist_modal .modal-body').addClass('empty');
      $('.empty-wishlist').css('display', 'flex');
      $('.modal-content').addClass('empty');
      $('.visited-list').hide();
      $('.wishlist').hide();
    }
  }
})();