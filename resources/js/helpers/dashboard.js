// Average Temperature

const temperatureData = {
    series: [{
        name: 'Mes Anterior',
        data: [8, 12, 45, 32, 18, 20, 45]
    }, {
        name: 'Mes Actual',
        data: [11, 32, 26, 17, 34, 50, 37]
    }],
    chart: {
        height: 350,
        type: 'area'
    },
    colors: ['#D4AF2E', '#D47E2E'],
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth'
    },
    xaxis: {
        type: 'datetime',
        categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
    },
    tooltip: {
        x: {
            format: 'dd/MM/yy HH:mm'
        },
    },
};

const temperatureChart = new ApexCharts(document.querySelector("#temperature"), temperatureData);
temperatureChart.render();

// First Week

const firstWeekData = {
    series: [55, 45, 20, 11],
    labels: ['Paslama', 'Torita', 'Carey', 'Tora'],
    chart: {
        type: 'donut',
    },
    colors: ['#D47E2E', '#D4AF2E', '#BDD42E', '#81D42E'],
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
        }
    }]
};

const firstWeekChart = new ApexCharts(document.querySelector("#firstWeek"), firstWeekData);
firstWeekChart.render();

// Second Week

const secondWeekData = {
    series: [61, 50, 80, 17],
    labels: ['Paslama', 'Torita', 'Carey', 'Tora'],
    chart: {
        type: 'donut',
    },
    colors: ['#D47E2E', '#D4AF2E', '#BDD42E', '#81D42E'],
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
        }
    }]
};

const secondWeekChart = new ApexCharts(document.querySelector("#secondWeek"), secondWeekData);
secondWeekChart.render();

// Third Week

const thirdWeekData = {
    series: [69, 34, 23, 5],
    labels: ['Paslama', 'Torita', 'Carey', 'Tora'],
    chart: {
        type: 'donut',
    },
    colors: ['#D47E2E', '#D4AF2E', '#BDD42E', '#81D42E'],
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
        }
    }]
};

const thirdWeekChart = new ApexCharts(document.querySelector("#thirdWeek"), thirdWeekData);
thirdWeekChart.render();