<template>
    <div class="ct-chart ct-perfect-fourth"></div>
</template>

<style>
    .ct-label {
        color: #FFF !important;
        fill: #FFF !important;
        text-shadow: 0px 1px 0px rgba(0,0,0,1);
    }
</style>

<script>
    export default {
        props: ['responses'],
        data() {
            return {
                elements: [1, 2, 3, 4, 5]
            }
        },
        mounted() {
            let objects = this.responses;

            let values = this.elements.map((score) => (objects.filter((object) => object.score === score).length / objects.length) * 100);

            let data = {
                labels: ['1', '2', '3', '4', '5'].map((val, index) => {
                    return val + ' %' + values[index]
                }),
                series: values
            };

            let options = {
                labelInterpolationFnc: value => value
            };

            let responsiveOptions = [
                ['screen and (min-width: 640px)', {
                    chartPadding: 30,
                    labelOffset: 100,
                    labelDirection: 'explode',
                    labelInterpolationFnc: value => value
                }],
                ['screen and (min-width: 1024px)', {
                    labelOffset: 80,
                    chartPadding: 20
                }]
            ];

            new Chartist.Pie('.ct-chart', data, options, responsiveOptions);
        }
    }
</script>
