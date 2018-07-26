
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
        $("#firstBox,#secondBox,#thirdBox,#fourthBox,#fakeHome,#firstFake,#secondFake,#thirdFake,#fourthFake,#homeImg,#close,#fakeHome,#closeFake").addClass("openSide");
    });

    $("#firstBox,#secondBox,#thirdBox,#fourthBox,#fakeHome,#firstFake,#secondFake,#thirdFake,#fourthFake,#homeImg,#close,#fakeHome,#closeFake").click(function(){
        $("#firstBox,#secondBox,#thirdBox,#fourthBox,#fakeHome,#firstFake,#secondFake,#thirdFake,#fourthFake,#homeImg,#close,#fakeHome,#closeFake").removeClass("openSide");
    });
});



