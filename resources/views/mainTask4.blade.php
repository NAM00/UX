<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Main Task</title>
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


        .pdesign2{
            font-family: IBM Plex Sans;
            font-size: 26px;
            font-weight: 500;
            line-height: 36px;
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
            margin-left:17px ;
        }

        .selected {
            color: blue;

        }


        /* CSS in a separate style sheet or <style> tag */

        .align-left {
            float: left;
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

        .header-row {
            text-align: center;

        }
        .design1{
            width: 615px;
            height: 311px;
            top: 1114px;
            left: 394px;
            border: 1px;
            border: 1px solid #E6F1F4;



        }
        .design11{
            width: 936px;
            height: 270px;
            top: 2047px;
            left: 393px;
            border: 1px;

        }
        .design2{
            background:  #CAF0F8;

            border: 1px solid #E6F1F4;

        }
        .design21{
            background:#FFFFFF;

            border: 1px solid #E6F1F4;



        }
        .design20{
            font-family: IBM Plex Sans;
            font-size: 40px;
            font-weight: 500;
            line-height: 18px;
            letter-spacing: 0em;
            text-align: center;
            background:#FFFFFF;

            border: 1px solid #E6F1F4;
        }
        .design22{
            background:  #E6F1F4;

            border: 1px solid #E6F1F4;



        }
        .design3{
            background:#90E0EF;

            border: 1px solid #E6F1F4;
        }
        .design111{
            width: 936px;
            height: 400px;
            top: 3076px;
            left: 393px;
            border: 1px;
            border: 1px solid #E4ECEE;

        }
        .design221{
            background:  #90E0EF;
            border: 1px solid #E4ECEE;


        }
        .design222{
            background: #ADE8F4;
            border: 1px solid #E4ECEE;
        }
        .design223{
            background: #CAF0F8;

            border: 1px solid #E4ECEE;
        }
        .design224
        {
            background: #DBF3F5;
            border: 1px solid #E4ECEE;

        }
        .design1111
        {
            width: 936px;
            height: 209px;
            top: 3738px;
            left: 393px;
            border: 1px;
            border: 1px solid #EBEBEB;

        }
        .design2211{
            background:  #CAF0F8;
            border: 1px solid #EBEBEB;

        }
        .design2221{
            background:  #ADE8F4;
            border: 1px solid #EBEBEB;

        }
        .format{
            font-family: IBM Plex Sans;
            font-size: 16px;
            font-weight: 400;
            line-height: 16px;
            letter-spacing: 0.3199999928474426px;
            text-align: left;

        }
        .list-container {
            display: inline-block;
            width: Fixed (225px);
            height: Hug (156px);
            top: 1556px;
            left: 393px;
            gap: 8px;
            font-family: IBM Plex Sans;
            font-size: 24px;
            font-weight: 400;
            line-height: 40px;
            letter-spacing: 0.01em;
            text-align: left;


        }


        .popup {

            display: none;

        }

        .popup5{
            margin-top: -360px;
            position: relative;
            display: inline-block;
            margin-left: 650px;
        }
        .popup6{
            margin-top: -210px;
            position: relative;
            display: inline-block;
            margin-left: 200px;
        }
        .popup7{
            margin-top: -210px;
            position: relative;
            display: inline-block;
            margin-left: 200px;
        }

        .alert{
            margin-right:-20px;
            margin-top: -30px;
            display: inline-block
        }
        /* styles.css */
        .custom-button {
            width: 336px;
            height: 55px;
            top: 4502px;
            left: 394px;
            border-radius: 20px;
            background: #0000FFB0;
            color: #FFFFFF;
            display: inline-block;
            font-family: IBM Plex Sans;
            font-size: 24px;
            font-weight: 700;
            line-height: 36px;
            letter-spacing: 0.1599999964237213px;
            text-align: center;
            text-decoration: none;
            justify-content: center;
            cursor: pointer;
            line-height: 2;
            transition: background-color 0.3s, color 0.3s;


        }
        .custom-button:hover {
            background-color: #2577A0;
            color: #FFFFFF;
            text-decoration: none;
        }





        .question1 {
            display: none;
        }
        .question2 {
            display: none;
        }
        .question3 {
            display: none;
        }
        .question4 {
            display: none;

        }









    </style>

</head>

<body>


    <div class="row">
        <div class="col-md-2 top-side-bar">
            <div class="side-bar">
                <br><br><br>

                <ul>
                    <p id="item2"><img src="underline.jpeg" class="img1">Task Description</p>
                    <p id="item1" class="selected"><img src="colours.jpg" class="img1">Main Task</p>
                    <p id="item"><img src="white.jpg" class="img1">Survey</p>
                    <p id="item"><img src="white.jpg" class="img1">Payment Code</p>
                </ul>
            </div>
        </div>
        <div class="col-md-10">
            <div class="side-bar1">
                <br><br>

                <h1 class='pdesign1'><b>Main Task</b></h1><br><br>

                <div class="pdesign">
                    <p><b>Please have a look into the task below with which you can determine the right class of <br>the
                            weather data from the given Minimum & Maximum values, Sensor and Full<br> Channel names and
                            Median values - </b>
                    </p>
                    <br>

                </div><br>
                <h1 class='pdesign3'><b>Task4</b></h1><br>
                <p class='pdesign'>Now look into the chart given below. In the chart there are four classes and
                    their<br> respective minimum and maximum values - </p>
                <table class="design">
                    <tr class="header-row">
                        <th class="design2">Class</th>
                        <th class="design2">Minimum</th>
                        <th class="design2">Maximum</th>
                    </tr>
                    <tr>
                        <td class="design21">Temparature</td>
                        <td class="design21">-18.4</td>
                        <td class="design21">109.87</td>
                    </tr>
                    <tr>
                        <td class="design22">Humidity</td>
                        <td class="design22">-12.6</td>
                        <td class="design22">395.83</td>
                    </tr>
                    <tr>
                        <td class="design21">Pressure</td>
                        <td class="design21">99.01</td>
                        <td class="design21">1197.08</td>
                    </tr>
                    <tr>
                        <td class="design22">Rain</td>
                        <td class="design22">-299.28</td>
                        <td class="design22">1330.09</td>
                    </tr>
                </table>

                <br>
                <div class='pdesign'>
                    <p> The given Minimum and Maximum values are -
                    </p>
                </div><br>
                <div>
                    <div class='list-container'>
                        <table class="design1">
                            <tr class="header-row">
                                <th class=design2>Minimum</th>
                                <th class=design3>Maximum</th>
                            </tr>
                            <tr>
                                <td class="design20"> -299.28</td>
                                <td class="design20">0.42</td>
                            </tr>
                        </table>
                    </div>
                    <div class="popup" id="hiddenDiv">
                        <img src="reference.jpeg" class="popup5">
                    </div>
                </div>
                <br>
                <br>
                <form id="form4">
                <div>

                    <p class='pdesign2'><b>Which class does the range belong to?</b></p><br>

                    <div class="list-container">
                        <p class='format'>Select one</p>

                        <label>
                            <input type="radio" name="myRadio9" value="Option 37">
                        </label> Temperature<br>
                        <label>
                            <input type="radio" name="myRadio9" value="Option 38">
                        </label> Humidity<br>
                        <label>
                            <input type="radio" name="myRadio9" value="Option 39">
                        </label> Pressure<br>
                        <label>
                            <input type="radio" name="myRadio9" value="Option 40">
                        </label> Rain<br>
                    </div>
                    <br><br>

                    <div class="div"><a class="btn btn-primary align-left" href="javascript:void(0)" id="showNext"
                            role="button">Next
                            Step</a>

                    </div>

                    <div class='alert'>
                        <p class='pdesign2' id="error" style="color: red; display: none;"><b>Please select an
                                option!</b>
                        </p>
                    </div>

                </div>
                <br> <br>
                <div class='question1'>
                    <br>
                    <p class='pdesign'>Now, you will be shown a Sensor name and a Channel name associated with the
                        <br>previous minimum and maximum value.
                        <br><br>
                        Determine whether there is any relationship between the class name and the sensor/<br>channel
                        name
                        and then select the class associated with the given name.
                    </p><br>

                    <table class="design11">
                        <tr class="header-row">
                            <th class=design2>Minimum</th>
                            <th class=design3>Sensor Name</th>
                            <th class=design2>Channel Name</th>
                            <th class=design3>Maximum</th>

                        </tr>
                        <tr>
                            <td class="design20"> -299.28</td>
                            <td class="design21">Rain mm</td>
                            <td class="design21">Wiedemann Weather Station<br><br>
                                RoEl</td>
                            <td class="design20">0.42</td>
                        </tr>
                    </table>



                    <br>
                    <p class='pdesign2'><b>Which class does the range belong to?</b></p><br>


                    <div class="list-container">
                        <p class="format">Select one</p>
                        <label>
                            <input type="radio" name="myRadio10" value="Option 41">
                        </label> Temperature<br>
                        <label>
                            <input type="radio" name="myRadio10" value="Option 42">
                        </label> Humidity<br>
                        <label>
                            <input type="radio" name="myRadio10" value="Option 43">
                        </label> Pressure<br>
                        <label>
                            <input type="radio" name="myRadio10" value="Option 44">
                        </label> Rain<br>
                    </div>
                    <div class="popup" id="hiddenDiv1">
                        <img src="if.jpeg" class="popup6">
                    </div>
                    <br>
                    <div class="div1"><a class="btn btn-primary align-left" href="javascript:void(0)" id="showNext1"
                            role="button">Next
                            Step</a></div>
                    <div class='alert'>
                        <p class='pdesign2' id="error1" style="color: red; display: none;"><b>Please select an
                                option!</b>
                        </p>
                    </div>

                </div>
                <br><br>
                <div class='question2'>
                    <br>
                    <p class="pdesign">Are you sure about your selection and want to submit the task or you want to
                        verify<br> further with median values?
                    </p>
                    <div>
                        <input type="submit" class="custom-button sub6" name="submit_answer7" value="I want to submit" href="javascript:void(0)" >
                        <p class="submit-message6" style="color: green; display: none;"><b>Submitted</b>
                        </p>
                        <br><br>
                        <a class="custom-button" href="javascript:void(0)" id="showNext2" role="button">
                            I want to verify more
                        </a>

                    </div>
                </div>
                <div class='question3'>
                    <br>
                    <p class='pdesign'>Now look into the reference chart given below. In the chart there are four
                        classes and<br> their respective Median Value Probabilities - </p>
                    <br>
                    <table class="design111">
                        <tr class="header-row">
                            <th class="design221">Class</th>
                            <th class="design222">Highest Probability</th>
                            <th class="design223">Medium Probability </th>
                            <th class="design224">Lowest Probability</th>
                        </tr>
                        <tr>
                            <td class="design21">Temperature</td>
                            <td class="design21">9.4 - 25.3</td>
                            <td class="design21">27.3 - 55.15</td>
                            <td class="design21">3.4 - 9.3</td>
                        </tr>
                        <tr>
                            <td class="design22">Humidity</td>
                            <td class="design22">28.1 - 78.4</td>
                            <td class="design22">98.3 - 100</td>
                            <td class="design22">18.5 - 30.2</td>
                        </tr>
                        <tr>
                            <td class="design21">Pressure</td>
                            <td class="design21">990 - 1031</td>
                            <td class="design21">927 - 985</td>
                            <td class="design21">720 - 745</td>
                        </tr>
                        <tr>
                            <td class="design22">Rain</td>
                            <td class="design22">23.3 - 159.2</td>
                            <td class="design22">1010 - 1035</td>
                            <td class="design22">1243 - 1270</td>
                        </tr>
                    </table>
                    <br>
                    <div class='pdesign'>
                        <p>Here, you will be given the Median Value of the previous class. You have to compare the<br>
                            value with the
                            reference Median chart and guess the best possible answer.<br><br>

                            The Median value of the data point -</p>
                    </div>
                    <br>
                    <table class="design1111">
                        <tr class="header-row">
                            <th class="design2211">Minimum</th>
                            <th class="design2221">Sensor Name</th>
                            <th class="design2211">Median</th>
                            <th class="design2221">Channel Name</th>
                            <th class="design2211">Maximum</th>
                        </tr>
                        <tr>
                            <td class="design20">-299.28</td>
                            <td class="design21">Rain mm</td>
                            <td class="design20">1006.345</td>
                            <td class="design21">Wiedemann Weather Station</td>
                            <td class="design20">0.42</td>
                        </tr>
                    </table>
                    <br>
                    <p class='pdesign2'><b>Which class does the range belong to?</b></p><br>


                    <div class="list-container">
                        <p class="format">Select one</p>
                        <label>
                            <input type="radio" name="myRadio11" value="Option 45">
                        </label> Temperature<br>
                        <label>
                            <input type="radio" name="myRadio11" value="Option 46">
                        </label> Humidity<br>
                        <label>
                            <input type="radio" name="myRadio11" value="Option 47">
                        </label> Pressure<br>
                        <label>
                            <input type="radio" name="myRadio11" value="Option 48">
                        </label> Rain<br>
                    </div>
                    <div class="popup" id="hiddenDiv2">
                        <img src="compare.jpeg" class="popup7">
                    </div>
                    <br>
                    <div class="div2"><a class="btn btn-primary align-left" href="javascript:void(0)" id="showNext3"
                            role="button">Next
                            Step</a></div>
                    <div class='alert'>
                        <p class='pdesign2' id="error2" style="color: red; display: none;"><b>Please select an
                                option!</b>
                        </p>
                    </div>

                </div>
                <div class='question4'>
                    <br><br>
                    <p class="pdesign2"><b>Are you sure about your selection ?</b>
                    </p><br>
                    <div>
                        <input type="submit" class="custom-button sub7" name="submit_answer8" value="I want to submit" href="javascript:void(0)" >
                        <p class="submit-message7" style="color: green; display: none;"><b>Submitted</b>
                        </p>
                        <br><br>
                        <a class="custom-button" href="javascript:void(0)" role="button" id="startOverButton">
                            Start from the beginning
                        </a>


                    </div>
                </div>


                <!-- <a class="btn btn-primary align-right" href="page5.html" role="button" id="nextStepButton">Next Step</a> -->
                </form>

            </div>
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
    const item1 = document.getElementById("item1");

    // Add a click event listener to toggle the "selected" class
    item1.addEventListener("click", function () {
        item1.classList.toggle("selected");
    })


    // Get all elements with an id starting with "item"
    const elements = document.querySelectorAll('[id^="item2"]');

    // Loop through each element and modify its style
    elements.forEach(function (element) {
        element.style.color = 'blue'; // Change text color to blue
        element.style.textDecoration = 'underline'; // Add underline

    });
    // script.js
    document.addEventListener("DOMContentLoaded", function () {
        const hiddenDiv = document.getElementById("hiddenDiv");

        // Delay the appearance of the hidden div (e.g., 3 seconds)
        setTimeout(() => {
            hiddenDiv.style.display = "block";
        }, 3000); // 3000 milliseconds (3 seconds)
    });
    document.addEventListener("DOMContentLoaded", function () {
        const hiddenDiv = document.getElementById("hiddenDiv1");

        // Delay the appearance of the hidden div (e.g., 3 seconds)
        setTimeout(() => {
            hiddenDiv.style.display = "block";
        }, 4000); // 3000 milliseconds (3 seconds)
    });
    document.addEventListener("DOMContentLoaded", function () {
        const hiddenDiv = document.getElementById("hiddenDiv2");

        // Delay the appearance of the hidden div (e.g., 3 seconds)
        setTimeout(() => {
            hiddenDiv.style.display = "block";
        }, 5000); // 3000 milliseconds (3 seconds)
    });
    document.addEventListener("DOMContentLoaded", function () {
        const showNextButton = document.getElementById("showNext");
        const question1 = document.querySelector(".question1");
        const errorText = document.getElementById("error");

        showNextButton.addEventListener("click", () => {
            const selectedOption = document.querySelector('input[name="myRadio9"]:checked');
            if (selectedOption) {
                // If an option is selected, perform the further functionality
                question1.style.display = "block";
                errorText.style.display = "none"; // Hide the error message if shown
            } else {
                // Display the error message if no option is selected
                errorText.style.display = "block";
            }
        });
    })
    document.addEventListener("DOMContentLoaded", function () {
        const showNextButton1 = document.getElementById("showNext1");
        const question2 = document.querySelector(".question2");
        const error1Text = document.getElementById("error1");

        showNextButton1.addEventListener("click", () => {
            const selectedOption1 = document.querySelector('input[name="myRadio10"]:checked');
            if (selectedOption1) {
                // If an option is selected, perform the further functionality
                question2.style.display = "block";
                error1Text.style.display = "none"; // Hide the error message if shown
            } else {
                // Display the error message if no option is selected
                error1Text.style.display = "block";
            }
        });
    })



    document.addEventListener("DOMContentLoaded", function () {
        const showNextButton = document.getElementById("showNext2");
        const question3 = document.querySelector(".question3");

        showNextButton.addEventListener("click", () => {
            question3.style.display = "block";
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        const showNextButton2 = document.getElementById("showNext3");
        const question4 = document.querySelector(".question4");
        const error2Text = document.getElementById("error2");

        showNextButton2.addEventListener("click", () => {
            const selectedOption2 = document.querySelector('input[name="myRadio11"]:checked');
            if (selectedOption2) {
                // If an option is selected, perform the further functionality
                question4.style.display = "block";
                error2Text.style.display = "none"; // Hide the error message if shown
            } else {
                // Display the error message if no option is selected
                error2Text.style.display = "block";
            }
        });
    })



    document.addEventListener("DOMContentLoaded", function () {
        const startOverButton = document.getElementById('startOverButton');

        startOverButton.addEventListener('click', function () {
            // Scroll to the top of the page
            window.scrollTo(0, 0);

            // Reload the page
            location.reload();
        });
    });


    document.addEventListener("DOMContentLoaded", function () {
        // Get the "I want to submit" button by its class name
        const submitButton = document.querySelector(".sub6");

        // Get the submit message element
        const submitMessage = document.querySelector(".submit-message6");

        // Add a click event listener to the button
        submitButton.addEventListener("click", function () {
            // Display the message
            submitMessage.style.display = "block";

            // Redirect to the desired page after a short delay
            setTimeout(function () {
                window.location.href = "survey.blade.php";
            }, 2000); // Adjust the delay time (in milliseconds) as needed
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        // Get the "I want to submit" button by its class name
        const submitButton = document.querySelector(".sub7");

        // Get the submit message element
        const submitMessage = document.querySelector(".submit-message7");

        // Add a click event listener to the button
        submitButton.addEventListener("click", function () {
            // Display the message
            submitMessage.style.display = "block";

            // Redirect to the desired page after a short delay
            setTimeout(function () {
                window.location.href = "survey.blade.php";
            }, 2000); // Adjust the delay time (in milliseconds) as needed
        });
    });

</script>
