<div class="row mb">
    <div class="boxtrai mr">
        <div class="row">
            <div class="banner mb">
                <!-- Slideshow container -->
                <div class="slideshow-container">



                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 8</div>
                        <img src="view/image/1.webp" style="width:100%">
                        <div class="text">Caption Text</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 8</div>
                        <img src="view/image/2.webp" style="width:100%">
                        <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 8</div>
                        <img src="view/image/3.webp" style="width:100%">
                        <div class="text">Caption Three</div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">4 / 8</div>
                        <img src="view/image/4.webp" style="width:100%">
                        <div class="text">Caption Text</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">5 / 8</div>
                        <img src="view/image/5.webp" style="width:100%">
                        <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">6 / 8</div>
                        <img src="view/image/6.webp" style="width:100%">
                        <div class="text">Caption Three</div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">7 / 8</div>
                        <img src="view/image/7.jpg" style="width:100%">
                        <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">8 / 8</div>
                        <img src="view/image/8.webp" style="width:100%">
                        <div class="text">Caption Three</div>
                    </div>



                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $i = 1;
            foreach ($spnew as $sp) {
                extract($sp);
                $hinh = $img_path . $img;
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                if ($i % 3 == 0) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo '<div class="boxsp ' . $mr . '">
                <div class="img row"><a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a></div>
                <p>' . $price . '</p>
                <a href="' . $linksp . '">' . $name . '</a>
            <div class="row btnaddtocart">
                <form action="index.php?act=addtocart" method="post">
                    <input type="hidden" name="id" value="'.$id.'">
                    <input type="hidden" name="name" value="'.$name.'">
                    <input type="hidden" name="img" value="'.$img.'">
                    <input type="hidden" name="price" value="'.$price.'">
                    <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                </form>
            </div>
                </div>';
                $i += 1;
            }
            ?>

            

        </div>
    </div>




    <div class="boxphai">
        <?php include "boxright.php"; ?>
    </div>
</div>