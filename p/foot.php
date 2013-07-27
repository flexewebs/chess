<script>
document.write('<script src=' +
('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
'.js><\/script>')
</script>
<script src="js/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script src="js/ui.js"></script>
<script src="js/foundation/foundation.interchange.js"></script>
<script src="js/foundation/foundation.abide.js"></script>
<script src="js/foundation/foundation.dropdown.js"></script>
<script src="js/foundation/foundation.placeholder.js"></script>
<script src="js/foundation/foundation.forms.js"></script>
<script src="js/foundation/foundation.alerts.js"></script>
<script src="js/foundation/foundation.magellan.js"></script>
<script src="js/foundation/foundation.reveal.js"></script>
<script src="js/foundation/foundation.tooltips.js"></script>
<script src="js/foundation/foundation.clearing.js"></script>
<script src="js/foundation/foundation.cookie.js"></script>
<script src="js/foundation/foundation.joyride.js"></script>
<script src="js/foundation/foundation.orbit.js"></script>
<script src="js/foundation/foundation.section.js"></script>
<script src="js/foundation/foundation.topbar.js"></script>
<script>
    $(document).foundation();
    $(".square img").draggable();
    $(".gutter").droppable();
    
    // 350 and 250 -> width and height off div CONTENER or you can change this drag //and drop zone
    // make div position:absolute
    var start = {x:0,y:0};
    document.addEventListener('touchstart', function(event) { 
    check=0;
    var touch = event.touches[0];
    start.x = event.touches[0].pageX;
    start.y = event.touches[0].pageY;
     }, false);   

    var check =0;
    // prevent scroll and zoom  
    document.addEventListener('touchmove', function(event) {
       event.preventDefault(); // fix site
    var Pleft = parseInt(getElementById("ONTENER").style.left);
    var Ptop = parseInt(getElementById("ONTENER").style.top);
    var touch = event.touches[0];
    var offset = {};
    offset.x = start.x - event.touches[0].pageX;
    offset.y = start.y - event.touches[0].pageY;
    if (check==0 && touch.pageX >  Pleft && touch.pageX < Pleft+350 && touch.pageY > Ptop && touch.pageY <Ptop + 250) {
     // set 
     document.getElementById("CONTENER").style.left = Pleft - (offset.x/9) + "px";
     document.getElementById("CONTENER").style.top = Ptop - (offset.y/9)  + "px";
    } else {
    check =1;
    }
    }, false);  
</script>
</body>
</html>
