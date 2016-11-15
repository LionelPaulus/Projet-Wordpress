var counterThds = new Counter(document.querySelector('[data-js="counter-thousands"]')),
counterHuns = new Counter(document.querySelector('[data-js="counter-hundreds"]')),
counterTens = new Counter(document.querySelector('[data-js="counter-tens"]')),
counterOnes = new Counter(document.querySelector('[data-js="counter-ones"]'));
  var count = 1990;

  function Counter(el) {
    var current = el.querySelector('[data-js="current"]'),
        next = el.querySelector('[data-js="next"]'),
        count,
        timeout;

    function update(value) {
      if(count === value) { return; }
      count = value;
      next.innerHTML = count;
      el.classList.add('is-changing');
      window.clearTimeout(timeout);
      timeout = window.setTimeout(function() {
        current.innerHTML = next.innerHTML;
        el.classList.remove('is-changing');
      }, 210);
    }
    
    return {
      update: update
    };
  }

  function increment() {
    count ++;

    var caract = count.toString().split('');

    
    var thds = caract[0];
    var huns = caract[1];
    var tens = caract[2];
    var ones = caract[3];


    counterThds.update(thds);
    counterHuns.update(huns);
    counterTens.update(tens);
    counterOnes.update(ones);
    
    setTimeout(increment, Math.random()*1200);
  }

  setTimeout(increment, 1000);