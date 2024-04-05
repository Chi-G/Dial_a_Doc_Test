    <script src="{{ asset('backend/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('backend/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('backend/assets/js/custom.js') }}"></script>
    <script src="{{ asset('backend/plugins/highlight/highlight.pack.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('backend/plugins/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/apex/custom-apexcharts.js') }}"></script>
    <script src="{{ asset('backend/assets/js/dashboard/dash_1.js') }}"></script>

    <!-- Overall income (disaggregated by months) -->
    <script>
        var sLineArea = {
            chart: {
                height: 350,
                type: 'area',
                toolbar: {
                show: false,
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth'
            },
            series: [{
                name: 'series1',
                data: [31, 40, 28, 51, 42, 109, 100]
            }, {
                name: 'series2',
                data: [11, 32, 45, 32, 34, 52, 41]
            }],

            xaxis: {
                type: 'datetime',
                categories: ["2018-09-19T00:00:00", "2018-09-19T01:30:00", "2018-09-19T02:30:00", "2018-09-19T03:30:00", "2018-09-19T04:30:00", "2018-09-19T05:30:00", "2018-09-19T06:30:00"],                
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                },
            }
        }

        var chart = new ApexCharts(
            document.querySelector("#s-line-area"),
            sLineArea
        );

        chart.render();
        Simple 
    </script>

        <!-- Overall expenses -->
    <script>
        var expenseData = {
            chart: {
                height: 350,
                type: 'area',
                toolbar: {
                show: false,
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth'
            },
            series: [{
                name: 'Overall Expenses',
                data: [4000, 4500, 5000, 4800, 5500, 6000, 5500, 5800, 6000, 5500, 5000, 4800]
            }],
            xaxis: {
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
            },
            tooltip: {
                x: {
                    format: 'MMM'
                },
                y: {
                    formatter: function (val) {
                        return "$" + val.toFixed(2);
                    }
                }
            }
        }

        var expenseChart = new ApexCharts(
            document.querySelector("#expense-chart"),
            expenseData
        );

        expenseChart.render();

    </script>

    <!-- Profitability (show by range, month, fiscal year)  -->
    <script>
        var profitabilityData = {
            chart: {
                height: 350,
                type: 'area',
                toolbar: {
                show: false,
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth'
            },
            series: [{
                name: 'Monthly Profitability',
                data: [2000, 2500, 3000, 2800, 3200, 3500, 3200, 3500, 3800, 3500, 3000, 2800]
            }, {
                name: 'Quarterly Profitability',
                data: [5000, 5500, 6000, 5800, 6200, 6500, 6200, 6500, 6800, 6500, 6000, 5800]
            }, {
                name: 'Annual Profitability',
                data: [20000, 22000, 24000, 23000, 25000, 26000, 25000, 26000, 27000, 26000, 24000, 23000]
            }],
            xaxis: {
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
            },
            tooltip: {
                x: {
                    format: 'MMM'
                },
                y: {
                    formatter: function (val) {
                        return "$" + val.toFixed(2);
                    }
                }
            }
        }

        var profitabilityChart = new ApexCharts(
            document.querySelector("#profitability-chart"),
            profitabilityData
        );
        profitabilityChart.render();
    </script>

    <!-- Disaggregation of Users (Individual and Institution) (pie/doughnut) -->
    <script>
        var usersData = {
            chart: {
                type: 'donut',
                height: 350,
            },
            labels: ['Individual Users', 'Institutional Users'],
            series: [70, 30],
            colors: ['#ff7f0e', '#1f77b4'],
            legend: {
                position: 'bottom'
            },
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
        }

        var usersChart = new ApexCharts(
            document.querySelector("#users-chart"),
            usersData
        );

        usersChart.render();
    </script>

    <!-- Number of service providers  -->
    <script>
        var serviceProvidersData = {
            chart: {
                height: 350,
                type: 'line',
                toolbar: {
                    show: false
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth'
            },
            series: [{
                name: 'Service Providers',
                data: [15, 18, 20, 22, 21, 23, 25, 27, 26, 28, 30, 32, 35]
            }],
            xaxis: {
                type: 'datetime',
                categories: [
                    "2024-01-01", "2024-01-02", "2024-01-03", "2024-01-04", "2024-01-05", 
                    "2024-01-06", "2024-01-07", "2024-01-08", "2024-01-09", "2024-01-10", 
                    "2024-01-11", "2024-01-12", "2024-01-13"
                ]
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy'
                },
            }
        }

        var serviceProvidersChart = new ApexCharts(
            document.querySelector("#service-providers-chart"),
            serviceProvidersData
        );

        serviceProvidersChart.render();
    </script>