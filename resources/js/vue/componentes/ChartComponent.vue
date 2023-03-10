<template>
    <Bar :char-options="charOptions" :data="charData" />
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
        data() {
            return {
                charData: {
                    labels: [],
                    datasets: [
                    {
                        label: 'Data One',
                        backgroundColor: '#f87979',
                        data: []
                    }]
                },
                charOptions: {
                    response: true,
                }
            }
        },
        mounted() {
            console.log("mounting...");
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
                    console.log(labelsArray);
                    console.log(datasetsArray);
                    this.charData = {
                        labels: labelsArray,
                        datasets: [{
                            label: 'Data One',
                            backgroundColor: '#f87979',
                            data: datasetsArray,
                        }] 
                    }
                } else {
                    console.log("An error occurred while fetching stats");
                }
            })
        },
    }
</script>