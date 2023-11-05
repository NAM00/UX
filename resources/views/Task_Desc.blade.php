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
        .pdesign3{
            font-family: IBM Plex Sans;
            font-size: 32px;
            font-weight: 500;
            line-height: 18px;
            letter-spacing: 0.1599999964237213px;
            text-align: left;
            justify-content: center;
            padding: 10px;
            background: #E6F1F4;
            width: 938px;
            height: 47px;
            top: 342px;
            left: 383px;



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
            margin-left:17px ;
        }

        .selected {
            color: blue;

        }


        .align-right{
            float:right;
            margin-right: 200px;
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
        .design {
            border: 1px ;
            color: #E6F1F4;
            width: 936px;
            height: 285px;
            top: 556px;
            left: 393px;
            border: 1px;
            box-shadow: 0px 4px 10px 0px #ACACAC59;}



        td {
            /* padding: 8px;
            text-align: center; /* Align text horizontally in the middle */
            /* vertical-align: middle; /* Align text vertically in the middle */
            /* font-weight: bold; Make the text bold */
            font-family: IBM Plex Sans;
            font-size: 24px;
            font-weight: 500;
            line-height: 18px;
            letter-spacing: 0em;
            text-align: center;
            width: 142px;
            height: 18px;
            top: 636px;
            left: 456px;
            color: #000000;



        }
        th {

            font-family: IBM Plex Sans;
            font-size: 24px;
            font-weight: 500;
            line-height: 18px;
            letter-spacing: 0em;
            text-align: center;
            color: #000000;
            width: 59px;
            height: 18px;
            top: 575px;
            left: 499px;


        }

    </style>

</head>

<body>


    <div class="row">
        <div class="col-md-2 top-side-bar">
            <div class="side-bar">
                <br><br><br>
                <ul>
                    <p id="item1" class="selected"><img src="colours.jpg" class="img1">Task Description</p>
                    <p id="item"><img src="white.jpg" class="img1">Main Task</p>
                    <p id="item"><img src="white.jpg" class="img1">Survey</p>
                    <p id="item"><img src="white.jpg" class="img1">Payment Code</p>
                </ul>
            </div>
        </div>
        <div class="col-md-10 contain">
            <div class="side-bar1">
                <br><br>

                <h1 class='pdesign1'><b>Task Description</b></h1><br><br>

                <div class='pdesign'>
                    <p>You will receive three sets of information. Your <b>Goal</b> is to correctly <b>classify</b> the
                        given <br>data by
                        comparing values from the questions to a <b>reference chart</b>. There are 4 <br> possible
                        Categories/Classes - Temperature, Humidity, Pressure or Rain, from which<br> you have to
                        identify
                        the right one. You will answer four questions using three steps <br>for 4 tasks.<br><br>
                        <b>Step 1:</b><br><br>
                        We will show you one minimum and maximum values’ range, and you will compare <br>these values
                        with
                        the reference chart. Then you have to select a category.<br><br>
                        <b>Step 2:</b><br><br>
                        In the step 2, we will show you a sensor name and a channel name. For answering<br> your
                        question,
                        you should check if there is any relation among the names of the <br>categories and
                        sensor/channel
                        names.<br><br>
                        <b> Sensor names get more priority than channel names.</b><br><br>
                        <b>Step 3:</b>
                        If you consider that you need more information for a decision of the category, we<br> present
                        you
                        the reference median value for all categories, as well as the median <br>value of the respective
                        category. You can compare the given value with the <br>reference chart.
                    </p><br><br>
                    <p style="color:red">Always Look at the green tips boxes before selecting an option. you will
                        get<br>
                        important
                        instructions on how to select the correct answer!</p>






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
