<template>
    <Bar
    id="my-chart-id"
    :options="chartOptions"
    :data="renderChart()"
  />
</template>

<script>
    import { Bar } from 'vue-chartjs'
    import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale } from 'chart.js'

    ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale)
    // 192.162.13.32
    // 192.162.13.17 tania_final_boss_2023
    export default {
        name: 'BarChart',
        components: { Bar },

        data(labelsArray, datasetArray) {
            console.log(labelsArray, datasetArray);
            return {
                chartOptions: {
                    responsive: true
                }
            }
        },
        mounted() {
            fetch("/stats").then(async (response) => {
                const data = await response.json();

                if (response.ok) {
                    console.log(data);

                    var length = data.length;

                    var labelsArray = [];
                    var datasetsArray = [];

                    for (var i = 0; i < length; i++) {
                        labelsArray.push(data[i] ? data[i].name : '');
                        datasetsArray.push(data[i] ? data[i].quantity : '');
                    }
                    
                    this.rederChart({
                        labels: labelsArray,
                        datasets: {
                            data: datasetsArray,
                        },
                    });

                } else {
                    console.log("An error occurred while fetching stats");
                }
            });
        }
    }
</script>