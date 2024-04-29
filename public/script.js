
$(document).ready(function() {
  $('.select2').select2({
    minimumResultsForSearch: -1,
    dropdownParent: $("#selecting") 
  });
});

setInterval(() => {
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
  
}, 100);
  
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
  aslinya = $('#field-list').children().length;

  if (jumlah==1) {
    rombongan = $('.tab.active');
    sendiri = $('.tab').not('.active');
    
    sendiri.addClass('active');
    rombongan.removeClass('active');
    
    $('#rombongan').hide();
    
    $('#sendiri').fadeIn(600);

    this.value = 2;
  }
  else{
    while (jumlah!=aslinya) {
      if (jumlah > aslinya) {
        $('#field-list').append(
          '<div class="field-wrap">'+
            '<label>'+
              'Nama'+
            '</label>'+
            '<input type="text" name="nama" required="" autocomplete="off">'+
          '</div>'
      );
      aslinya++
      $('#field-list > :last-child input').attr('name', 'nama' + "["+aslinya+"]");
      }
      if (jumlah < aslinya) {
        $('#field-list > :last-child').remove();
        aslinya--;
      }
    }
  }

});

// script.js
document.addEventListener('mousemove', function(e) {
  setTimeout(() => {
    const container = document.body;
    const star = document.createElement('div');
    star.className = 'star';
    container.appendChild(star);
    $('#wand').css({top: `${e.pageY}px`, left: `${e.pageX}px`})
  
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

document.addEventListener('click', function(e) {
  
})

$('button, input, select, a, #selecting').on('mouseover', function(e) {
  $('#wand img').css({transform: 'rotate(-30deg) translate(15px, 0px) '})
});

$('button, input, select, a, #selecting').on('mouseleave', function(e) {
  $('#wand img').css({transform: 'rotate(0deg) translate(5px, 5px)'})
});

$('.popover').click(function () {
  this.remove();
})