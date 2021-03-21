function typeWriter(){
  var message = document.getElementById('intro');
  
  var typewriter = new Typewriter(message, {
    loop: false,
    cursor: '|',
    delay: 100,
  });

  typewriter.typeString('hi, my name is jade')
    .start();
}