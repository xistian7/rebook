/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//== Class definition
var Dashboard = function() {

    var personalIncome = function() {
        //** Based on Chartist plugin - https://gionkunz.github.io/chartist-js/index.html
        var quater1Chart = function() {
            if ($('#m_chart_personal_income_quater_1').length == 0) {
                return;
            }

            var chart = new Chartist.Pie('#m_chart_personal_income_quater_1', {
                series: [{
                        value: 32,
                        className: 'custom',
                        meta: {
                            color: mApp.getColor('accent')
                        }
                    },
                    {
                        value: 32,
                        className: 'custom',
                        meta: {
                            color: mApp.getColor('warning')
                        }
                    },
                    {
                        value: 36,
                        className: 'custom',
                        meta: {
                            color: mApp.getColor('brand')
                        }
                    }
                ],
                labels: [1, 2, 3]
            }, {
                donut: true,
                donutWidth: 17,
                showLabel: false
            });

            chart.on('draw', function(data) {
                if (data.type === 'slice') {
                    // Get the total path length in order to use for dash array animation
                    var pathLength = data.element._node.getTotalLength();

                    // Set a dasharray that matches the path length as prerequisite to animate dashoffset
                    data.element.attr({
                        'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
                    });

                    // Create animation definition while also assigning an ID to the animation for later sync usage
                    var animationDefinition = {
                        'stroke-dashoffset': {
                            id: 'anim' + data.index,
                            dur: 1000,
                            from: -pathLength + 'px',
                            to: '0px',
                            easing: Chartist.Svg.Easing.easeOutQuint,
                            // We need to use `fill: 'freeze'` otherwise our animation will fall back to initial (not visible)
                            fill: 'freeze',
                            'stroke': data.meta.color
                        }
                    };

                    // If this was not the first slice, we need to time the animation so that it uses the end sync event of the previous animation
                    if (data.index !== 0) {
                        animationDefinition['stroke-dashoffset'].begin = 'anim' + (data.index - 1) + '.end';
                    }

                    // We need to set an initial value before the animation starts as we are not in guided mode which would do that for us

                    data.element.attr({
                        'stroke-dashoffset': -pathLength + 'px',
                        'stroke': data.meta.color
                    });

                    // We can't use guided mode as the animations need to rely on setting begin manually
                    // See http://gionkunz.github.io/chartist-js/api-documentation.html#chartistsvg-function-animate
                    data.element.animate(animationDefinition, false);
                }
            });

            // For the sake of the example we update the chart every time it's created with a delay of 8 seconds
            /*chart.on('created', function() {
                if (window.__anim21278907124) {
                    clearTimeout(window.__anim21278907124);
                    window.__anim21278907124 = null;
                }
                window.__anim21278907124 = setTimeout(chart.update.bind(chart), 15000);
            });*/
        };

        quater1Chart();

	    $( document ).find( 'a[data-toggle="pill"]' ).on( 'shown.bs.tab', function( e ) {
		    var target = $( e.target ).attr( 'href' );
		    switch ( target ) {
			    case '#m_personal_income_quater_1':
				    quater1Chart();
				    break;
		    }
	    } );
    }    
    return {
        //== Init demos
        init: function() {
            // init charts
            personalIncome();
        }
    };
}();
//== Class initialization on page load
jQuery(document).ready(function() {
    Dashboard.init();
});