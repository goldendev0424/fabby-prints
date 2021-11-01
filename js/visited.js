(function () {
  var poster = window.gPostersArr.length > 0 ? window.gPostersArr[0] : {} ;
  var heartsArr = [];
  var storageKey = 'fabby_posters_visited';
  var wishListStorageKey = 'fabby_posters_wishlist';
  var visitedPosters = [];

  $(document).ready(() => {
    init();
  });

  function init() {
    visitedPosters = getCookie(storageKey);
    heartsArr = getCookie(wishListStorageKey);
    window.gPostersArr = [...window.gPostersArr, ...visitedPosters, ...heartsArr];
    if(isDetailPage()) {
      add();
    }

    displayList();
    displayCount();
  }

  function displayCount() {
    var count = visitedPosters.length;
    $('.btn-open-wishlist-modal[data-btn-name="visited"]').find('span').text(count);
    $('#btn_visited_wishlist_modal i.far').append(`<span class="visited-count">${count}</span>`);
  }

  function displayList() {
    visitedPosters.forEach(function(vp) {
      drawVisited(vp);
    });
  }

  function drawVisited(item) {
    if(!item) {
      return;
    }

    var isAddedHearts = heartsArr.findIndex((h) => {
      return Number(item.id) === Number(h.id);
    });

    $('.visited-list').html(function(i, current) {
      current += `
        <li class="image-frame">
          <div class="content">
            <a href="#"><img src="${item.img}"></a>
          </div>
          <div class="info">
            <div class="info-text">
              <p class="info-title">${item.name}</p>
              <p>£${item.price}</p>
            </div>
            <div class="image-wishlist"><a class="toggle-wishlist" data-id="${item.id}" href="#" title="Remove from Wish List">
              <i class="${isAddedHearts > -1 ? 'fas' : 'far'} fa-heart"></i></a></div>
          </div>
        </li>`;
      return current;
    });
  }

  function isDetailPage() {
    var index = window.location.pathname.search('product_display_item.php');
    
    if(index > -1) {
      return true;
    }
    return false;
  }

  function add() {
    // If is added, don't add again.
    if(checkIsAdded()) return;

    visitedPosters.push(poster);
    setCookie(storageKey, visitedPosters);
  }

  function checkIsAdded() {
    var index = visitedPosters.findIndex((vp) => {
      return vp.id == poster.id;
    });

    return index > -1;
  }
}
)()