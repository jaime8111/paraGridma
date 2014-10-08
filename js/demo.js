$(function () {
    "use strict";

    $("#mainMenu").activateMenuOnScroll();

    $(".ri_loader").responsiveImages();

    $(".customFileInput").customFileInput();

    // Load up some JS
    head.load("js/vendor/syntaxhighlighter/scripts/shCore.js", "js/vendor/syntaxhighlighter/scripts/shBrushJScript.js", "js/vendor/syntaxhighlighter/styles/shCoreDefault.css", function() {
        // Call a function when done
        SyntaxHighlighter.all();

        // Load up some CSS
        //head.load("js/vendor/syntaxhighlighter/styles/shCoreDefault.css");
    });


});


