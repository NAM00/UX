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
        display: inline-block;
        text-align: left;

        }
        .progress{
            display: inline-block;
            position: relative;
            margin-left: 100px;
            width: 400px;
            height: 100px;
            margin-top:-30px;

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
        width: 870px;
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
        margin-left:40px  ;
        }

        .selected {
        color: blue;

        }


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

            font-family: IBM Plex Sans;
            font-size: 24px;
            font-weight: 400;
            line-height: 40px;
            letter-spacing: 0.01em;
            text-align: left;



        }

        td {
            font-family: IBM Plex Sans;
            font-size: 32px;
            font-weight: 500;
            line-height: 34px;
            letter-spacing: 0em;
            text-align: center;
            width: 234px;
            height: 197px;
            top: 2118px;
            left: 386px;
            border: 1px;
            color: #000000;
        }
        th {
            font-family: IBM Plex Sans;
            font-size: 24px;
            font-weight: 600;
            line-height: 18px;
            letter-spacing: 0em;
            text-align: center;




        }
        .header-row {
            text-align: center;



        }

        .design11{
            width: 234px;
            height: 270px;
            top: 2045px;
            left: 386px;
            border: 1px;


        }

        .design21{
            background:#FFFFFF;

            border: 1px solid #E6F1F4;



        }

        .design1{
            background:#90E0EF;
            border: 1px solid #E6F1F4;
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


        /*.popup {*/

        /*    display: none;*/

        /*}*/

        .popup1{
            margin-top: -200px;
            position: relative;
            display: inline-block;
            margin-left: 200px;
        }
        .popup2{
            margin-top: -300px;
            position: relative;
            display: inline-block;
            margin-left: 250px;
        }
        .popup3{
            margin-top: -200px;
            position: relative;
            display: inline-block;
            margin-left: 200px;
        }
        .popup4{
            margin-top: -150px;
            position: relative;
            display: inline-block;
            margin-left: 400px;
        }
        .popup5{
            margin-top: -200px;
            position: relative;
            display: inline-block;
            margin-left: 200px;
        }
        .popup6{
            margin-top: -150px;
            position: relative;
            display: inline-block;
            margin-left: 400px;
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
            border: none;
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
        .custom-button1{
            width: 336px;
            height: 55px;
            top: 4502px;
            left: 394px;
            border-radius: 20px;
            background:  #66B600;
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
        .custom-button1:hover {
            background-color: #99CC33;
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

                <h1 class='pdesign1'><b>Main Task</b></h1>
                <img class="progress" src="progress2.jpeg">
                <div class="pdesign">
                    <p><b style="color: red;font-size: 32px">Congratulations on completing your first task!</b><br><br>
                        Now you are in your <b style="color: red"> 2nd task</b>.
                        Just repeat the the task with different <b style="color: red">Given values</b>, the<br> <b style="color: #65912C">Reference values</b>
                        are same.
                    </p>
                    <b style="color:red">Always Look at the green tips boxes before selecting an option. You will get <br> important instructions there!! </b>
                    <br>
                    <br>

                </div><br>
                <h1 class='pdesign3'><b>Task2</b></h1><br>
                <p class='pdesign'>Now look into the chart given below. In the chart there are <b>four Options</b> and
                    their<br> respective value ranges - </p>
                <p id="chart17a" ><img id="max2" src="" style="width: 860px">
                    <input type="hidden" id="max2Hidden" name="max2Hidden" value=""></p>


                <br>
                <div class='pdesign'>
                    <p> Check which horizontal bar (Red, Yellow, Green or Blue) is overlapped with the<br> <b style="color:#FF50ED"> Vertical Purple</b>.
                        Select that option below -<br><br>

                        If the given value overlaps with more than one options, just select any random one <br>option and go to the next step to verify more.

                    </p>
                </div><br>
                <form id="form2" method="POST" action="{{ route('SubmitMainTask2') }}">
                    @csrf
                <div>
                    <p class='pdesign2'><b>Which class does the range belong to?</b></p><br>

                    <div class="list-container">
                        <p class='format'>Select one</p>

                        <label>
                            <input type="radio" name="subTask21" id="subTask21"  value="Temperature">
                        </label> Temperature<br>
                        <label>
                            <input type="radio" name="subTask21" id="subTask21"  value="Humidity">
                        </label> Humidity<br>
                        <label>
                            <input type="radio" name="subTask21" id="subTask21"  value="Pressure">
                        </label> Pressure<br>
                        <label>
                            <input type="radio" name="subTask21" id="subTask21"  value="Rain">
                        </label> Rain<br>
                    </div>
                    <div class="popup" >
                        <img src="pop1.jpeg" class="popup1">
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
                    <p class='pdesign'>Now, you will be shown a Sensor name of the earlier given range.<br><br>

                        You have to check if there is any literal/verbatim similarity or link up between the<br>
                        options and Sensor name.


                    </p><br>

                    <table class="design11">
                        <tr class="header-row">
                            <th class=design1>Sensor Name</th>
                        </tr>
                        <tr>
                            <td id="sensor2" class="design21"></td>
                            <input type="hidden" id="sensor2Hidden" name="sensor2Hidden" value="">

                        </tr>
                    </table>
                    <div class="popup" >
                        <img src="pop2.jpeg" class="popup2">
                    </div>



                    <br>
                    <p class='pdesign2'><b>Which class is the right one?</b></p><br>


                    <div class="list-container">
                        <p class="format">Select one</p>
                        <label>
                            <input type="radio" name="subTask22" id="subTask22"  value="Temperature">
                        </label> Temperature<br>
                        <label>
                            <input type="radio" name="subTask22" id="subTask22"  value="Humidity">
                        </label> Humidity<br>
                        <label>
                            <input type="radio" name="subTask22" id="subTask22"  value="Pressure">
                        </label> Pressure<br>
                        <label>
                            <input type="radio" name="subTask22" id="subTask22"  value="Rain">
                        </label> Rain<br>
                    </div>
                    <div class="popup" >
                        <img src="pop3.jpeg" class="popup3">
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
                    <p class="pdesign">Are you sure about your selection and want to submit the task or you want to verify<br>
                        further with one more step?
                    </p>
                    <div>
                        <input type="submit" class="custom-button sub2" name="submit_answer3" value="I want to submit" href="javascript:void(0)" >
                        <p class="submit-message2" style="color: green; display: none;"><b>Submitted</b>
                        </p>
                        <br><br>
                        <a class="custom-button1" href="javascript:void(0)" id="showNext2" role="button">
                            I want to verify more
                        </a>
                        <div class="popup" >
                            <img src="pop4.jpeg" class="popup4">
                        </div>
                    </div>
                </div>
                <div class='question3'>
                    <br>
                    <p class='pdesign'>Now look into the 2nd chart below. In the chart you will see another set of vertical <br>
                        ranges for those four options and a <b style="color:#117B00 ">green vertical</b> line which is given Median value.<br>
                        Again, you have to check on which option’s horizontal bars are overlapped by the<br> green line -  </p>
                    <br>
                    <p id="chart17b" ><img id="median2" src="" style="width: 860px">
                        <input type="hidden" id="median2Hidden" name="median2Hidden" value=""></p>
                    <br>
                    <div class='pdesign'>
                        <p>Check which horizontal bar (Red, Yellow, Green or Blue) is overlapped with the <br>
                            vertical <b style="color: #00B312FA">Green line</b>.
                            Select that option below - <br><br>
                    </div>

                    <p class='pdesign2'><b>Which option is overlapped by the vertical <b style="color: #00B312FA">Green line</b>?</b></p><br>

                    <div class="list-container">
                        <p class="format">Select one</p>
                        <label>
                            <input type="radio" name="subTask23" id="subTask23"  value="Temperature">
                        </label> Temperature<br>
                        <label>
                            <input type="radio" name="subTask23" id="subTask23"  value="Humidity">
                        </label> Humidity<br>
                        <label>
                            <input type="radio" name="subTask23" id="subTask23"  value="Pressure">
                        </label> Pressure<br>
                        <label>
                            <input type="radio" name="subTask23" id="subTask23"  value="Rain">
                        </label> Rain<br>
                    </div>
                    <div class="popup" >
                        <img src="pop5.jpeg" class="popup5">
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
                        <input type="submit" class="custom-button sub3" name="submit_answer4" value="I want to submit" href="javascript:void(0)" >
                        <p class="submit-message3" style="color: green; display: none;"><b>Submitted</b>
                        </p>
                        <br><br>
                        <a class="custom-button1" href="javascript:void(0)" role="button" id="startOverButton">
                            Start from the beginning
                        </a>
                    </div>
                    <div class="popup" >
                        <img src="pop6.jpeg" class="popup6">
                    </div>
                </div>

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
    // // script.js
    // document.addEventListener("DOMContentLoaded", function () {
    //     const hiddenDiv = document.getElementById("hiddenDiv");
    //
    //     // Delay the appearance of the hidden div (e.g., 3 seconds)
    //     setTimeout(() => {
    //         hiddenDiv.style.display = "block";
    //     }, 3000); // 3000 milliseconds (3 seconds)
    // });
    // document.addEventListener("DOMContentLoaded", function () {
    //     const hiddenDiv = document.getElementById("hiddenDiv1");
    //
    //     // Delay the appearance of the hidden div (e.g., 3 seconds)
    //     setTimeout(() => {
    //         hiddenDiv.style.display = "block";
    //     }, 4000); // 3000 milliseconds (3 seconds)
    // });
    // document.addEventListener("DOMContentLoaded", function () {
    //     const hiddenDiv = document.getElementById("hiddenDiv2");
    //
    //     // Delay the appearance of the hidden div (e.g., 3 seconds)
    //     setTimeout(() => {
    //         hiddenDiv.style.display = "block";
    //     }, 5000); // 3000 milliseconds (3 seconds)
    // });
    document.addEventListener("DOMContentLoaded", function () {
        const showNextButton = document.getElementById("showNext");
        const question1 = document.querySelector(".question1");
        const errorText = document.getElementById("error");

        showNextButton.addEventListener("click", () => {
            const selectedOption = document.querySelector('input[name="subTask21"]:checked');
            if (selectedOption) {
                // If an option is selected, perform the further functionality
                question1.style.display = "block";
                errorText.style.display = "none"; // Hide the error message if shown
                question1.scrollIntoView({ behavior: "smooth" });
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
            const selectedOption1 = document.querySelector('input[name="subTask22"]:checked');
            if (selectedOption1) {
                // If an option is selected, perform the further functionality
                question2.style.display = "block";
                error1Text.style.display = "none"; // Hide the error message if shown
                question2.scrollIntoView({ behavior: "smooth" });
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
            question3.scrollIntoView({ behavior: "smooth" });
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        const showNextButton2 = document.getElementById("showNext3");
        const question4 = document.querySelector(".question4");
        const error2Text = document.getElementById("error2");

        showNextButton2.addEventListener("click", () => {
            const selectedOption2 = document.querySelector('input[name="subTask23"]:checked');
            if (selectedOption2) {
                // If an option is selected, perform the further functionality
                question4.style.display = "block";
                error2Text.style.display = "none"; // Hide the error message if shown
                question4.scrollIntoView({ behavior: "smooth" });
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
        const submitButton = document.querySelector(".sub2");

        // Get the submit message element
        const submitMessage = document.querySelector(".submit-message2");

        // Add a click event listener to the button
        submitButton.addEventListener("click", function () {
            // Display the message
            submitMessage.style.display = "block";

            // Redirect to the desired page after a short delay
            setTimeout(function () {
                window.location.href = "mainTask3.blade.php";
            }, 2000); // Adjust the delay time (in milliseconds) as needed
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        // Get the "I want to submit" button by its class name
        const submitButton = document.querySelector(".sub3");

        // Get the submit message element
        const submitMessage = document.querySelector(".submit-message3");

        // Add a click event listener to the button
        submitButton.addEventListener("click", function () {
            // Display the message
            submitMessage.style.display = "block";

            // Redirect to the desired page after a short delay
            setTimeout(function () {
                window.location.href = "mainTask3.blade.php";
            }, 2000); // Adjust the delay time (in milliseconds) as needed
        });
    });
    function setValuesForUser(userIndex) {
        // Define arrays of possible values for each element
        const max2Images = ["Max 6.jpg", "Max 7.jpg", "Max 8.jpg, Max 9.jpg, Max 10.jpg"]; // Replace with actual image URLs
        const sensor2Names = ["Rain mm", "Rain", "Rain detector temp", "Precipitation ml / m²","Intensity of precipitation"]; // Replace with actual names
        const median2Images = ["Median 6.jpg", "Median 7.jpg", "Median 8.jpg", "Median 9.jpg","Median 12.jpg"]; // Replace with actual image URLs

        // Get the index for the current user based on the modulo of 6
        const index = userIndex % 6;

        // Calculate the index for each array based on the modulo of its length
        const max2Index = index % max2Images.length;
        const sensor2Index = index % sensor2Names.length;
        const median2Index = index % median2Images.length;

        // Set values for the elements based on the calculated indices
        document.getElementById("max2").src = max2Images[max2Index];
        document.getElementById("sensor2").innerText = sensor2Names[sensor2Index];
        document.getElementById("median2").src = median2Images[median2Index];

        document.getElementById("max2Hidden").value = max2Images[max2Index];
        document.getElementById("sensor2Hidden").value = sensor2Names[sensor2Index];
        document.getElementById("median2Hidden").value = median2Images[median2Index];
    }

    // Call the function to set values for the current user when the page loads
    document.addEventListener("DOMContentLoaded", function () {
        // Get the user index from wherever it is available (e.g., user ID, session, etc.)
        const userIndex = 0; // Replace this with the actual user index

        setValuesForUser(userIndex);
    });

    history.pushState(null, null, document.URL);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, document.URL);
    });

</script>
