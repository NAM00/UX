<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Task Description</title>
    <style>
        *body{
            padding: 0;
            margin: 0;
        }
        .pdesign1{
            font-family: IBM Plex Sans;
            font-size: 32px;
            font-weight: 500;
            line-height: 18px;
            letter-spacing: 0.1599999964237213px;
            text-align: left;


        }


        .side-bar {
            width: 296px;
            /* height: 4894px; */
            font-family: IBM Plex Sans, sans-serif;
            font-size: 20px;
            font-weight: 400;
            line-height: 18px;
            letter-spacing: 0.1599999964237213px;
            text-align: left;
            width: Hug (221px);
            height: Hug (424px);
            top: 167px;
            left: 38px;
            padding: 5px;
            gap: 8px;


        }
        .side-bar1
        {
            margin-left:40px ;
        }

        .selected {
            color: blue;

        }


        .align-right{
            float:right;
            margin-right: 250px;
            background: #0000FF;
            font-family: IBM Plex Sans;
            font-size: 18px;
            font-weight: 700;
            line-height: 18px;
            letter-spacing: 0.1599999964237213px;
            text-align: left;



        }


        .img1 {
            margin-top: 31px;
            padding-right: 10px;


        }




        .pdesign{
            /* width: 938px;
            height: 108px;
            top: 209px;
            left: 393px; */
            font-family: IBM Plex Sans;
            font-size: 24px;
            font-weight: 400;
            line-height: 40px;
            letter-spacing: 0.01em;
            text-align: left;



        }




    </style>

</head>

<body>


    <div class="row">
        <div class="col-md-2 top-side-bar">
            <div class="side-bar">
                <br><br><br>
                <ul>
                    <p id="item1" class="selected"><img src="../colours.jpg" class="img1">Task Description</p>
                    <p id="item"><img src="../white.jpg" class="img1">Main Task</p>
                    <p id="item"><img src="../white.jpg" class="img1">Survey</p>
                    <p id="item"><img src="../white.jpg" class="img1">Payment Code</p>
                </ul>
            </div>
        </div>
        <div class="col-md-10 contain">
            <div class="side-bar1">
                <br><br>

                <h1 class='pdesign1'><b>Task Description</b></h1><br><br>

                <div class='pdesign'>
                    <input type="hidden" id="typeId" name="typeId" value="{{$type}}">
                    <input type="hidden" id="workerId" name="workerId" value="{{$workerId}}">

                    <br>You have to select <b>One</b> answer from <b>Four</b> options -<b> Temperature, Humidity,<br> Pressure & Rain.</b>
                        <br><br>
                        You will be given a range of values for temperature, humidity, pressure, and rain, along <br>  with standard
                        <b style="color:#0075FF">Reference Ranges</b> for each. Your job is to compare the <b style="color:#D48C00"> Given Values</b> <br>
                        with the <b style="color:#0075FF">Reference Values</b> and choose the correct option.<br><br>
                        <b>Step 1:</b><br><br>
                        You will have two sets of ranges: one showing the <b style="color:#0075FF"> Reference</b> Maximum and Minimum<br> values for temperature, humidity, pressure, and rain, and the other indicating the<br> <b style="color:#D48C00">Given</b> Maximum and Minimum range for the correct option. Your task is to determine <br>which category the <b style="color:#D48C00">Given Range</b> falls into within the  <b style="color:#0075FF"> Reference values</b>.
                        <br><br><b>Step 2:</b><br><br>
                        You will receive a <b>Sensor Name</b> associated with the correct option. Your task is to<br> check if the <b>Sensor Name</b> has any direct similarity with any of the four options.<br><br>
{{--                        <b style="font-size: 32px;color:red"> Sensor names get more priority than channel names.</b><br><br>--}}
                        <b>Step 3:</b><br><br>
                        You will be provided with two sets of information: the <b style="color:#0075FF"> Reference Value</b> range <br> for each option and the <b style="color:#D48C00">Given Value</b> for the correct option. Once again, your task <br> is to determine in which range the <b style="color:#D48C00">Given Value</b>  falls within the <b style="color:#0075FF"> Reference Value</b><br> range.
                        <br><br>
                        <b style="color:red;font-size: 32px">Always look at the green tips boxes before selecting<br> an option. You will
                        get important instructions there!!!</b><br>
                        <p style="margin-left: 250px;"><img src="../arrow.jpeg"></p>
                        <p style="margin-left: 142px;"><img src="../read_me.jpeg"></p><br>
                    You have to complete <b>4 tasks</b> to get the payment.

                </div>
            </div>
            <br><br>
            <a class="btn btn-primary align-right" href="{{ route('task1') }}" role="button">Next Step</a>
        </div>
    </div>



    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>
<script>
    var typeIdValue = document.getElementById("typeId").value;

    sessionStorage.setItem("typeIdValue", typeIdValue);

    var storedValue = sessionStorage.getItem("typeIdValue");


    console.log(storedValue);

    var workerIdValue = document.getElementById("workerId").value;

    sessionStorage.setItem("workerIdValue", workerIdValue);

    var storedValuewd = sessionStorage.getItem("workerIdValue");

    console.log(workerIdValue);


    </script>
