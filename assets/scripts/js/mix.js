console.log('son qua');



var mixer = mixitup('.mix-container', {
    selectors: {
        target: '.items'
    },

    animation: {
        "duration": 600,
        "nudge": true,
        "reverseOut": false,
        "effects": "scale(0.01) translateX(20%) translateZ(-100px)"
    }

});