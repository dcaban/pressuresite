
// $(document).ready(function(){
//
//     console.log("hey buddy");
// });


$(document).ready(function(){
    $('.parallax').parallax();
});



$(document).ready(function(){
    $('.scrollspy').scrollSpy({
        scrollOffset: 0
    });
});

$(document).ready(function(){
    $("#menuImg").click(function(){
        $("#firstBox,#secondBox,#thirdBox,#fourthBox,#fakeHome,#firstFake,#secondFake,#thirdFake,#fourthFake,#homeImg,#close,#fakeHome,#fakeClose").addClass("openSide");
    });

    $("#firstBox,#secondBox,#thirdBox,#fourthBox,#fakeHome,#firstFake,#secondFake,#thirdFake,#fourthFake,#homeImg,#close,#fakeHome,#fakeClose").click(function(){
        $("#firstBox,#secondBox,#thirdBox,#fourthBox,#fakeHome,#firstFake,#secondFake,#thirdFake,#fourthFake,#homeImg,#close,#fakeHome,#fakeClose").removeClass("openSide");
    });
});



