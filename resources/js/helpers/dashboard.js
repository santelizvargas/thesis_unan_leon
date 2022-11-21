
// Average Temperature

async function getArduinos() {
    const response = await fetch('http://127.0.0.1:8000/api/v1/arduinos')
    const data = await response.json()
    return data
}

const generateGraphics = () => {
    getArduinos()
        .then(({ arduinos }) => {
            const options = {
                series: [{
                    name: 'Last Month - Static Data',
                    data: [10, 35, 22, 28]
                }, {
                    name: 'This Month - Data from Dsta Base',
                    data: arduinos.map(( { temperature }) => temperature)
                }],
                chart: {
                    height: 350,
                    type: 'area'
                },
                colors: ['#4380b1', '#d82909'],
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth'
                },
                xaxis: {
                    type: 'datetime',
                    //TODO: The date is the same on all registers on database so still doesn't can generate the time line 
                    // categories: arduinos.map(({ created_at, updated_at }) => created_at, updated_at)
                    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z"]
                },
                tooltip: {
                    x: {
                        format: 'dd/MM/yy HH:mm'
                    }
                }
            }
            const _ = new ApexCharts(document.querySelector("#records"), options).render()
        })
        .catch(console.log)
}

generateGraphics()

// temperature

const temperatureData = {
    series: [30],
    chart: {
        height: 350,
        type: 'radialBar',
        toolbar: {
            show: true
        }
    },
    plotOptions: {
        radialBar: {
            startAngle: -105,
            endAngle: 255,
            hollow: {
                margin: 0,
                size: '70%',
                background: 'var(--sidebar-color)',
                image: undefined,
                imageOffsetX: 0,
                imageOffsetY: 0,
                position: 'front',
                dropShadow: {
                    enabled: true,
                    top: 3,
                    left: 0,
                    blur: 4,
                    opacity: 0.24
                }
            },
            track: {
                background: '#fff',
                strokeWidth: '67%',
                margin: 0, // margin is in pixels
                dropShadow: {
                    enabled: true,
                    top: -3,
                    left: 0,
                    blur: 4,
                    opacity: 0.35
                }
            },

            dataLabels: {
                show: true,
                name: {
                    offsetY: 70,
                    show: true,
                    color: 'var(--title-color',
                    fontSize: '20px'
                },
                value: {
                    formatter: function (val) {
                        return parseInt(val);
                    },
                    color: 'var(--text-color)',
                    fontSize: '36px',
                    show: true,
                }
            }
        }
    },
    fill: {
        type: 'gradient',
        gradient: {
            shade: 'dark',
            type: 'horizontal',
            shadeIntensity: 0.8,
            gradientToColors: ['#d82909'],
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0]
        }
    },
    stroke: {
        lineCap: 'round'
    },
    labels: ['Grados'],
};

var temperatureChart = new ApexCharts(document.querySelector("#temperature"), temperatureData);
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


// const progressBar = document.querySelector('.progress__bar'),
//     valueProgress = document.querySelector('.progress__value')

// let progressStartValue = 0,
//     progressEndValue = 90,
//     speed = 25

// let progress = setInterval(() => {
//     progressStartValue++

//     valueProgress.textContent = `${progressStartValue}`
//     progressBar.style.background = `conic-gradient(var(--primary-color) ${progressStartValue * 3.6}deg, var(--primary-color-light) 0deg)`
//     if(progressStartValue == progressEndValue) {
//         clearInterval(progress);
//     }
// }, speed)