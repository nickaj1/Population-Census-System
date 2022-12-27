<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSS | Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="./GSS.png" type="image/x-icon">
    <style>
        body {
  background-color: #f6f9fb;
}

.text-small {
  font-size: 0.9rem;
}

.rounded {
  border-radius: 1rem;
}

.position-center {
  top: 50%;
  left: 50%;
  transform: translateX(-50%) translateY(-50%);
}

a {
  color: inherit;
  text-decoration: none;
}
    </style>
    <?php
        include('config.php');        
   $query = "SELECT id FROM reg ORDER BY id";  
   $query_run = mysqli_query($con, $query);
   $row = mysqli_num_rows($query_run);

   $sql="SELECT * FROM reg WHERE gender='male'";
   $sqlq=mysqli_query($con,$sql);
   $male = mysqli_num_rows($sqlq);
  
   $sql1="SELECT * FROM reg WHERE gender='female'";
   $sqlq1=mysqli_query($con,$sql1);
   $female = mysqli_num_rows($sqlq1);

   $sql2="SELECT * FROM reg WHERE age<18";
   $sqlq2=mysqli_query($con,$sql2);
   $b18 = mysqli_num_rows($sqlq2);
   
   $sql3="SELECT * FROM reg WHERE age BETWEEN 18 and 60";
   $sqlq3=mysqli_query($con,$sql3);
   $b1860 = mysqli_num_rows($sqlq3);

   $sql4="SELECT * FROM reg WHERE age > 60";
   $sqlq4=mysqli_query($con,$sql4);
   $g60 = mysqli_num_rows($sqlq4);

   $sql5="SELECT * FROM `reg` WHERE employment ='employed'";
   $sqlq5=mysqli_query($con,$sql5);
   $em = mysqli_num_rows($sqlq5);

   $sql6="SELECT * FROM `reg` WHERE employment ='unemployed'";
   $sqlq6=mysqli_query($con,$sql6);
   $unem = mysqli_num_rows($sqlq6);

   $sql7="SELECT * FROM `reg` WHERE employment ='Self-employed'";
   $sqlq7=mysqli_query($con,$sql7);
   $sem = mysqli_num_rows($sqlq7);

   $sql8="SELECT * FROM `reg` WHERE employment ='student'";
   $sqlq8=mysqli_query($con,$sql8);
   $st = mysqli_num_rows($sqlq8);

   $s1="SELECT * FROM `reg` WHERE region ='ashanti region'";
   $sq1=mysqli_query($con,$s1);
   $ar = mysqli_num_rows($sq1);
   //Region
   $s2="SELECT * FROM `reg` WHERE region ='Greater Accra region'";
   $sq2=mysqli_query($con,$s2);
   $gar = mysqli_num_rows($sq2);

   $s3="SELECT * FROM `reg` WHERE region ='Western region'";
   $sq3=mysqli_query($con,$s3);
   $wr = mysqli_num_rows($sq3);

   $s4="SELECT * FROM `reg` WHERE region ='Volta region'";
   $sq4=mysqli_query($con,$s4);
   $vr = mysqli_num_rows($sq4);

   $s5="SELECT * FROM `reg` WHERE region ='Eastern region'";
   $sq5=mysqli_query($con,$s5);
   $er = mysqli_num_rows($sq5);

   $s6="SELECT * FROM `reg` WHERE region ='Upper West region'";
   $sq6=mysqli_query($con,$s6);
   $uwr = mysqli_num_rows($sq6);

   $s7="SELECT * FROM `reg` WHERE region ='Upper East region'";
   $sq7=mysqli_query($con,$s7);
   $uer = mysqli_num_rows($sq7);

   $s8="SELECT * FROM `reg` WHERE region ='Central region'";
   $sq8=mysqli_query($con,$s8);
   $cr = mysqli_num_rows($sq8);

   $s9="SELECT * FROM `reg` WHERE region ='Bono East region'";
   $sq9=mysqli_query($con,$s9);
   $ber = mysqli_num_rows($sq9);

   $s10="SELECT * FROM `reg` WHERE region ='Savannah region'";
   $sq10=mysqli_query($con,$s10);
   $sr = mysqli_num_rows($sq10);

   $s11="SELECT * FROM `reg` WHERE region ='North-East region'";
   $sq11=mysqli_query($con,$s11);
   $ner = mysqli_num_rows($sq11);

   $s12="SELECT * FROM `reg` WHERE region ='Oti region'";
   $sq12=mysqli_query($con,$s12);
   $or = mysqli_num_rows($sq12);

   $s13="SELECT * FROM `reg` WHERE region ='Western North region'";
   $sq13=mysqli_query($con,$s13);
   $wnr = mysqli_num_rows($sq13);

   $s14="SELECT * FROM `reg` WHERE region ='Ahafo region'";
   $sq14=mysqli_query($con,$s14);
   $ahr = mysqli_num_rows($sq14);

   $s15="SELECT * FROM `reg` WHERE region ='Bono region'";
   $sq15=mysqli_query($con,$s15);
   $br = mysqli_num_rows($sq15);

   
   
   $s16="SELECT * FROM `reg` WHERE region ='Northern region'";
   $sq16=mysqli_query($con,$s15);
   $nr = mysqli_num_rows($sq15);
   ?>
</head>
<body>
    <!-- FOR DEMO PURPOSE -->
<section class="pt-5">
    <div class="container pt-5">
        <div class="card border-0 rounded shadow-sm">
            <div class="card-body p-5">
                <div class="row">
                    <div class="col-lg-12">
                       <img src="./GSS.png" alt="">
                                       <center>
                                        <h2>Self-service Census System</h2>
                                   
                                        <a href="reg.php"class="btn btn-primary btn-outline btn-lg">Register</a>
                                        <a href="search.php" class="btn btn-success btn-outline btn-lg">Check Registration</a>
                                       </center>
                                        
                                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<center><img src="./map.png" alt="">
</center>
<section class="py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h3 class="fw-bold">labouring class statistics</h3>
                                 
                            </div>

                            <div class="col-lg-6">

                                <!-- Example 1 -->
                                <canvas id="pieChart1"></canvas>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h3 class="fw-bold">Age statistics</h3>
                                 
                            </div>

                            <div class="col-lg-6">

                                <!-- Example 3 -->
                                <canvas id="pieChart3"></canvas>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="col-lg-6 mb-4">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h3 class="fw-bold">Gender statistics</h3>
                                 
                            </div>

                            <div class="col-lg-6">

                                <!-- Example 5 -->
                                <canvas id="pieChart5"></canvas>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="col-12">
                <div class="card border-0 shadow-sm rounded" id="custom">
                    <div class="card-body p-5">
                        <div class="row align-items-center">
                           

                            <div class="col-lg-12">

                                <!-- Example 7 -->
                                <div class="position-relative">
                                    <canvas id="pieChart7"></canvas>
                                    <div class="position-absolute position-center text-center pt-5">
                                        <h1 class="fw-bold text-uppercase mb-0"><?php echo ''.$row.''?></h1>
                                        <p class="text-muted text-uppercase mb-0">Total Registered</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // MAKE ROUNDED EDGES FOR PIE CHARTS
Chart.defaults.RoundedDoughnut    = Chart.helpers.clone(Chart.defaults.doughnut);
Chart.controllers.RoundedDoughnut = Chart.controllers.doughnut.extend({
    draw: function(ease) {
        var ctx           = this.chart.ctx;
        var easingDecimal = ease || 1;
        var arcs          = this.getMeta().data;
        Chart.helpers.each(arcs, function(arc, i) {
            arc.transition(easingDecimal).draw();

            var pArc   = arcs[i === 0 ? arcs.length - 1 : i - 1];
            var pColor = pArc._view.backgroundColor;

            var vm         = arc._view;
            var radius     = (vm.outerRadius + vm.innerRadius) / 2;
            var thickness  = (vm.outerRadius - vm.innerRadius) / 2;
            var startAngle = Math.PI - vm.startAngle - Math.PI / 2;
            var angle      = Math.PI - vm.endAngle - Math.PI / 2;

            ctx.save();
            ctx.translate(vm.x, vm.y);

            ctx.fillStyle = i === 0 ? vm.backgroundColor : pColor;
            ctx.beginPath();
            ctx.arc(radius * Math.sin(startAngle), radius * Math.cos(startAngle), thickness, 0, 2 * Math.PI);
            ctx.fill();

            ctx.fillStyle = vm.backgroundColor;
            ctx.beginPath();
            ctx.arc(radius * Math.sin(angle), radius * Math.cos(angle), thickness, 0, 2 * Math.PI);
            ctx.fill();

            ctx.restore();
        });
    }
});


// EXAMPLE 1
var ctx1 = document.getElementById("pieChart1");
var pieChart1 = new Chart(ctx1, {
    type: 'RoundedDoughnut',
    options: {
        cutoutPercentage: 75,
        legend: {
            position: 'left',
            labels: {
                boxWidth: 10,
                fontStyle: 'Bold',
                fontColor: '#aaa',
                usePointStyle: true,
            }
        },

    },
    data: {
        labels: [
            "Unemployed",
            "Self-employed",
            "Employed",
            "Student"
        ],
        datasets: [
            {
                data: [<?php echo ''.$unem.''?>, <?php echo ''.$sem.''?>, <?php echo ''.$em.''?>, <?php echo ''.$st.''?>],
                borderWidth: 0,
                backgroundColor: [
                    '#e63a54',
                    '#d8f4ff',
                    "#110f48",
                    "#93b80d"
                ],
                hoverBackgroundColor: [
                    '#e63a54',
                    '#d8f4ff',
                    "#110f48",
                    "#93b80d"
                ]
            }]
        }
    });



// EXAMPLE 3
var ctx3 = document.getElementById("pieChart3");
var pieChart3 = new Chart(ctx3, {
    type: 'pie',
    options: {
        legend: {
            position: 'left',
            labels: {
                boxWidth: 10,
                fontStyle: 'Bold',
                fontColor: '#aaa',
                usePointStyle: true,
            }
        },
    },
    data: {
        labels: [
            "Below 18",
            "Between 18 to 60",
            "Above 60"
        ],
        datasets: [
            {
                data: [<?php echo ''.$b18.''?>, <?php echo ''.$b1860.''?>, <?php echo ''.$g60.''?>],
                borderWidth: 7,
                backgroundColor: [
                    '#46d8d5',
                    "#182390",
                    "#f5e132",
                ],
                hoverBackgroundColor: [
                    '#46d8d5',
                    "#182390",
                    "#f5e132",
                ]
            }]
        }
    });




// EXAMPLE 5
var ctx5 = document.getElementById("pieChart5");
var pieChart5 = new Chart(ctx5, {
    type: 'pie',
    options: {
        cutoutPercentage: 50,
        legend: {
            position: 'left',
            labels: {
                boxWidth: 10,
                fontStyle: 'Bold',
                fontColor: '#aaa',
                usePointStyle: true,
            }
        },
    },
    data: {
        labels: [
            "Male ",
            "Female ",
        ],
        datasets: [
            {
                data: [<?php echo ''.$male.''?>, <?php echo ''.$female.''?>],
                borderWidth: 2,
                borderColor: [
                    '#46d8d5',
                    "#f5e132",
                ],
                backgroundColor: [
                    'rgba(70, 215, 212, 0.22)',
                    "rgba(245, 225, 50, 0.23)",
                ],
                hoverBackgroundColor: [
                    '#46d8d5',
                    "#f5e132",
                ]
            }]
        }
    });






// EXAMPLE 7
var ctx7 = document.getElementById("pieChart7").getContext('2d');
    var pieChart7 = new Chart(ctx7, {
    type: 'RoundedDoughnut',
    options: {
        cutoutPercentage: 92,
        borderAlign: 'center',
        animation: {
            duration: 2000,
            easing: 'linear'
        },
        legend: {
            position: 'top',
            labels: {
                padding: 10,
                fontStyle: 'Bold',
                fontColor: '#333',
                usePointStyle: true,
            }
        },
    },
    data: {
        labels: [
            "Ashanti",
            "Greater Accra",
            "Western",
            "Northern",
            "Volta",
            "Eastern",
            "Upper West",
            "Upper East",
            "Central",
            "Bono East",
            "Savannah",
            "North-East",
            "Oti",
            "Western North",
            "Ahafo",
            "Bono"
						
	                            
        ],
        datasets: [
            {
                data: [<?php echo ''.$ar.''?>, <?php echo ''.$gar.''?>, <?php echo ''.$wr.''?>, <?php echo ''.$nr.''?>, <?php echo ''.$vr.''?>, <?php echo ''.$er.''?>, <?php echo ''.$uwr.''?>, <?php echo ''.$uer.''?>,<?php echo ''.$cr.''?>,<?php echo ''.$ber.''?>, <?php echo ''.$sr.''?>, <?php echo ''.$ner.''?>, <?php echo ''.$or.''?>, <?php echo ''.$wnr.''?>, <?php echo ''.$ahr.''?>, <?php echo ''.$br.''?>],
                borderWidth: 6,
                borderColor: '#fff',
                backgroundColor: [
                    "#f9d60c",
                    "#a9d826",
                    "#39be33",
                    "#0e8a43",
                    '#f9d65c',
                    "#a9d866",
                    "#39be73",
                    "#0e8a83",
                    '#f9d69c',
                    "#a9d106",
                    "#39b113",
                    "#0e8123",
                    '#f9d13c',
                    "#a9d146",
                    "#39b153",
                    "#0e8163",
                ],
                hoverBackgroundColor: [
                    "#f9d60c",
                    "#a9d826",
                    "#39be33",
                    "#0e8a43",
                    '#f9d65c',
                    "#a9d866",
                    "#39be73",
                    "#0e8a83",
                    '#f9d69c',
                    "#a9d106",
                    "#39b113",
                    "#0e8123",
                    '#f9d13c',
                    "#a9d146",
                    "#39b153",
                    "#0e8163",
                ]
            }]
        },
    });

</script>
</body>
</html>