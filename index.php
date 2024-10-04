<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/conflict-detection.min.js" integrity="sha512-e3I3QsLqsuuhMnI0KneOCY3EIIhd55WU/7+hndOQayW2Fur2mdKAhbIEuEFCS/Npx83lqB0XhWzcjJXYIY5a3w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- swipper link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Document</title>
</head>

<body>
    <!-- header -->
    <header></header>

    <!-- navigation -->

    <?php include("include/nav.php"); ?>


    <!-- main -->
    <main>
        <div class="left">
            <div class="section-title">Product Category</div>
            <a href="#">Assam</a>
            </a>

        </div>
        <div class="right">
            <div class="section-title">
                Home page
            </div>
            <div class="product">
                <div class="product-left">
                    <img src="products/coffee.webp" alt="">
                </div>
                <div class="product-right">
                    <p class="title">
                        <a href="#">Coffee</a>
                    </p>
                    <p class="description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni sunt beatae laudantium necessitatibus recusandae expedita repellendus iste ipsum deleniti. Similique, magni? Fugit officiis laborum velit numquam veritatis ipsa veniam sunt?
                    </p>
                    <p class="price">
                        $12
                    </p>
                </div>
            </div>
        </div>
        </div>
    </main>

    <!-- slider -->
    <?php include("include/slider.php"); ?>

    <!-- footer -->

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>