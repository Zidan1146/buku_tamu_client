$('.form').find('input, textarea, select').on('keyup blur focus', function (e) {
  
    var $this = $(this),
        label = $this.prev('label');
  
        if (e.type === 'keyup') {
              if ($this.val() === '') {
            label.removeClass('active highlight');
          } else {
            label.addClass('active highlight');
          }
      } else if (e.type === 'blur') {
          if( $this.val() === '' ) {
              label.removeClass('active highlight');
              } else {
              label.removeClass('highlight');   
              }   
      } else if (e.type === 'focus') {
        label.addClass('active highlight');
      }
  
});
  
$('.tab a').on('click', function (e) {
    
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
    
});

$('#jumlah').on('change', function (e) {
  
  jumlah = this.value;

  if (jumlah==1) {
    target = $(this).attr('href');
    
    $('.tab-content > div').not(target).hide();
    
    $(target).fadeIn(600);

    $(".tab.active").removeClass('active');
    $(".tab").not('.active').addClass('active');
  }

});

// script.js
document.addEventListener('mousemove', function(e) {
  setTimeout(() => {
    const container = document.body;
    const star = document.createElement('div');
    star.className = 'star';
    container.appendChild(star);
  
    // Set the initial position of the star
    star.style.left = `${e.pageX}px`;
    star.style.top = `${e.pageY}px`;
  
    // Set the animation for the star
    setTimeout(() => {
        star.style.transform = 'translate(-50%, 300%) scale(2)'; // Moves and grows
        star.style.opacity = '0'; // Fades out
    }, 50);
  
    // Remove the star after the animation
    setTimeout(() => {
        container.removeChild(star);
    }, 600); // Should match the longest transition time
  }, 25);
});