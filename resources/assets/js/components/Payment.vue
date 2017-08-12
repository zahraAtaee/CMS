<template>
        <canvas style="width:100%" height="400" ref="payment" ></canvas>
</template>

<script>

    import Chart from 'chart.js';
    export default {

    props:['labels','values'],
        mounted() {

            var ctx = this.$refs.payment.getContext("2d");

            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: this.labels,
                    datasets:
                    [
                        {
                            label: 'پرداختهای موفق',
                            data: this.values.success,
                            backgroundColor:'rgba(0, 188, 212,0.5)',
                            borderColor:'rgba(255, 152, 0,1.0)',
                            borderWidth: 1
                        },
                        {
                            label: 'پرداختهای نا موفق',
                            data: this.values.unsuccess,
                            backgroundColor: [
                                 'rgba(255, 99, 132, 0.2)',
                                 'rgba(54, 162, 235, 0.2)',
                                 'rgba(255, 206, 86, 0.2)',
                                 'rgba(75, 192, 192, 0.2)',
                                 'rgba(153, 102, 255, 0.2)',
                                 'rgba(255, 159, 64, 0.2)'

                            ],
                            borderColor: [

                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }


                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
        }
    }
</script>
