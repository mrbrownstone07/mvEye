$(function(){
    var i = 20;

    $(window).mousemove(function(e){
        var dt = new Date();
        var time = dt.getSeconds();
        console.log(time);
        // console.log(e.pageY);
            $('.single-rb').css('transform', 'rotateX(' + - i + 'deg)' + 'rotateY(' + -(e.pageY+time)*2 + 'deg)');
    });
})


