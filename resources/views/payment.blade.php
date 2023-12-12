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
            font-family: Hahmlet;
            font-size: 32px;
            font-weight: 500;
            line-height: 18px;
            letter-spacing: 0.1599999964237213px;
            display: inline-block;
            text-align: left;

        }

        .side-bar {
            width: 296px;
            /* height: 4894px; */
            font-family: Hahmlet, sans-serif;
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
            float: right;
            background: #0000FF;
            margin-right: 200px;
            font-family: 'Hahmlet', serif; /* Make sure to use single or double quotes for font family names with spaces */
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

                <h1 class='pdesign1'><b>Payment</b></h1><br><br><br>

                <div>
                    <img src="7.jpeg" style="margin-left: -4px">
                    <br><br>
                <div class="content">
                    <div id="generated-code">{{ $testWorkerId}}</div>
                </div>

                <br><br>
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
    history.pushState(null, null, document.URL);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, document.URL);
    });
</script>
