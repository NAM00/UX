<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Payment Code</title>
    <style>

        *body{
            padding: 0;
            margin: 0;
        }
        .pdesign1{
            font-family: IBM Plex Sans, sans-serif;
            font-size: 32px;
            font-weight: 500;
            line-height: 18;
            letter-spacing: 0;
            text-align: left;


        }

        .side-bar {
            width: 296px;
            font-family: IBM Plex Sans, serif;
            font-size: 20px;
            font-weight: 400;
            line-height: 18px;
            letter-spacing: 0.1599999964237213px;
            text-align: left;
            top: 167px;
            left: 38px;
            padding: 2px;
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
            float: right;
            background: #0000FF;
            margin-right: 200px;
            font-family: 'IBM Plex Sans', serif; /* Make sure to use single or double quotes for font family names with spaces */
            font-size: 18px;
            font-weight: 700;
            line-height: 18px; /* You may want to adjust this based on your design */
            letter-spacing: 0; /* You can adjust the letter-spacing as needed */
            text-align: right; /* Set text-align to right to align text to the right within the button */
            /* Remove margin-left: 400px; */
        }







        .img1 {
            margin-top: 31px;
            padding-right: 10px;


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
                    <p id="item2"><img src="underline.jpeg" class="img1">Main Task</p>
                    <p id="item2"><img src="underline.jpeg" class="img1">Survey</p>
                    <p id="item1" class="selected"><img src="colours.jpg" class="img1">Payment Code</p>
                </ul>
            </div>
        </div>
        <div class="col-md-10">
            <div class="side-bar1">
                <br><br>

                <h1 class='pdesign1'><b>Payment Code</b></h1><br><br>

                <div>
                    <p><img src="7.jpeg">
                    </p><br><br>

                </div>
                <div class="content">
                    <p id="generated-content">Content generated from the backend</p>
                    <button style="font-size:24px">Copy <i class="fa fa-copy"></i></button>
                </div>

                <br>
                <a class="btn btn-primary align-right" href=" " role="button">Complete Task</a>


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
    // Get a reference to the item with id "item1"
    const item1 = document.getElementById("item1");

    // Add a click event listener to toggle the "selected" class
    item1.addEventListener("click", function () {
        item1.classList.toggle("selected");
    })


    // Get all elements with an id starting with "item"
    var elements = document.querySelectorAll('[id^="item2"]');

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
            const selectedOption = document.querySelector('input[name="myRadio"]:checked');
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
            const selectedOption1 = document.querySelector('input[name="myRadio1"]:checked');
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
        const submitButton = document.querySelector('.custom-button.submit');
        const nextStepButton = document.getElementById('nextStepButton'); // Use the unique identifier
        const radioButtons = document.querySelectorAll('input[type="radio"]');
        const feedback = document.getElementById('feedback');

        function handleOptionSelection() {
            const selectedOption1 = document.querySelector('input[name="myRadio1"]:checked');

            if (selectedOption1 && selectedOption1.value === "Option 1") {
                feedback.textContent = 'Your answer is correct! Please select the bottom-right "Next Step" button for the Next Training Task';
                nextStepButton.classList.remove('disabled'); // Enable the last "Next Step" button
                // You can choose to proceed or take any other action here.
            } else {
                feedback.textContent = 'Your answer is not correct. You are redirecting to another Training Task';
                // You can reset the radio buttons to unselected here if needed.
                setTimeout(function () {
                    window.location.href = 'AdditionalTrainingTask1.html'; // Redirect to the page for incorrect answers.
                }, 2000); // Adjust the delay (in milliseconds) as needed.
            }
        }

        submitButton.addEventListener('click', handleOptionSelection);

        // Handle the last "Next Step" button click
        //     nextStepButton.addEventListener('click', function (e) {
        //         e.preventDefault(); // Prevent navigating to "page3.html" directly, we'll check the answer first.
        //         handleOptionSelection();
        //     });
        // });
        nextStepButton.addEventListener('click', function (e) {
            if (nextStepButton.classList.contains('disabled')) {
                e.preventDefault();
            }
        });
    });


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
            const selectedOption2 = document.querySelector('input[name="myRadio2"]:checked');
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
        const submitButton1 = document.querySelector('.custom-button.submit1');
        const nextStepButton = document.getElementById('nextStepButton'); // Use the unique identifier
        const radioButtons1 = document.querySelectorAll('input[type="radio"]');
        const feedback1 = document.getElementById('feedback1');

        // Disable the last "Next Step" button initially
        nextStepButton.classList.add('disabled');

        submitButton1.addEventListener('click', function () {
            const selectedOption2 = document.querySelector('input[name="myRadio2"]:checked');

            if (selectedOption2 && selectedOption2.value === "Option 5") {
                feedback1.textContent = 'Your answer is correct! Please select the bottom-right "Next Step" button for the Next Training Task';
                nextStepButton.classList.remove('disabled'); // Enable the last "Next Step" button
                // You can choose to proceed or take any other action here.
            } else {
                feedback1.textContent = 'Your answer is not correct. You are redirecting to another Training Task';
                // You can reset the radio buttons to unselected here if needed.
                setTimeout(function () {
                    window.location.href = 'AdditionalTrainingTask1.html'; // Redirect to the page for incorrect answers.
                }, 2000); // Adjust the delay (in milliseconds) as needed.
            }
        });
        nextStepButton.addEventListener('click', function (e) {
            if (nextStepButton.classList.contains('disabled')) {
                e.preventDefault();
            }
        });

    });

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
        const showNextButton1 = document.getElementById("showNext1");
        const question2 = document.querySelector(".question2");
        const error1Text = document.getElementById("error1");

        showNextButton1.addEventListener("click", () => {
            const selectedOption1 = document.querySelector('input[name="myRadio3"]:checked');
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
        const showNextButton1 = document.getElementById("showNext3");
        const question2 = document.querySelector(".question4");
        const error2Text = document.getElementById("error2");

        showNextButton1.addEventListener("click", () => {
            const selectedOption3 = document.querySelector('input[name="myRadio4"]:checked');
            if (selectedOption3) {
                // If an option is selected, perform the further functionality
                question2.style.display = "block";
                error2Text.style.display = "none"; // Hide the error message if shown
            } else {
                // Display the error message if no option is selected
                error2Text.style.display = "block";
            }
        });
    })

    document.addEventListener("DOMContentLoaded", function () {
        const submitButton2 = document.querySelector('.custom-button.submit2');
        const nextStepButton = document.getElementById('nextStepButton'); // Use the unique identifier
        const radioButtons2 = document.querySelectorAll('input[type="radio"]');
        const feedback2 = document.getElementById('feedback2');

        // Disable the last "Next Step" button initially
        nextStepButton.classList.add('disabled');

        submitButton2.addEventListener('click', function () {
            const selectedOption3 = document.querySelector('input[name="myRadio3"]:checked');

            if (selectedOption3 && selectedOption3.value === "Option 11") {
                feedback2.textContent = 'Your answer is correct! Please select the bottom-right "Next Step" button for the Main Training Task';
                nextStepButton.classList.remove('disabled'); // Enable the last "Next Step" button
                // You can choose to proceed or take any other action here.
            } else {
                feedback2.textContent = 'Your answer is not correct. You are redirecting to another Training Task';
                // You can reset the radio buttons to unselected here if needed.
                setTimeout(function () {
                    window.location.href = 'AdditionalTrainingTask1.html'; // Redirect to the page for incorrect answers.
                }, 2000); // Adjust the delay (in milliseconds) as needed.
            }
        });
        nextStepButton.addEventListener('click', function (e) {
            if (nextStepButton.classList.contains('disabled')) {
                e.preventDefault();
            }
        });

    });
    document.addEventListener("DOMContentLoaded", function () {
        const submitButton3 = document.querySelector('.custom-button.submit3');
        const nextStepButton = document.getElementById('nextStepButton'); // Use the unique identifier
        const radioButtons3 = document.querySelectorAll('input[type="radio"]');
        const feedback2 = document.getElementById('feedback3');

        // Disable the last "Next Step" button initially
        nextStepButton.classList.add('disabled');

        submitButton3.addEventListener('click', function () {
            const selectedOption4 = document.querySelector('input[name="myRadio4"]:checked');

            if (selectedOption4 && selectedOption4.value === "Option 16") {
                feedback2.textContent = 'Your answer is correct! Please select the bottom-right "Next Step" button for the Main Task';
                nextStepButton.classList.remove('disabled'); // Enable the last "Next Step" button
                // You can choose to proceed or take any other action here.
            } else {
                feedback2.textContent = 'Your answer is not correct. You are redirecting to another Training Task';
                // You can reset the radio buttons to unselected here if needed.
                setTimeout(function () {
                    window.location.href = 'AdditionalTrainingTask1.html'; // Redirect to the page for incorrect answers.
                }, 2000); // Adjust the delay (in milliseconds) as needed.
            }
        });
        nextStepButton.addEventListener('click', function (e) {
            if (nextStepButton.classList.contains('disabled')) {
                e.preventDefault();
            }
        });

    });

    document.addEventListener("DOMContentLoaded", function () {
        // Get the "I want to submit" button by its class name
        const submitButton = document.querySelector(".submit4");

        // Get the submit message element
        const submitMessage = document.querySelector(".submit-message");

        submitButton.addEventListener("click", function () {
            // Display the message
            submitMessage.style.display = "block";

            // Redirect to the desired page after a short delay
            setTimeout(function () {
                window.location.href = "mainTask2.blade.php";
            }, 2000); // Adjust the delay time (in milliseconds) as needed
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        // Get the "I want to submit" button by its class name
        const submitButton = document.querySelector(".submit5");

        // Get the submit message element
        const submitMessage = document.querySelector(".submit-message1");

        // Add a click event listener to the button
        submitButton.addEventListener("click", function () {
            // Display the message
            submitMessage.style.display = "block";

            // Redirect to the desired page after a short delay
            setTimeout(function () {
                window.location.href = "mainTask2.blade.php";
            }, 2000); // Adjust the delay time (in milliseconds) as needed
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        // Get the "I want to submit" button by its class name
        const submitButton = document.querySelector(".submit6");

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
        const submitButton = document.querySelector(".submit7");

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
    document.addEventListener("DOMContentLoaded", function () {
        // Get the "I want to submit" button by its class name
        const submitButton = document.querySelector(".submit8");

        // Get the submit message element
        const submitMessage = document.querySelector(".submit-message4");

        // Add a click event listener to the button
        submitButton.addEventListener("click", function () {
            // Display the message
            submitMessage.style.display = "block";

            // Redirect to the desired page after a short delay
            setTimeout(function () {
                window.location.href = "" +
                    "" +
                    "mainTask4.blade.php";
            }, 2000); // Adjust the delay time (in milliseconds) as needed
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        // Get the "I want to submit" button by its class name
        const submitButton = document.querySelector(".submit9");

        // Get the submit message element
        const submitMessage = document.querySelector(".submit-message5");

        // Add a click event listener to the button
        submitButton.addEventListener("click", function () {
            // Display the message
            submitMessage.style.display = "block";

            // Redirect to the desired page after a short delay
            setTimeout(function () {
                window.location.href = "mainTask4.blade.php";
            }, 2000); // Adjust the delay time (in milliseconds) as needed
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        // Get the "I want to submit" button by its class name
        const submitButton = document.querySelector(".submit10");

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
        const submitButton = document.querySelector(".submit11");

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
