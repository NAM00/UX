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

// document.addEventListener("DOMContentLoaded", function () {
//     // Get the "I want to submit" button by its class name
//     const submitButton = document.querySelector(".submit4");

//     // Add a click event listener to the button
//     submitButton.addEventListener("click", function () {
//         // Redirect to the desired page when the button is clicked
//         window.location.href = "page6.html";
//     });
// });
// document.addEventListener("DOMContentLoaded", function () {
//     // Get the "I want to submit" button by its class name
//     const submitButton = document.querySelector(".submit4");

//     // Add a click event listener to the button
//     submitButton.addEventListener("click", function () {
//         // Display a "Submitted" message next to the button
//         const message = document.createElement("p");
//         message.textContent = "Submitted";
//         submitButton.insertAdjacentElement("afterend", message);

//         // Redirect to the desired page after a short delay
//         setTimeout(function () {
//             window.location.href = "page6.html";
//         }, 1000); // Adjust the delay time (in milliseconds) as needed
//     });
// });
document.addEventListener("DOMContentLoaded", function () {
    // Get the "I want to submit" button by its class name
    const submitButton = document.querySelector(".submit4");

    // Get the submit message element
    const submitMessage = document.querySelector(".submit-message");

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
