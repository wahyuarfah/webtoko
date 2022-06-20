<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="themes/favicon.png" type="image/png" rel="icon">
    <meta name="theme-color" content="#1a54de">
    <meta name="msapplication-navbutton-color" content="#1a54de">
    <meta name="apple-mobile-web-app-status-bar-style" content="#1a54de">
    <title>Dashboard - English Challenge</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css" rel="stylesheet" />
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" />
    <link href="plugins/chartist/dist/chartist.min.css" type="text/css" rel="stylesheet" />
    <link href="plugins/morris.js/morris.css" type="text/css" rel="stylesheet" />
    <link href="css/app-style.css" type="text/css" rel="stylesheet" />
    <link href="themes/app-theme.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <!-- <div id="pre-page-loader">
        <div id="pre-page-loader-center">
            <div id="pre-page-loader-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
                <div class="object" id="object_five"></div>
                <div class="object" id="object_six"></div>
                <div class="object" id="object_seven"></div>
                <div class="object" id="object_eight"></div>
                <div class="object" id="object_big"></div>
            </div>
        </div>
    </div> -->
    <?php include "navbar.php";
    include "left_sidebar.php";
    ?>
    <main>
        <div class="section me-page-body">
            <!--Dashboard analytics-->
            <div class="row center m-b-no">
                <!--Recent registrations table-->
                <div class="row m-b-no">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <?php
                                if (!isset($_GET['page'])) include "main_content.php";
                                elseif ($_GET['page'] == 'user') include "user.php";
                                elseif ($_GET['page'] == 'product') include "product.php";
                                elseif ($_GET['page'] == 'category') include "category.php";
                                elseif ($_GET['page'] == 'media') include "media.php";
                                elseif ($_GET['page'] == 'reset') include "reset.php";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
    </main>
    <?php include "footer.php"; ?>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="plugins/chartist/dist/chartist.min.js"></script>
    <script type="text/javascript" src="plugins/morris.js/morris.min.js"></script>
    <script type="text/javascript" src="plugins/morris.js/raphael.min.js"></script>
    <script type="text/javascript" src="js/init.js"></script>
    <script type="text/javascript">
        new Chartist.Line('#chartist-example1', {
            labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
            series: [
                [12, 9, 7, 8, 5],
                [2, 1, 3, 7, 3],
                [1, 3, 4, 5, 6]
            ]
        }, {
            fullWidth: true,
            chartPadding: {
                right: 40
            }
        });

        /* Bar chart */
        var chartistBarData = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            series: [
                [5, 4, 3, 7, 5, 10, 3],
                [3, 2, 9, 5, 4, 6, 4]
            ]
        };

        var chartistBarDataOptions = {
            seriesBarDistance: 10
        };

        var chartistBarResponsiveOptions = [
            ['screen and (max-width: 640px)', {
                seriesBarDistance: 5,
                axisX: {
                    labelInterpolationFnc: function(value) {
                        return value[0];
                    }
                }
            }]
        ];
        new Chartist.Bar('#chartist-example2', chartistBarData, chartistBarDataOptions, chartistBarResponsiveOptions);

        /* Pie chart */
        var piedata = {
            series: [5, 3, 4]
        };

        var sum = function(a, b) {
            return a + b
        };

        new Chartist.Pie('#chartist-example3', piedata, {
            labelInterpolationFnc: function(value) {
                return Math.round(value / piedata.series.reduce(sum) * 100) + '%';
            }
        });

        /* Donut chart */
        Morris.Donut({
            element: 'morris-example4',
            data: [{
                label: "Download Sales",
                value: 12
            }, {
                label: "In-Store Sales",
                value: 30
            }, {
                label: "Mail-Order Sales",
                value: 20
            }],
            resize: true,
            colors: ['#d70206', '#f05b4f', '#f4c63d']
        });
    </script>
</body>

</html>