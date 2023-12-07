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
                    <p>You have to select <b>One</b> answer from <b>Four</b> options -<b> Temperature, Humidity,<br> Pressure & Rain.</b>
                        <br><br>
                        You will get a <b style="color:#716EF9">Given range</b> and <b style="color:#BFD004">Reference range</b> of values related with these four<br>options.
                        You task is to compare these<b style="color:#716EF9"> given values</b> with the <b style="color:#BFD004">reference values</b> and <br>find out the right option.
                        <br><br>
                        <b>Step 1:</b><br><br>
                        You will see - 1.  <b style="color:#BFD004">Reference</b> Maximum & Minimum values Range for all four options<br>
                    <p style="margin-left: 142px;">2. A <b style="color:#716EF9">Given</b> maximum & Minimum Range of the right option</p>
                        You have to check in which <b style="color:#BFD004">Reference</b> Range does the <b style="color:#716EF9">Given</b> Range match.
                        .<br><br>
                        <b>Step 2:</b><br><br>
                        You will get a <b style="color:#2323FFB8">Sensor Name</b> and a <b style="color:#D48C00">Channel Name</b> of the right option.<br>
                        You have to check if the <b style="color:#2323FFB8">Sensor Name</b> or the <b style="color:#D48C00">Channel Name</b> have any literal/<br>
                        verbatim similarity with any of the four options.<br><br>
                        <b style="font-size: 32px;color:red"> Sensor names get more priority than channel names.</b><br><br>
                        <b>Step 3:</b><br><br>
                        You will get - 1.  <b style="color:#BFD004">Reference</b> value range for each of the options<br>
                        <p style="margin-left: 142px;">2. A <b style="color:#716EF9">Given</b> value of the right option</p>
                        Again, you will check in which range the <b style="color:#716EF9">Given</b> value lies from the <b style="color:#BFD004">Reference</b> value <br>range.<br><br>
                        <b style="color:red;font-size: 32px">Always Look at the green tips boxes before selecting<br> an option. You will
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
