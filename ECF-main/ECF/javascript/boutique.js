console.log('hello')


$(function() {
    $('#price_range').jRange({
        from: 0,
        to: 500000,
        step: 100,
        format: '$%s USD',
        width: 300,
        showLabels: true,
        isRange: true
    });
    $('#kilometre_range').jRange({
        from: 0,
        to: 500000,
        step: 100,
        format: '$%s USD',
        width: 300,
        showLabels: true,
        isRange: true
    });
    $('#annee_range').jRange({
        from: 0,
        to: 2024,
        step: 100,
        format: '$%s USD',
        width: 300,
        showLabels: true,
        isRange: true
    });
});

function filterProducts() {
  var price_range = $('#price_range').val();
  var kilometre_range = $('#kilometre_range').val();
  var annee_range = $('#annee_range').val();
  $.ajax({
      type: 'POST',
      url: './filter.php',
      data: {price_range:price_range, kilometre_range:kilometre_range, annee_range:annee_range} ,
      beforeSend: function () {
          $('.wrapper').css("opacity", ".5");
      },
      success: function (html) {
          $('#productContainer').html(html);
          $('.wrapper').css("opacity", "");
      }
  });
}


(function (){
  const rangePrix = document.querySelector('#price_range');
  const global = document.querySelector('.global-1');

  const elem = document.createElement('span');
  global.appendChild(elem);

  elem.textContent = rangePrix.value;

  rangePrix.addEventListener('change', () => {
      elem.textContent = rangePrix.value;
  });

   
})();
(function (){
  const rangeKilometre = document.querySelector('#kilometre_range');
  const global = document.querySelector('.global-2');

  const elem = document.createElement('span');
  global.appendChild(elem);

  elem.textContent = rangeKilometre.value;

  rangeKilometre.addEventListener('change', () => {
      elem.textContent = rangeKilometre.value;
  });

   
})();
(function (){
  const rangeAnnee = document.querySelector('#annee_range');
  const global = document.querySelector('.global-3');

  const elem = document.createElement('span');
  global.appendChild(elem);

  elem.textContent = rangeAnnee.value;

  rangeAnnee.addEventListener('change', () => {
      elem.textContent = rangeAnnee.value;
  });

   
})();

// 'price_range='+price_range