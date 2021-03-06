<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Intern Project</title>
  <link rel="shortcut icon" href="image/shortcut icon.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/jquery.js"></script>
  <script>
        $(document).ready(function(){
            $("#search").click(function(){
                $("#search-toggle").fadeToggle();
            });
            $("#keydocs").click(function(){
                var offset=$("#keydocssec").offset().top;
                $("html,body").animate({scrollTop:offset},1500);
            });
            $("#spec").click(function(){
                var offset=$("#specsec").offset().top;
                $("html,body").animate({scrollTop:offset},1500);
            });
            $(".nav-toggle").click(function(){
                $(".tul").toggleClass('active')
            });
        });
  </script>
  <link rel="stylesheet" href="style.css">
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <?php include("header1.php"); ?>

    <div class="container-fluid">
    
        <div class="lead" style="border-bottom: 1px solid #ED1F24;">Heart failure</div>
        <p style="text-align: justify;">
            <img src="image/mayo_logo.jpg" style="max-width:100%; height:auto;"/>
            Heart failure, sometimes known as congestive heart failure, occurs when your heart muscle doesn't pump blood as well as it should. Certain conditions, such as narrowed arteries in your heart (coronary artery disease) or high blood pressure, gradually leave your heart too weak or stiff to fill and pump efficiently.

            Not all conditions that lead to heart failure can be reversed, but treatments can improve the signs and symptoms of heart failure and help you live longer. Lifestyle changes — such as exercising, reducing salt in your diet, managing stress and losing weight — can improve your quality of life.
        </p>
        <hr>
        <!--pills-->
        <div class="container">
            <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#home">Symptoms</a></li>
                <li><a data-toggle="pill" href="#menu1">Causes</a></li>
                <li><a data-toggle="pill" href="#menu2">Preventions</a></li>
            </ul>
            
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <p style="text-align: justify;">
                            Diabetes symptoms vary depending on how much your blood sugar is elevated. Some people, especially those with prediabetes or type 2 diabetes, may not experience symptoms initially. In type 1 diabetes, symptoms tend to come on quickly and be more severe.
                            Some of the signs and symptoms of type 1 and type 2 diabetes.

                            Although type 1 diabetes can develop at any age, it typically appears during childhood or adolescence. Type 2 diabetes, the more common type, can develop at any age, though it's more common in people older than 40.
                    </p>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <p style="text-align: justify;">
                        Heart failure often develops after other conditions have damaged or weakened your heart. However, the heart doesn't need to be weakened to cause heart failure. It can also occur if the heart becomes too stiff.
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Type of heart failure</th>
                                    <th scope="col">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Left-sided heart failure</td>
                                    <td>Fluid may back up in your lungs, causing shortness of breath.</td>
                                </tr>
                                <tr>
                                    <td>Right-sided heart failure</td>
                                    <td>Fluid may back up into your abdomen, legs and feet, causing swelling.</td>
                                </tr>
                                <tr>
                                    <td>Systolic heart failure</td>
                                    <td>The left ventricle can't contract vigorously, indicating a pumping problem.</td>
                                </tr>
                                <tr>
                                    <td>Diastolic heart failure</td>
                                    <td>The left ventricle can't relax or fill fully, indicating a filling problem.</td>
                                </tr>
                            </tbody>
                        </table>                            
                    </p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <p style="text-align: justify;">
                            Type 1 diabetes can't be prevented. However, the same healthy lifestyle choices that help treat prediabetes, type 2 diabetes and gestational diabetes can also help prevent them:

                            Eat healthy foods. Choose foods lower in fat and calories and higher in fiber. Focus on fruits, vegetables and whole grains. Strive for variety to prevent boredom.
                            Get more physical activity. Aim for 30 minutes of moderate physical activity a day. Take a brisk daily walk. Ride your bike. Swim laps. If you can't fit in a long workout, break it up into smaller sessions spread throughout the day.
                            Lose excess pounds. If you're overweight, losing even 7 percent of your body weight — for example, 14 pounds (6.4 kilograms) if you weigh 200 pounds (90.9 kilograms) — can reduce the risk of diabetes. To keep your weight in a healthy range, focus on permanent changes to your eating and exercise habits. Motivate yourself by remembering the benefits of losing weight, such as a healthier heart, more energy and improved self-esteem.

                            Sometimes medication is an option as well. Oral diabetes drugs such as metformin (Glucophage, Glumetza, others) may reduce the risk of type 2 diabetes — but healthy lifestyle choices remain essential.

                            Have your blood sugar checked at least once a year to check that you haven't developed type 2 diabetes.
                    </p>
                </div>
            </div>
           
            
            
        </div>  
        
        <!--accordian-->
        <div class="container">

            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Tests and diagnosis 
                        </button>
                    </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <p style="text-align: justify;">
                            Symptoms of type 1 diabetes often appear suddenly and are often the reason for checking blood sugar levels. Because symptoms of other types of diabetes and prediabetes come on more gradually or may not be evident, the American Diabetes Association (ADA) has recommended screening guidelines. The ADA recommends that the following people be screened for diabetes:

                            Anyone with a body mass index higher than 25, regardless of age, who has additional risk factors, such as high blood pressure, a sedentary lifestyle, a history of polycystic ovary syndrome, having delivered a baby who weighed more than 9 pounds, a history of diabetes in pregnancy, high cholesterol levels, a history of heart disease, and having a close relative with diabetes.
                            Anyone older than age 45 is advised to receive an initial blood sugar screening, and then, if the results are normal, to be screened every three years thereafter.
                        </p>
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Treatments and drugs 
                        </button>
                    </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <p style="text-align: justify;">
                                <div class="lead">Treatments for all types of diabetes</div>
                                <hr>
                                Contrary to popular perception, there's no specific diabetes diet. You'll need to center your diet on more fruits, vegetables and whole grains — foods that are high in nutrition and fiber and low in fat and calories — and cut down on animal products, refined carbohydrates and sweets. In fact, it's the best eating plan for the entire family. Sugary foods are OK once in a while, as long as they're counted as part of your meal plan.
                                <div class="lead">Treatments for type 1 and type 2 diabetes</div>
                                <hr>
                                Depending on your treatment plan, you may check and record your blood sugar as often as several times a week to as many as four to eight times a day. Careful monitoring is the only way to make sure that your blood sugar level remains within your target range. People who receive insulin therapy also may choose to monitor their blood sugar levels with a continuous glucose monitor. Although this technology doesn't yet replace the glucose meter, it can provide important information about trends in blood sugar levels.
                        </p>
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Lifestyle and home remedies 
                        </button>
                    </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                                <p style="text-align:justify;">
                                    Make a commitment to managing your diabetes. Learn all you can about diabetes. Establish a relationship with a diabetes educator, and ask your diabetes treatment team for help when you need it.
                                    Choose healthy foods and maintain a healthy weight. Losing just 7 percent of your body weight if you're overweight can make a significant difference in your blood sugar control. A healthy diet is one with plenty of fruits, vegetables, whole grains and legumes, with a limited amount of saturated fat.
                                </p>
                    </div>
                    </div>
                </div>
                

            </div>  

        </div>
    </div>

    <?php include("footer.php"); ?>
</body>
</html>