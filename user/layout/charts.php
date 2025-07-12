    <script>
        (function() {
            var chartBarOptions = {
                series: [{
                        name: "Income",
                        data: [5000, 4000, 5000, 4000, 6000, 8000, 10000]
                    },
                    {
                        name: "Expense",
                        data: [4000, 3000, 4000, 3000, 5000, 7000, 9000]
                    }
                ],

                chart: {
                    height: 250,
                    type: 'area',
                    // type: 'line',
                    dropShadow: {
                        enabled: true,
                        color: '#000',
                        top: 18,
                        left: 7,
                        blur: 10,
                        opacity: 0.2
                    },
                    toolbar: {
                        show: false
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    width: 2,
                    curve: 'smooth'
                },
                title: {
                    text: '',
                    align: 'left'
                },
                xaxis: {
                    categories: ["14-May", "13-May", "12-May", "11-May", "10-May", "09-May", "08-May"],
                    title: {
                        text: 'Date'
                    }
                },
                colors: ['#ffa21d', '#FF3A6E'],

                grid: {
                    strokeDashArray: 4,
                },
                legend: {
                    show: false,
                },
                yaxis: {
                    title: {
                        text: 'Amount'
                    },

                }

            };
            var arChart = new ApexCharts(document.querySelector("#cash-flow"), chartBarOptions);
            arChart.render();
        })();

        (function() {
            var options = {
                chart: {
                    height: 180,
                    type: 'bar',
                    toolbar: {
                        show: false,
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    width: 2,
                    curve: 'smooth'
                },
                series: [{
                    name: "Income",
                    data: [9000, 34230, 21100, 12530, 33360, 28000, 30000, 15000, 17000, 8000, 23000, 29000]
                }, {
                    name: "Expense",
                    data: [6000, 30230, 19100, 10530, 30360, 22000, 25000, 12000, 12000, 5000, 17000, 23000]
                }],
                xaxis: {
                    categories: ["January", "February", "March", "April", "May", "June", "July", "August",
                        "September", "October", "November", "December"
                    ],
                },
                colors: ['#3ec9d6', '#FF3A6E'],
                fill: {
                    type: 'solid',
                },
                grid: {
                    strokeDashArray: 4,
                },
                legend: {
                    show: true,
                    position: 'top',
                    horizontalAlign: 'right',
                },
                markers: {
                    size: 4,
                    colors: ['#3ec9d6', '#FF3A6E', ],
                    opacity: 0.9,
                    strokeWidth: 2,
                    hover: {
                        size: 7,
                    }
                }
            };
            var chart = new ApexCharts(document.querySelector("#incExpBarChart"), options);
            chart.render();
        })();

        (function() {
            // Define your static data
            var expenseCatAmount = [50, 25, 30, 15]; // Sample amounts
            var expenseCategoryColor = ["#FF5733", "#33FF57", "#3333FF", "#FF33FF"]; // Sample colors
            var expenseCategory = ["Category A", "Category B", "Category C", "Category D"]; // Sample category labels

            var options = {
                chart: {
                    height: 140,
                    type: 'donut',
                },
                dataLabels: {
                    enabled: false,
                },
                plotOptions: {
                    pie: {
                        donut: {
                            size: '70%',
                        }
                    }
                },
                series: expenseCatAmount,
                colors: expenseCategoryColor,
                labels: expenseCategory,
                legend: {
                    show: true
                }
            };

            var chart = new ApexCharts(document.querySelector("#expenseByCategory"), options);
            chart.render();
        })();

        (function() {
            // Define your static data
            var incomeCatAmount = [30, 20, 15, 10]; // Sample amounts
            var incomeCategoryColor = ["#FF5733", "#33FF57", "#3333FF", "#FF33FF"]; // Sample colors
            var incomeCategory = ["Category 1", "Category 2", "Category 3", "Category 4"]; // Sample category labels

            var options = {
                chart: {
                    height: 140,
                    type: 'donut',
                },
                dataLabels: {
                    enabled: false,
                },
                plotOptions: {
                    pie: {
                        donut: {
                            size: '70%',
                        }
                    }
                },
                series: incomeCatAmount,
                colors: incomeCategoryColor,
                labels: incomeCategory,
                legend: {
                    show: true
                }
            };

            var chart = new ApexCharts(document.querySelector("#incomeByCategory"), options);
            chart.render();
        })();

        (function() {
            var staticStorageLimit = 75; // Sample static storage limit value

            var options = {
                series: [staticStorageLimit],
                chart: {
                    height: 350,
                    type: 'radialBar',
                    offsetY: -20,
                    sparkline: {
                        enabled: true
                    }
                },
                plotOptions: {
                    radialBar: {
                        startAngle: -90,
                        endAngle: 90,
                        track: {
                            background: "#e7e7e7",
                            strokeWidth: '97%',
                            margin: 5, // margin is in pixels
                        },
                        dataLabels: {
                            name: {
                                show: true
                            },
                            value: {
                                offsetY: -50,
                                fontSize: '20px'
                            }
                        }
                    }
                },
                grid: {
                    padding: {
                        top: -10
                    }
                },
                colors: ["#6FD943"],
                labels: ['Used'],
            };

            var chart = new ApexCharts(document.querySelector("#device-chart"), options);
            chart.render();
        })();
    </script>