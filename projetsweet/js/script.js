$(function(){

  var owl = $("#owl-pizza");

  owl.owlCarousel({
      items:1,
      autoHeight:true,
      dots:false,
      autoplay:true,
      animateOut: 'fadeOut',
      loop:true,
      responsiveRefreshRate:1
  });

  $('#menu').on('click',function(){
    $('#menu').fadeOut(20,'swing')
		$('#cancel').fadeIn(20,'swing')
    $('#flexnav div#gridcenter').animate({
      'right':'0'
    })
    $('#gridright img').animate({
      'margin-right':'53%'
    })
  })

  $('#cancel, main , #carousel , footer').on('click',function(){
    $('#menu').fadeIn(20,'swing')
		$('#cancel').fadeOut(20,'swing')
    $('#flexnav div#gridcenter').animate({
      'right':'-1500px'
    })
    $('#gridright img').animate({
      'margin-right':'0'
    })
  })

  $('#tomate').on('click',function(){

    $('.frais, .monde').animate({
      'top':'350px',
      'right':'250px',
      'margin':'0'
    },600)

    $('.tomate').fadeIn(500,'swing')

    $('.tomate').animate({
      'margin':'0.5% 0.6% 0.5% 0.6%'
    })

    $('.frais, .monde').fadeOut(500,'swing')

    return false;
  })

  function frais(){
    $('.tomate, .monde').animate({
      'top':'350px',
      'right':'250px',
      'margin':'0'
    },600)

    $('.frais').fadeIn(500,'swing')

    $('.frais').animate({
      'margin':'0.5% 0.6% 0.5% 0.6%'
    })

    $('.tomate, .monde').fadeOut(500,'swing')

    return false;
  }

  $('#frais').on('click',function(){
    frais()
  })

  $('#monde').on('click',function(){

    $('.tomate, .frais').animate({
      'top':'350px',
      'right':'250px',
      'margin':'0'
    },600)

    $('.monde').fadeIn(500,'swing')

    $('.monde').animate({
      'margin':'0.5% 0.6% 0.5% 0.6%'
    })

    $('.tomate, .frais').fadeOut(500,'swing')

    return false;
  })

  $('#all').on('click', function(){

    $('.tomate, .frais, .monde').fadeIn(500,'swing')

    $('.tomate, .frais, .monde').animate({
      'margin':'0.5% 0.6% 0.5% 0.6%'
    })

  })

  $('.gridpiz', this).on('click', function(){
    pizval = $(this).attr('id');
    document.location.href="pizzas/pizza"+pizval+".php";
  })

  $('.gridbd', this).on('click', function(){
    bdval = $(this).attr('id');
    document.location.href="boissondessert/boides"+bdval+".php";
  })

  $('.ps', this).on('click', function(){
    psval = $(this).attr('id');
    document.location.href="patesandwich/patesan"+psval+".php";
  })

  $('.st', this).on('click', function(){
    stval = $(this).attr('id');
    document.location.href="saladetexmex/salamex"+stval+".php";
  })

  $('.delete', this).on("click", function(){
    delval = $(this).attr('name');
    $.ajax({
      url : '/sweetpizza/inc/change.php',
      dataType : "json",
      data:{del:delval}
    })
  })

  $('.modif', this).on('click', function(){
    valwho = $(this).attr('name');
    $('.modify'+valwho).css('display','block')
    $('.modified'+valwho).css('display','none')
    $('.Modified_button'+valwho).css('display','none')
  })

  $('.modifbutton', this).on('click',function(){
    modifval = $(this).attr('id');
    resultmodif = $('.modifvalue'+modifval).val();
    console.log(modifval)
    $.ajax({
      url : '/sweetpizza/inc/change.php',
      dataType : "json",
      data:{modifid:modifval, modifval:resultmodif}
    })
    $('.modify'+modifval).css('display','none')
    $('.modified'+modifval+', .Modified_button'+modifval).css('display','block')
    document.location.href="panier.php";
  })

  Sval = 0; Mval = 0; Feval =0; Fmval=0; Ffval = 0; Fsfval = 0; Fskval = 0; Ftsval = 0;
  SaSval =0;
  $('.hidden').css({
      'opacity':'0',
      'position':'absolute',
      'top':'0'
  })


  $('.hd1').html('<input type="number" name="senior" value ="0">')
  $('.hd2').html('<input type="number" name="mega" value ="0">')

  //pizza

  $('.S-').on('click', function(){
    Sval -=1;
    $('.S').html(Sval)
    $('.hd1').html('<input type="number" name="senior" value ="'+Sval+'">')
  })

  $('.S+').on('click', function(){
    Sval +=1;
    $('.S').html(Sval)
    $('.hd1').html('<input type="number" name="senior" value ="'+Sval+'">')
  })

  $('.M-').on('click', function(){
    Mval -=1;
    $('.M').html(Mval)
    $('.hd2').html('<input type="number" name="mega" value ="'+Mval+'">')
  })

  $('.M+').on('click', function(){
    Mval +=1;
    $('.M').html(Mval)
    $('.hd2').html('<input type="number" name="mega" value ="'+Mval+'">')
  })

  //patesandwich

  $('.PsaS-').on('click', function(){
    Sval -=1;
    $('.PsaS').html(Sval)
    $('.hd1').html('<input type="number" name="pate" value ="'+Sval+'">')
  })

  $('.PsaS+').on('click', function(){
    Sval +=1;
    $('.PsaS').html(Sval)
    $('.hd1').html('<input type="number" name="pate" value ="'+Sval+'">')
  })

  //Etudiant

  $('.FeS-').on('click', function(){
    Feval -=1;
    $('.FeS').html(Feval)
    $('.hd1').html('<input type="number" name="formstudent" value ="'+Feval+'">')
  })

  $('.FeS+').on('click', function(){
    Feval +=1;
    $('.FeS').html(Feval)
    $('.hd1').html('<input type="number" name="formstudent" value ="'+Feval+'">')
  })

  //MIdi

  $('.FmS-').on('click', function(){
    Fmval -=1;
    $('.FmS').html(Fmval)
    $('.hd2').html('<input type="number" name="formmidi" value ="'+Fmval+'">')
  })

  $('.FmS+').on('click', function(){
    Fmval +=1;
    $('.FmS').html(Fmval)
    $('.hd2').html('<input type="number" name="formmidi" value ="'+Fmval+'">')
  })

  //Family

  $('.FfS-').on('click', function(){
    Ffval -=1;
    $('.FfS').html(Ffval)
    $('.hd3').html('<input type="number" name="formfamily" value ="'+Ffval+'">')
  })

  $('.FfS+').on('click', function(){
    Ffval +=1;
    $('.FfS').html(Ffval)
    $('.hd3').html('<input type="number" name="formfamily" value ="'+Ffval+'">')
  })

  //Sweet foor

  $('.FsfS-').on('click', function(){
    Fsfval -=1;
    $('.FsfS').html(Fsfval)
    $('.hd4').html('<input type="number" name="sweetfoor" value ="'+Fsfval+'">')
  })

  $('.FsfS+').on('click', function(){
    Fsfval +=1;
    $('.FsfS').html(Fsfval)
    $('.hd4').html('<input type="number" name="sweetfoor" value ="'+Fsfval+'">')
  })

  //Sweet kid

  $('.FskS-').on('click', function(){
    Fskval -=1;
    $('.FskS').html(Fskval)
    $('.hd5').html('<input type="number" name="sweetkid" value ="'+Fskval+'">')
  })

  $('.FskS+').on('click', function(){
    Fskval +=1;
    $('.FskS').html(Fskval)
    $('.hd5').html('<input type="number" name="sweetkid" value ="'+Fskval+'">')
  })

  //TWO SWEET

  $('.FtsS-').on('click', function(){
    Ftsval -=1;
    $('.FtsS').html(Ftsval)
    $('.hd6').html('<input type="number" name="twosweet" value ="'+Ftsval+'">')
  })

  $('.FtsS+').on('click', function(){
    Ftsval +=1;
    $('.FtsS').html(Ftsval)
    $('.hd6').html('<input type="number" name="twosweet" value ="'+Ftsval+'">')
  })

  //saladetexmex

  $('.SaS-').on('click', function(){
    SaSval -=1;
    $('.SaS').html(SaSval)
    $('.hd1').html('<input type="number" name="salade" value ="'+SaSval+'">')
  })

  $('.SaS+').on('click', function(){
    SaSval +=1;
    $('.SaS').html(SaSval)
    $('.hd1').html('<input type="number" name="salade" value ="'+SaSval+'">')
  })

  //dessertboissons

  $('.PsS-').on('click', function(){
    SaSval -=1;
    $('.PsS').html(SaSval)
    $('.hd1').html('<input type="number" name="boisson" value ="'+SaSval+'">')
  })

  $('.PsS+').on('click', function(){
    SaSval +=1;
    $('.PsS').html(SaSval)
    $('.hd1').html('<input type="number" name="boisson" value ="'+SaSval+'">')
  })


});
