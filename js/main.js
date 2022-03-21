var cart = {}; // корзина

function init() {
    //вычитуем файл goods.json
    // $.getJSON("books.json", goodsOut);
}

function goodsOut(data) {
    // вывод на страницу
    console.log(data);
    var out='';
    for (var key in data) {
        // out +='<div class="cart">';
        // out +='<p class="name">'+data[key].name+'</p>';
        // out += '<img src="images/'+data[key].img+'" alt="">';
        // out +='<div class="cost">'+data[key].cost+'</div>';
        // out +='<button class="add-to-cart">Купить</button>';
        // out +='</div>';
        //---------
        out +='<div class="cart">';
        out +=`<p class="name">${data[key].name}</p>`;
        out +=`<img src="images/${data[key].img}" alt="">`;
        out +=`<div class="cost">${data[key].cost}</div>`;
        out +=`<button class="add-to-cart" data-id="${key}">Купить</button>`;
        out +='</div>';
    }
    $('.goods-out').html(out);
    $('.add-to-cart').on('click', addToCart);
}

function addToCart(event) {
// console.log(event.target.id);
      $.ajax({
    url: 'php/add_to_cart.php',
    method: 'get',
    dataType: 'html',
    data: {text: event.target.id},
    success: function(data){
      if ($('#cart_counter_id').length) {
        $('.cart_counter').text(data)
        popUp()
      }
      else {
        $('.header_menu').append('<div id="cart_counter_id" class="cart_counter"></div>')
        $('.cart_counter').text(data)
        popUp()
      }
    }

    })
}

function delFromCart() {
  $.ajax({
url: 'php/del_from_cart.php',
method: 'get',
dataType: 'html',
data: {text: event.target.id},
success: function(data){
  location.reload();
}

});
}

function ClearCart() {
  $.ajax({
    url: 'php/clear_cart.php',
    method: 'get',
    dataType: 'html',
    data: {text: 'Данные успешно удалены'},
    success: function(data){
      console.log(data);
      $('.cart_block').replaceWith('<p style="text-align:center;">Ваша корзина пуста, передийте в магазин для выбора товаров: <a href="catalog.php">Магазин</a></p>')
      $('#cart_counter_id').remove()
      }

});
}

function addToFavorite(event) {
  $.ajax({
    url: 'php/add_to_favorites.php',
    method: 'get',
    dataType: 'html',
    data: {text: event.target.id},
    success: function(data){
    if (data == 'false') {
      window.location.href = '../login/login.php'
    }
    else {
      if ($('#fav_counter_id').length) {
        $('#fav_counter_id').text(data)
        // popUp()
      }
      else {
        $('.profile_info').append('<div id="fav_counter_id" class="cart_counter"></div>')
        $('#fav_counter_id').text(data)
        // popUp()
      }
    }

}

})
}

function delFromFavorites() {
  $.ajax({
    url: 'php/del_from_fav.php',
    method: 'get',
    dataType: 'html',
    data: {text: event.target.id},
    success: function(data){
  location.reload();
}

});
}

function clearFavorites() {
  $.ajax({
    url: 'php/clear_fav.php',
    method: 'get',
    dataType: 'html',
    data: {text: 'Данные успешно удалены'},
    success: function(data){
      console.log(data);

      $('.favorites_list').replaceWith('<p style="text-align:center; margin-top:10px;">Тут ничего нет, перейдите в магазин для выбора товаров: <a href="catalog.php">Магазин</a></p>')
      $('#fav_counter_id').remove()
      }

});
}

function addFavToCart() {
  $.ajax({
url: 'php/add_fav_to_cart.php',
method: 'get',
dataType: 'html',
data: {text: event.target.id},
success: function(data){
  if ($('#cart_counter_id').length) {
    $('.cart_counter').text(data)
    popUp()
  }
  else {
    $('.header_menu').append('<div id="cart_counter_id" class="cart_counter"></div>')
    $('.cart_counter').text(data)
    popUp()
  }
  $('.favorites_list').replaceWith('<p style="text-align:center; margin-top:10px;">Тут ничего нет, передийте в магазин для выбора товаров: <a href="catalog.php">Магазин</a></p>')
  $('#fav_counter_id').remove()

}

})
}

function add1FavToCart() {
  $.ajax({
url: 'php/add_1fav_to_cart.php',
method: 'get',
dataType: 'html',
data: {text: event.target.id},
success: function(data){
  location.reload();
}

})
}

function Filter() {
  $.each($('.block_book_catalog'),function(index,element) {
    $(element).css('display','inline-block')
    })
    let allPrices = $('.block_book_catalog')
    let ganre = $('.filter_book option:selected').attr('id');
    let priceFrom = +$('.price_from').val();
    let priceTo = +$('.price_to').val();
   // console.log(ganre,priceTo,priceFrom);

    if (ganre != undefined || priceTo != 0 || priceFrom != 0) {
      $('.reset').removeClass('hidden');
    }

$.each($('.block_book_catalog'),function(index,element) {

  if (ganre != undefined && ganre != $(element).attr('id')) {
    $(element).css('display','none')
  }


})
$.each($('.price_catalog'),function (index,element) {
  let price = +$(element).attr('id')
  // console.log(price);
  // console.log(price,priceFrom);
  // console.log(price <= priceFrom);
  if (priceFrom != '' && price <= priceFrom) {
    allPrices[index].style.display = 'none'
  }

  if (priceTo != '' && price >= priceTo) {
    allPrices[index].style.display = 'none'
  }
})
}

function Reset() {
  $.each($('.block_book_catalog'),function(index,element) {
    $('.block_book_catalog').css('display','inline-block')
    })

    $('.filter_book option:first').prop('selected', true);
    $('.price_from').val('')
    $('.price_to').val('')
    $('.reset').addClass('hidden');
}

function popUp() {
  $('.header_menu').append('<div class="popup_message">Товар упешно добавлен в корзину</div>')
  setTimeout(() => {  $('.popup_message').remove() }, 1000);
}

$('.search_book_btn').on('click',function () {
  console.log('Check!')
    $('.search_book_input').val('')
    $('.search_book_btn').removeClass('search_book_btn_active')
    $('.block_book_catalog').css('display','inline-block')
})

let names = $('.block_book_catalog')
let namesArr = [ ]
for (var i = 0; i < names.length; i++) {
  namesArr.push(names[i].textContent.toLowerCase())
}

    $('.search_book_input').keyup(function(){
        Reset()
        let l = this.value.length;
        if(l>0){
          $('.search_book_btn').addClass('search_book_btn_active')

            $('.block_book_catalog').css('display','none')

            for(let i=0;i<namesArr.length;i++){

              for (let a = 0; a < namesArr[i].length - l; a++) {
                let _ = namesArr[i].split('').slice(a,a+l).join('');
                if(_==this.value.toLowerCase()){
                  $('.block_book_catalog')[i].style.display = 'inline-block'
                }
              }
            }

        }
        else {
          $('.search_book_btn').removeClass('search_book_btn_active')
          $('.block_book_catalog').css('display','inline-block')
        }
    })
