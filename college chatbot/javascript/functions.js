function cursorAnimation() {
   for (i = 0; i < 1000; i++) {
        $('.cursor').animate({
            opacity: 0
        }, 'fast', 'swing').animate({
            opacity: 1
        }, 'fast', 'swing');
   }
}






