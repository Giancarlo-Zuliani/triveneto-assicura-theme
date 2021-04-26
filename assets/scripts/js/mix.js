var mixer;

function init_mixer() {

    mixer = mixitup('.mix-container', {
        selectors: {
            target: '.items'
        },

        animation: {
            "duration": 600,
            "nudge": true,
            "reverseOut": false,
            "effects": "scale(0.01) translateX(20%) translateZ(-100px)"
        },
        callbacks: {
            onMixEnd: function(state) {
                if (state.hasFailed) {
                    $('#nofind-banner').show();
                } else {
                    $('#nofind-banner').hide();
                }
            }
        }

    });
}

init_mixer();