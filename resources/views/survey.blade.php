<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <title>Survey</title>
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
        margin-left:40px  ;
    }

    .selected {
    color: blue;

    }




    .align-right{
        display: none;
        float:right;
        margin-right: 250px;
        background: #0000FF;
        font-family: Hahmlet;
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





    /*.list1*/
    /*{*/
    /*display: inline-block;*/
    /*font-family: Roboto;*/
    /*font-size: 16px;*/
    /*font-weight: 700;*/
    /*line-height: 19px;*/
    /*letter-spacing: 0em;*/
    /*text-align: left;*/
    /*margin-left: 10px;*/
    /*margin-top: 24px; !* You can adjust the value to move it up or down as needed *!*/



    /*}*/
    .star-rating {
        display: inline-flex;
        align-items: center;
        font-size: 20px;
        cursor: pointer;
        border: 1px solid #ddd;
        padding: 15px;
        border-radius: 8px;
        width: 200px;
        height: 50px;
        top: 309px;
        left: 1000px;
        padding: 22.5px, 33px, 22.5px, 33px;
        border-radius: 34px;
        border: 1px;
        background: #F9F9F9;

        border: 1px solid #000000;
    }

    .star {
        color: #ddd;
        margin: 0 5px;
    }

    .star:hover,
    .star.active {
        color: #ffc107;
    }
    .image1
    {
        display:inline-block;
        vertical-align: top;
    }

    .image2
    {
    display:inline-block;
    vertical-align: top;
    }
    /*.list2*/
    /*{*/
    /*display: inline-block;*/
    /*font-family: Roboto;*/
    /*font-size: 16px;*/
    /*font-weight: 700;*/
    /*line-height: 19px;*/
    /*letter-spacing: 0em;*/
    /*text-align: left;*/
    /*margin-left: 44px;*/
    /*margin-top: 19px; !* You can adjust the value to move it up or down as needed *!*/



    /*}*/
    .image3
    {
    display:inline-block;
    vertical-align: top;
    }
    /*.list3*/
    /*{*/
    /*display: inline-block;*/
    /*font-family: Roboto, serif;*/
    /*font-size: 16px;*/
    /*font-weight: 700;*/
    /*line-height: 19px;*/
    /*letter-spacing: 0em;*/
    /*text-align: left;*/
    /*margin-left: -10px;*/
    /*margin-top: 19px; !* You can adjust the value to move it up or down as needed *!*/



    /*}*/
    .image4
    {
    display:inline-block;
    vertical-align: top;
    }
    /*.list4*/
    /*{*/
    /*display: inline-block;*/
    /*font-family: Roboto, serif;*/
    /*font-size: 16px;*/
    /*font-weight: 700;*/
    /*line-height: 19px;*/
    /*letter-spacing: 0em;*/
    /*text-align: left;*/
    /*margin-left: 10px;*/
    /*margin-top: 19px; !* You can adjust the value to move it up or down as needed *!*/



    /*}*/
    .image5
    {
    display:inline-block;
    vertical-align: top;
    }
    /*.list5*/
    /*{*/
    /*display: inline-block;*/
    /*font-family: Roboto, serif;*/
    /*font-size: 16px;*/
    /*font-weight: 700;*/
    /*line-height: 19px;*/
    /*letter-spacing: 0;*/
    /*text-align: left;*/
    /*margin-left: 10px;*/
    /*margin-top: 19px; !* You can adjust the value to move it up or down as needed *!*/



    /*}*/
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

                <h1 class='pdesign1'><b>Survey</b></h1><br><br><br>

                <div>
                    <img src="ThankYou.jpeg" style="margin-left: -4px">
                    <br><br>
                    <form id="surveyForm" method="POST" action="{{ route('RatingSubmit') }}">
                        @csrf
                        <br>
                        <input type="hidden" id="workerId" name="workerId" value="">

                        <p class="image1"><img src="1.jpeg"></p>
                        <div class="star-rating" style="margin-left: 80px" data-rating="0">
                            <span class="star" data-value="1"><i class="fas fa-star"></i></span>
                            <span class="star" data-value="2"><i class="fas fa-star"></i></span>
                            <span class="star" data-value="3"><i class="fas fa-star"></i></span>
                            <span class="star" data-value="4"><i class="fas fa-star"></i></span>
                            <span class="star" data-value="5"><i class="fas fa-star"></i></span>
                        </div>
                        <input type="hidden" id="starRatingInput1" name="starRatingInput1" value="0">
                        <br><br><br><br>
                        <p class="image2"><img src="2.jpeg"></p>
                        <div class="star-rating" style="margin-left: 18px" data-rating="0">
                            <span class="star" data-value="1"><i class="fas fa-star"></i></span>
                            <span class="star" data-value="2"><i class="fas fa-star"></i></span>
                            <span class="star" data-value="3"><i class="fas fa-star"></i></span>
                            <span class="star" data-value="4"><i class="fas fa-star"></i></span>
                            <span class="star" data-value="5"><i class="fas fa-star"></i></span>
                        </div>
                        <input type="hidden" id="starRatingInput2" name="starRatingInput2" value="0">
                        <br><br><br>
                        <p class="image3"><img src="3.jpeg"></p>
                        <div class="star-rating" style="margin-left: 90px"data-rating="0">
                            <span class="star" data-value="1"><i class="fas fa-star"></i></span>
                            <span class="star" data-value="2"><i class="fas fa-star"></i></span>
                            <span class="star" data-value="3"><i class="fas fa-star"></i></span>
                            <span class="star" data-value="4"><i class="fas fa-star"></i></span>
                            <span class="star" data-value="5"><i class="fas fa-star"></i></span>
                        </div>
                        <input type="hidden" id="starRatingInput3" name="starRatingInput3" value="0">
                        <br><br><br>
                        <p class="image4"><img src="4.jpeg"></p>
                        <div class="star-rating" style="margin-left: 90px" data-rating="0">
                            <span class="star" data-value="1"><i class="fas fa-star"></i></span>
                            <span class="star" data-value="2"><i class="fas fa-star"></i></span>
                            <span class="star" data-value="3"><i class="fas fa-star"></i></span>
                            <span class="star" data-value="4"><i class="fas fa-star"></i></span>
                            <span class="star" data-value="5"><i class="fas fa-star"></i></span>
                        </div>
                        <input type="hidden" id="starRatingInput4" name="starRatingInput4" value="0">
                        <br><br><br>
                        <p class="image5"><img src="5.jpeg"></p>
                        <div class="star-rating" style="margin-left: 50px" data-rating="0">
                            <span class="star" data-value="1"><i class="fas fa-star"></i></span>
                            <span class="star" data-value="2"><i class="fas fa-star"></i></span>
                            <span class="star" data-value="3"><i class="fas fa-star"></i></span>
                            <span class="star" data-value="4"><i class="fas fa-star"></i></span>
                            <span class="star" data-value="5"><i class="fas fa-star"></i></span>
                        </div>
                        <input type="hidden" id="starRatingInput5" name="starRatingInput5" value="0">
                        <br><br>
                        <input type="submit" id="nextButton" class="btn btn-primary align-right" onclick="goToNextPage()" value="Next Step" href="payment.html" role="button">
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
<script>
    var storedValuewid = sessionStorage.getItem("workerIdValue");
    var workerID = document.getElementById("workerId");
    workerID.value = storedValuewid

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
document.addEventListener("DOMContentLoaded", function () {
    const starContainers = document.querySelectorAll(".star-rating");

    starContainers.forEach((container, index) => {
        const stars = container.querySelectorAll(".star");
        const ratingInput = document.getElementById(`starRatingInput${index + 1}`);

        stars.forEach((star) => {
            star.addEventListener("click", function () {
                const value = this.getAttribute("data-value");
                container.setAttribute("data-rating", value);
                ratingInput.value = value;

                stars.forEach((s) => {
                    s.classList.remove("active");
                });

                for (let i = 0; i < value; i++) {
                    stars[i].classList.add("active");
                }

                checkAllQuestionsAnswered();
            });
        });
    });
    function checkAllQuestionsAnswered() {
        const allQuestionsAnswered = Array.from(starContainers).every(container => container.getAttribute("data-rating") !== "0");
        const nextButton = document.getElementById("nextButton");

        if (allQuestionsAnswered) {
            nextButton.style.display = "block";
        } else {
            nextButton.style.display = "none";
        }
    }
});

function goToNextPage() {
    // Link to the next page (welcome.html)
    window.location.href = "payment.blade.php";
}
history.pushState(null, null, document.URL);
window.addEventListener('popstate', function () {
    history.pushState(null, null, document.URL);
});
</script>
