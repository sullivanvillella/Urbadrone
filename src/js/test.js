$(document).ready(function(){
    $('.first_div').mousemove(function(e){
        var x = -(e.pageX + this.offsetLeft) / 100;
        var y = -(e.pageY + this.offsetTop) / 300;
        $(this).css('background-position', x + '% ' + y + '%');
    });
});
