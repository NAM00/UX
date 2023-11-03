<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Survey</title>
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





    .list1
    {
    display: inline-block;
    font-family: Roboto;
    font-size: 16px;
    font-weight: 700;
    line-height: 19px;
    letter-spacing: 0em;
    text-align: left;
    margin-left: 10px;
    margin-top: 24px; /* You can adjust the value to move it up or down as needed */



    }
    .image2
    {
    display:inline-block;
    vertical-align: top;
    }
    .list2
    {
    display: inline-block;
    font-family: Roboto;
    font-size: 16px;
    font-weight: 700;
    line-height: 19px;
    letter-spacing: 0em;
    text-align: left;
    margin-left: 44px;
    margin-top: 19px; /* You can adjust the value to move it up or down as needed */



    }
    .image3
    {
    display:inline-block;
    vertical-align: top;
    }
    .list3
    {
    display: inline-block;
    font-family: Roboto, serif;
    font-size: 16px;
    font-weight: 700;
    line-height: 19px;
    letter-spacing: 0em;
    text-align: left;
    margin-left: -10px;
    margin-top: 19px; /* You can adjust the value to move it up or down as needed */



    }
    .image4
    {
    display:inline-block;
    vertical-align: top;
    }
    .list4
    {
    display: inline-block;
    font-family: Roboto, serif;
    font-size: 16px;
    font-weight: 700;
    line-height: 19px;
    letter-spacing: 0em;
    text-align: left;
    margin-left: 10px;
    margin-top: 19px; /* You can adjust the value to move it up or down as needed */



    }
    .image5
    {
    display:inline-block;
    vertical-align: top;
    }
    .list5
    {
    display: inline-block;
    font-family: Roboto, serif;
    font-size: 16px;
    font-weight: 700;
    line-height: 19px;
    letter-spacing: 0;
    text-align: left;
    margin-left: 10px;
    margin-top: 19px; /* You can adjust the value to move it up or down as needed */



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
                    <p id="item1" class="selected"><img src="colours.jpg" class="img1">Survey</p>
                    <p id="item"><img src="white.jpg" class="img1">Payment Code</p>
                </ul>
            </div>
        </div>
        <div class="col-md-10">
            <div class="side-bar1">
                <br><br>

                <h1 class='pdesign1'><b>Survey</b></h1><br><br>

                <div>
                    <p><img src="ThankYou.jpeg">
                    </p><br><br>
                    <form id="surveyForm">
                        <p class="image1"><img src="1.jpeg"></p>
                        <p class="list1">
                            <input type="radio" name="myRadio" value="Option 1"> 1
                            <input type="radio" name="myRadio" value="Option 2"> 2
                            <input type="radio" name="myRadio" value="Option 3"> 3
                            <input type="radio" name="myRadio" value="Option 4"> 4
                            <input type="radio" name="myRadio" value="Option 5"> 5
                        </p>
                        <br><br><br>
                        <p class="image2"><img src="2.jpeg"></p>
                        <p class="list2">
                            <input type="radio" name="myRadio1" value="Option 1"> 1
                            <input type="radio" name="myRadio1" value="Option 2"> 2
                            <input type="radio" name="myRadio1" value="Option 3"> 3
                            <input type="radio" name="myRadio1" value="Option 4"> 4
                            <input type="radio" name="myRadio1" value="Option 5"> 5
                        </p><br><br><br>
                        <p class="image3"><img src="3.jpeg"></p>
                        <p class="list3">
                            <input type="radio" name="myRadio2" value="Option 5"> 1
                            <input type="radio" name="myRadio2" value="Option 6"> 2
                            <input type="radio" name="myRadio2" value="Option 7"> 3
                            <input type="radio" name="myRadio2" value="Option 8"> 4
                            <input type="radio" name="myRadio2" value="Option 9"> 5
                        </p><br><br><br>
                        <p class="image4"><img src="4.jpeg"></p>
                        <p class="list4">
                            <input type="radio" name="myRadio3" value="Option 10"> 1
                            <input type="radio" name="myRadio3" value="Option 11"> 2
                            <input type="radio" name="myRadio3" value="Option 12"> 3
                            <input type="radio" name="myRadio3" value="Option 13"> 4
                            <input type="radio" name="myRadio3" value="Option 14"> 5
                        </p><br><br><br>
                        <p class="image5"><img src="5.jpeg"></p>
                        <p class="list5">
                            <input type="radio" name="myRadio4" value="Option 15"> 1
                            <input type="radio" name="myRadio4" value="Option 16"> 2
                            <input type="radio" name="myRadio4" value="Option 17"> 3
                            <input type="radio" name="myRadio4" value="Option 18"> 4
                            <input type="radio" name="myRadio4" value="Option 19"> 5
                        </p><br><br><br>

                        <p class="image6"><img src="6.jpeg"></p><br><br>
                        <div class="answer-input">
                            <label for="userAnswer6"><b>Your Answer:</b></label>
                            <textarea id="userAnswer6" name="userAnswer6" rows="2" cols="70"></textarea>

                        </div>

                        <br>
                        <a class="btn btn-primary align-right" href="payment.html" role="button">Next
                            Step</a>
                    </form>
                </div>
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
