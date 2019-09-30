function menu(){
    let scroll = $(window).scrollTop();
    let header = $('.header header .bg');
    if(scroll>0){
        header.addClass('fixed');
    }else{
        header.removeClass('fixed');
    }
}

function clickBurger(){
    let btn = $('.btn-menu');
    let navbar = $('.navbar');
    let header = $('.header header .bg');
    let fixedblock = $('.header header .fixedblock');
    btn.click(function(){
        
        btn.prev().toggleClass('openlogo');
        navbar.slideToggle(10);
        btn.toggleClass('open');
        header.toggleClass('fixed mobile','easeInQuad');
        fixedblock.toggleClass('mobilefixedblock','easeInQuad');
        
       
    });
}

function answerOpen(){
    let btn = $('.question .circle');
    for(let i=0;i<btn.length;i++){
        btn.eq(i).click(function(){
            let lines = btn.eq(i).children('.arrow-lines');
            let answer = btn.eq(i).parents('.list-item').find('.answer');
            console.log(answer);
            let answerLine = btn.eq(i).parents('.list-item').find('.answer_line');
            lines.toggleClass('open');
            answer.slideToggle();
            answerLine.toggleClass('openLine');
        });
    }
}

function resize() {
    let $image = $(".image_animate");
    let $wrapper = $(".top-image");
    let basWidth = 929;
    let basHeight = 629;
    let transformRule = '';
    let wrapperHeight = $wrapper.height();
    let scale = Math.min($wrapper.width() / basWidth, wrapperHeight / basHeight);
    let realyHeightImage = $image.height()/(Math.max(basWidth/ $wrapper.width() , basHeight /wrapperHeight  )); 
    let procentTranslateY = 50;
    let windowWidth = $(window).outerWidth();
    if(windowWidth>768){ 
        procentTranslateY = (100 - realyHeightImage/( wrapperHeight/100))/2 +50;
    }
    transformRule = "translate(-50%, -"+procentTranslateY+"%) scale(" + scale + ")";

    $image.css({
        transform: transformRule
    });
}

function sizeImageBlock(){
    let imageBlock = $('.infoflex .image_block');
    let imageSize = [];
    for(let i=0;i<imageBlock.length;i++){
        imageSize.push(imageBlock.eq(i).height());
    }
    let size =0;
    imageSize.sort(function(a,b){
        if(a>b){
            size = a;
            return -1;
        }
    });
    for(let i=0;i<imageBlock.length;i++){
        imageBlock.eq(i).css('height', size);
    }
}

function resizeBrain(){
    let $image = $(".animate");
    let $wrapper = $(".brain-image");
    let basWidth = 1920;
    let basHeight = 1048;
    let transformRule = '';
    let wrapperHeight = $wrapper.height();
    let wrapperWidth = $wrapper.width();
    let scale = Math.min(wrapperWidth / basWidth, wrapperHeight / basHeight);
    let realyHeightImage = $image.height()/(Math.max(basWidth/ $wrapper.width() , basHeight /wrapperHeight  )); 
    //let procentTranslateY = (100 - realyHeightImage/( wrapperHeight/100))/2 +50;
    transformRule = "translate(-50%, -"+50+"%) scale(" + scale + ")";
    let height = basHeight*scale;
    let section = $('.brain');
    let margin = 430;
    $wrapper.css({
        height : height
    });

    section.css({
        marginBottom: margin*scale
    });

    $image.css({
        transform: transformRule
    });

}

$(window).scroll(function(){
    menu();
});

$(document).ready(function(){
    clickBurger();
    resize();
    answerOpen();
    sizeImageBlock();
    resizeBrain();
});

$(window).resize(function () {
    resize();
    resizeBrain();
});
$(window).on("orientationchange", function () {
    resize();
    resizeBrain();
});
