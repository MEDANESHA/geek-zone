<?php 
session_start();

?>


<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron" //monntserrat />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Permanent+Marker" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Geek zone</title>

</head>

<body>
    <header>
        <div class="search--bar">
            <img src="img/logo.png" alt="geek zone logo" class="logo" />
            <form action="#" class="search">
                <input type="text" class="search__input" placeholder="Search For Your Desire" />
                <button class="search__button">
                    <svg class="search__icon icon-1">
                        <use xlink:href="img/sprite.svg#icon-svgsearch"></use>
                    </svg>
                </button>
            </form>
            <div class="user__div">
                <button class="user__button  hidden">
                    <!-- <svg class="user__icon">
                    <use xlink:href="img/sprite.svg#icon-svguser"></use>
                </svg>-->
                    <div class="user__icon">
                        <h1 class="user__icon-txt"></h1>
                    </div>



                </button>
                <ul class="user__dropdown hidden">
                    <li class="user__dropdown-item-1">
                        <button class="user__button  user__button-2">

                            <div class="user__icon   user__icon-2">
                                <h1 class="user__icon-txt user__icon-txt-2"></h1>
                            </div>
                        </button>
                        <?php 
                if(isset($_SESSION['username'])){
                echo "<h4  class='user__name'>".$_SESSION["username"] ." ". $_SESSION['lastname']."</h4>
                <h4  class='user__email'>".$_SESSION['email']."</h4>";} ?>
                    </li>

                    <li class="user__dropdown-item" style="margin-top: 3rem;">
                        <a class="user__dropdown-link">My profile</a>
                    </li>
                    <li class="user__dropdown-item   logout">
                        <a class="user__dropdown-link">LogOut</a>
                    </li>
                </ul>
            </div>

            <button class="cart__button" id="cart" data-totalitems="0">
                <svg class="cart__icon">
                    <use xlink:href="img/sprite.svg#icon-svgcart"></use>
                </svg>
            </button>
        </div>





        <nav class="nav-bar">
            <div class="nav-bar__background"></div>
            <ul class="nav-bar__list">
                <li>
                    <a class="nav-bar__item" href="#"><svg class="nav-bar__icon icon-1">
                            <use xlink:href="img/sprite.svg#icon-svghome1"></use>
                        </svg><span class="nav-bar__span">Home</span></a>
                </li>
                <li>
                    <a class="nav-bar__item" href="#galory"><svg class="nav-bar__icon">
                            <use xlink:href="img/sprite.svg#icon-svgbooks"></use>
                        </svg><span class="nav-bar__span">Categories</span></a>
                </li>
                <li>
                    <a class="nav-bar__item" href="#topselling"><svg class="nav-bar__icon icon-3">
                            <use xlink:href="img/sprite.svg#icon-svgfire"></use>
                        </svg><span class="nav-bar__span span-3">Trendes</span></a>
                </li>
                <li>
                    <a class="nav-bar__item" href="#galory"><svg class="nav-bar__icon">
                            <use xlink:href="img/sprite.svg#icon-svgman"></use>
                        </svg><span class="nav-bar__span">Boys</span></a>
                </li>
                <li>
                    <a class="nav-bar__item" href="#galory"><svg class="nav-bar__icon">
                            <use xlink:href="img/sprite.svg#icon-svgwoman"></use>
                        </svg><span class="nav-bar__span">Girls</span></a>
                </li>
            </ul>
            <div class="sign">
                <button class="sign-in">SignIn</button>
                <button class="sign-up">SignUp</button>
            </div>
        </nav>
    </header>
    <main>
        <section class="home">
            <div class="text">
                <h1 class="text__title">GEEK ZONE</h1>
                <p class="text__subtitle">online shopping</p>
                <p class="text__paragraph">
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry Lorem Ipsum has been the industry's .
                </p>
                <button class="text__button">do shopping now</button>
            </div>
            <img src="img/home-img.png" alt="home image" class="image" />
        </section>
        <section class="categories " id="categories">
            <div class="roll-bar">
                <ul class="roll-bar__galory">
                    <li class="roll-bar__container">
                        <a><img src="img/1.png" class="roll-bar__image" alt="logo" /> </a>
                    </li>

                    <li class="roll-bar__container">
                        <a><img src="img/2.png" class="roll-bar__image" alt="logo" /> </a>
                    </li>

                    <li class="roll-bar__container">
                        <a><img src="img/3.png" class="roll-bar__image" alt="logo" /> </a>
                    </li>

                    <li class="roll-bar__container">
                        <a><img src="img/4.png" class="roll-bar__image" alt="logo" /> </a>
                    </li>

                    <li class="roll-bar__container">
                        <a><img src="img/5.png" class="roll-bar__image" alt="logo" /> </a>
                    </li>

                    <li class="roll-bar__container">
                        <a><img src="img/6.png" class="roll-bar__image" alt="logo" /> </a>
                    </li>

                    <li class="roll-bar__container">
                        <a><img src="img/7.png" class="roll-bar__image" alt="logo" /> </a>
                    </li>

                    <li class="roll-bar__container">
                        <a><img src="img/8.png" class="roll-bar__image" alt="logo" /> </a>
                    </li>

                    <li class="roll-bar__container">
                        <a><img src="img/10.png" class="roll-bar__image" alt="logo" />
                        </a>
                    </li>

                    <li class="roll-bar__container">
                        <a><img src="img/12.png" class="roll-bar__image" alt="logo" />
                        </a>
                    </li>

                    <li class="roll-bar__container">
                        <a><img src="img/13.png" class="roll-bar__image" alt="logo" />
                        </a>
                    </li>

                    <li class="roll-bar__container">
                        <a><img src="img/33.png" class="roll-bar__image" alt="logo" />
                        </a>
                    </li>

                    <li class="roll-bar__container">
                        <a><img src="img/14.png" class="roll-bar__image" alt="logo" />
                        </a>
                    </li>

                    <li class="roll-bar__container">
                        <a><img src="img/15.png" class="roll-bar__image" alt="logo" />
                        </a>
                    </li>

                    <li class="roll-bar__container">
                        <a><img src="img/16.png" class="roll-bar__image" alt="logo" />
                        </a>
                    </li>

                    <li class="roll-bar__container">
                        <a><img src="img/1.png" class="roll-bar__image" alt="logo" /> </a>
                    </li>

                    <li class="roll-bar__container">
                        <a><img src="img/2.png" class="roll-bar__image" alt="logo" /> </a>
                    </li>

                    <li class="roll-bar__container">
                        <a><img src="img/3.png" class="roll-bar__image" alt="logo" /> </a>
                    </li>

                    <li class="roll-bar__container">
                        <a><img src="img/4.png" class="roll-bar__image" alt="logo" /> </a>
                    </li>

                    <li class="roll-bar__container">
                        <a><img src="img/5.png" class="roll-bar__image" alt="logo" /> </a>
                    </li>

                    <li class="roll-bar__container">
                        <a><img src="img/6.png" class="roll-bar__image" alt="logo" /> </a>
                    </li>
                </ul>
            </div>
            <div class="top-selling" id="topselling">
                <h1 class="top-selling__title">
                    Top Selling this month
                    <svg class="top-selling__icon">
                        <use xlink:href="img/sprite.svg#icon-svgtrending-up"></use>
                    </svg>
                </h1>
                <div class="slider">
                    <svg class="cards__icon-1">
                        <use xlink:href="img/sprite.svg#icon-svgchevron-thin-left"></use>
                    </svg>
                    <div class="cards " id="cards">
                        <?php 
              
            
              $servername="127.0.0.1";
              $username="root";
              $pw="";
              $bdname="geekzone";
              
              $conn=mysqli_connect($servername,$username,$pw,$bdname);
              if(!$conn)
              {
                die("la connection a échoué ". mysqli_connect_error());
              }	
              $sql="SELECT * FROM article ORDER BY `qt-sold` DESC LIMIT 10";
              $result=mysqli_query($conn,$sql);
              $j=1;
              if(mysqli_num_rows($result) > 0) {
                 
                  while($row = mysqli_fetch_assoc($result)) {
                  $print ='<div class="card card-'.$j.'">
                    <figure>';

                     $print= $print. '<img src="data:image/png;base64,'.base64_encode( $row["img"]).'" alt="product picture" class="card__image"/>
                     
                        <figcaption class="card__text">'.$row["nom_article"].' </figcaption>
                            
                       
                    </figure>
                    <div class="card__ratting">';

                    for($i=0;$i<$row["rating"];$i++){
                      $print=$print.'<svg class="card__icon">
                      <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                  </svg>';
                    }
                   $print=$print.'     
                        
                    </div>
                    <h1 class="card__price"><span>'.$row["prix"]. '</span>dt</h1>
                    <button class="card__button">
                        <svg class="card__button-icon-1">
                            <use xlink:href="img/sprite.svg#icon-svgplus1"></use>
                        </svg>
                        <span class="card__button-text">Add To Cart</span>
                        <svg class="card__button-icon-2">
                            <use xlink:href="img/sprite.svg#icon-svgcart"></use>
                        </svg>
                        
                    </button>
                </div>';
                echo $print;
                $j++;

                 // echo "id: " . $row["id"]. " - Name: " . $row["nom-article"]. " " ."<br>";
                //echo '<img src="data:image/png;base64,'.base64_encode( $row["img"]).'"/>';
                  }
                  }
                   else {
                  echo "0 résultats";
                  }
                 
                ?>
                        <!-- <div class="card card-1">
                            <figure>
                                <img src="img/image5.png" alt="product picture" class="card__image" />
                                <figcaption class="card__text">
                                    Naruto Shippuden Akatsuki Cloud Beanie
                                </figcaption>
                            </figure>
                            <div class="card__ratting">
                                <svg class="card__icon">
                                    <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                                </svg>
                                <svg class="card__icon">
                                    <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                                </svg>
                                <svg class="card__icon">
                                    <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                                </svg>
                                <svg class="card__icon">
                                    <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                                </svg>
                                <svg class="card__icon">
                                    <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                                </svg>
                            </div>
                            <h1 class="card__price">18.700 <span>dt</span></h1>
                            <button class="card__button">
                                <svg class="card__button-icon-1">
                                    <use xlink:href="img/sprite.svg#icon-svgplus1"></use>
                                </svg>
                                <span class="card__button-text">Add To Cart</span>
                                <svg class="card__button-icon-2">
                                    <use xlink:href="img/sprite.svg#icon-svgcart"></use>
                                </svg>
                                <!--<span class="cart-item"></span>--
                        </button>
                    </div>
                    <div class="card card-2">
                        <figure>
                            <img src="img/image2.jpg" alt="product picture" class="card__image" />
                            <figcaption class="card__text">
                                Demon Slayer Logo T-Shirt
                            </figcaption>
                        </figure>
                        <div class="card__ratting">
                            <svg class="card__icon">
                                <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                            </svg>
                            <svg class="card__icon">
                                <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                            </svg>
                            <svg class="card__icon">
                                <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                            </svg>
                            <svg class="card__icon">
                                <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                            </svg>
                            <svg class="card__icon">
                                <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                            </svg>
                        </div>
                        <h1 class="card__price">80.800 dt</h1>
                        <button class="card__button button2">
                            <svg class="card__button-icon-1">
                                <use xlink:href="img/sprite.svg#icon-svgplus1"></use>
                            </svg>
                            <span class="card__button-text">Add To Cart</span>
                            <svg class="card__button-icon-2">
                                <use xlink:href="img/sprite.svg#icon-svgcart"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="card card-3">
                        <figure>
                            <img src="img/image4.jpg" alt="product picture" class="card__image" />
                            <figcaption class="card__text">
                                Demon Slayer Logo T-Shirt
                            </figcaption>
                        </figure>
                        <div class="card__ratting">
                            <svg class="card__icon">
                                <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                            </svg>
                            <svg class="card__icon">
                                <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                            </svg>
                            <svg class="card__icon">
                                <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                            </svg>
                            <svg class="card__icon">
                                <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                            </svg>
                            <svg class="card__icon">
                                <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                            </svg>
                        </div>
                        <h1 class="card__price">67.400 dt</h1>
                        <button class="card__button">
                            <svg class="card__button-icon-1">
                                <use xlink:href="img/sprite.svg#icon-svgplus1"></use>
                            </svg>
                            <span class="card__button-text">Add To Cart</span>
                            <svg class="card__button-icon-2">
                                <use xlink:href="img/sprite.svg#icon-svgcart"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="card card-4">
                        <figure>
                            <img src="img/img8.jpg" alt="product picture" class="card__image" />
                            <figcaption class="card__text">
                                DEMON SLAYER TANJIRO CHECKERED BACKPACK
                            </figcaption>
                        </figure>
                        <div class="card__ratting">
                            <svg class="card__icon">
                                <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                            </svg>
                            <svg class="card__icon">
                                <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                            </svg>
                            <svg class="card__icon">
                                <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                            </svg>
                            <svg class="card__icon">
                                <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                            </svg>
                            <svg class="card__icon">
                                <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                            </svg>
                        </div>
                        <h1 class="card__price">175.500 dt</h1>
                        <button class="card__button">
                            <svg class="card__button-icon-1">
                                <use xlink:href="img/sprite.svg#icon-svgplus1"></use>
                            </svg>
                            <span class="card__button-text">Add To Cart</span>
                            <svg class="card__button-icon-2">
                                <use xlink:href="img/sprite.svg#icon-svgcart"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="card card-5">
                        <figure>
                            <img src="img/img222.png" alt="product picture" class="card__image" />
                            <figcaption class="card__text">
                                la casa de papel phone case
                            </figcaption>
                        </figure>
                        <div class="card__ratting">
                            <svg class="card__icon">
                                <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                            </svg>
                            <svg class="card__icon">
                                <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                            </svg>
                            <svg class="card__icon">
                                <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                            </svg>
                            <svg class="card__icon">
                                <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                            </svg>
                            <svg class="card__icon">
                                <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                            </svg>
                        </div>
                        <h1 class="card__price">20.000 dt</h1>
                        <button class="card__button">
                            <svg class="card__button-icon-1">
                                <use xlink:href="img/sprite.svg#icon-svgplus1"></use>
                            </svg>
                            <span class="card__button-text">Add To Cart</span>
                            <svg class="card__button-icon-2">
                                <use xlink:href="img/sprite.svg#icon-svgcart"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="card card-6">
                        <figure>
                            <img src="img/img7.jpg" alt="product picture" class="card__image" />
                            <figcaption class="card__text">Naruto Face Mask</figcaption>
                        </figure>
                        <div class="card__ratting">
                            <svg class="card__icon">
                                <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                            </svg>
                            <svg class="card__icon">
                                <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                            </svg>
                            <svg class="card__icon">
                                <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                            </svg>
                            <svg class="card__icon">
                                <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                            </svg>
                            <svg class="card__icon">
                                <use xlink:href="img/sprite.svg#icon-svgstar"></use>
                            </svg>
                        </div>
                        <h1 class="card__price">19.800 dt</h1>
                        <button class="card__button">
                            <svg class="card__button-icon-1">
                                <use xlink:href="img/sprite.svg#icon-svgplus1"></use>
                            </svg>
                            <span class="card__button-text">Add To Cart</span>
                            <svg class="card__button-icon-2">
                                <use xlink:href="img/sprite.svg#icon-svgcart"></use>
                            </svg>
                        </button>
                    </div>-->
                    </div>
                    <svg class="cards__icon-2">
                        <use xlink:href="img/sprite.svg#icon-svgchevron-thin-right"></use>
                    </svg>
                </div>
            </div>
        </section>
        <section class="products" id="galory">
            <h1 class="products__title">Over 1000 available product</h1>

            <div class="products__nav-bar">
                <ul class="products__nav-bar-list">
                    <il class="products__nav-bar-item active"><a href="#galory" class="products__nav-bar-link">Most
                            Popular</a></il>
                    <il class="products__nav-bar-item "><a href="#galory" class="products__nav-bar-link">New
                            Releases</a>
                    </il>
                    <il class="products__nav-bar-item"><a href="#galory" class="products__nav-bar-link">Accesories</a>
                    </il>
                    <il class="products__nav-bar-item"><a href="#galory" class="products__nav-bar-link">Clothing</a>
                    </il>
                    <il class="products__nav-bar-item"><a href="#galory" class="products__nav-bar-link">Face Mask</a>
                    </il>
                </ul>
            </div>
            <div class="products__scroll">
                <ul class="products__galory">
                    <?php 
                $sql2="SELECT * FROM article ORDER BY `qt-sold` DESC LIMIT 12";
              $result2=mysqli_query($conn,$sql2);
              if(mysqli_num_rows($result2) > 0) {
                 
                  while($row = mysqli_fetch_assoc($result2)) {
                  $print2 ='<li class="products__container">
                  <a>'. '<img src="data:image/png;base64,'.base64_encode( $row["img"]).'" class="products__galory-image" alt="article"/>
                  </a>
              </li>';
              echo $print2;
                  }
                }
                 ?>
                    <!-- <li class="products__container">
                        <a><img src="img/imgg1.jpg" class="products__galory-image" alt="article" />
                        </a>
                    </li>

                    <li class="products__container">
                        <a><img src="img/img8.jpg" class="products__galory-image" alt="article" />
                        </a>
                    </li>

                    <li class="products__container">
                        <a><img src="img/img9.jpg" class="products__galory-image" alt="article" />
                        </a>
                    </li>

                    <li class="products__container">
                        <a><img src="img/img44.png" class="products__galory-image" alt="article" />
                        </a>
                    </li>

                    <li class="products__container">
                        <a><img src="img/c.png" class="products__galory-image" alt="article" />
                        </a>
                    </li>
                    <li class="products__container">
                        <a><img src="img/b.png" class="products__galory-image" alt="article" />
                        </a>
                    </li>
                    <li class="products__container">
                        <a><img src="img/img11.png" class="products__galory-image" alt="article" />
                        </a>
                    </li>
                    <li class="products__container">
                        <a><img src="img/image5.png" class="products__galory-image" alt="article" />
                        </a>
                    </li>-->
                </ul>
            </div>
        </section>
        <script type="text/javascript">
        let nbr = document.querySelectorAll(".products__nav-bar-item").length;
        let item = document.querySelectorAll(".products__nav-bar-item");
        item[0].addEventListener("click", function() {
            for (let i = 0; i < nbr; i++) {
                item[i].classList.remove("active");
            }



            item[0].classList.add("active");
            document.querySelector(".products__galory").innerHTML = `<?php 
                $sql2="SELECT * FROM article ORDER BY `qt-sold` DESC LIMIT 12";
              $result2=mysqli_query($conn,$sql2);
              if(mysqli_num_rows($result2) > 0) {
                 
                  while($row = mysqli_fetch_assoc($result2)) {
                  $print2 ='<li class="products__container">
                  <a>'. '<img src="data:image/png;base64,'.base64_encode( $row["img"]).'" class="products__galory-image" alt="article"/>
                  </a>
              </li>';
              echo $print2;
                  }
                }
                 ?>`
        });
        item[1].addEventListener("click", function() {
            for (let i = 0; i < nbr; i++) {
                item[i].classList.remove("active");
            }


            item[1].classList.add("active");
            document.querySelector(".products__galory").innerHTML = `
            <?php 
                $sql2="SELECT * FROM article ORDER BY release_date DESC LIMIT 12";
              $result2=mysqli_query($conn,$sql2);
              if(mysqli_num_rows($result2) > 0) {
                 
                  while($row = mysqli_fetch_assoc($result2)) {
                  $print2 ='<li class="products__container">
                  <a>'. '<img src="data:image/png;base64,'.base64_encode( $row["img"]).'" class="products__galory-image" alt="article"/>
                  </a>
              </li>';
              echo $print2;
                  }
                }
                 ?>
            `;
        });
        item[2].addEventListener("click", function() {
            for (let i = 0; i < nbr; i++) {
                item[i].classList.remove("active");
            }


            item[2].classList.add("active");
            document.querySelector(".products__galory").innerHTML = `
            <?php 
                $sql2="SELECT * FROM article where type='accessoire' ;";
              $result2=mysqli_query($conn,$sql2);
              if(mysqli_num_rows($result2) > 0) {
                 
                  while($row = mysqli_fetch_assoc($result2)) {
                  $print2 ='<li class="products__container">
                  <a>'. '<img src="data:image/png;base64,'.base64_encode( $row["img"]).'" class="products__galory-image" alt="article"/>
                  </a>
              </li>';
              echo $print2;
                  }
                }
                 ?>
            `;
        });
        item[3].addEventListener("click", function() {
            for (let i = 0; i < nbr; i++) {
                item[i].classList.remove("active");
            }


            item[3].classList.add("active");
            document.querySelector(".products__galory").innerHTML = `
            <?php 
                $sql2="SELECT * FROM article where type='clothing' ;";
              $result2=mysqli_query($conn,$sql2);
              if(mysqli_num_rows($result2) > 0) {
                 
                  while($row = mysqli_fetch_assoc($result2)) {
                  $print2 ='<li class="products__container">
                  <a>'. '<img src="data:image/png;base64,'.base64_encode( $row["img"]).'" class="products__galory-image" alt="article"/>
                  </a>
              </li>';
              echo $print2;
                  }
                }
                 ?>
            `;
        });
        item[4].addEventListener("click", function() {
            for (let i = 0; i < nbr; i++) {
                item[i].classList.remove("active");
            }


            item[4].classList.add("active");
            document.querySelector(".products__galory").innerHTML = `
            <?php 
                $sql2="SELECT * FROM article where type='facemask' ;";
              $result2=mysqli_query($conn,$sql2);
              if(mysqli_num_rows($result2) > 0) {
                 
                  while($row = mysqli_fetch_assoc($result2)) {
                  $print2 ='<li class="products__container">
                  <a>'. '<img src="data:image/png;base64,'.base64_encode( $row["img"]).'" class="products__galory-image" alt="article"/>
                  </a>
              </li>';
              echo $print2;
                  }
                }
                 ?>
            `;
        });
        </script>










        <section>
            <div class="popup hidden" id="popup">
                <button class="popup__close">&times;</button>
                <div class="popup__container">
                    <form method="post" action="" enctype="multipart/form-data" class="popup__form">
                        <h1 class="popup__title">Sign in Geek Zone</h1>
                        <h1 class="popup__error"></h1>
                        <div class="form__group">
                            <input type="email" class="form__input" name="email-2" placeholder="Email address"
                                id="email-2" required />
                            <label for="email-2" class="form__label">Email address</label>
                        </div>
                        <div class="form__group">
                            <input type="password" class="form__input" name="password-2" placeholder="Password"
                                id="password-2" required />
                            <label for="password-2" class="form__label">Password</label>
                        </div>

                        <button name="submit-2" class="popup__button">SIGN IN</button>
                    </form>
                </div>
            </div>
            <div class="overlay hidden"></div>
        </section>

        <section>
            <div class="popup popup2 hidden" id="popup">
                <button class="popup__close close2">&times;</button>
                <div class="popup__container">
                    <form method="post" action="" enctype="multipart/form-data" class="popup__form">
                        <h1 class="popup__title">Sign up Geek Zone</h1>
                        <h1 class="popup2__error"></h1>
                        <div class="form__group">
                            <input type="text" class="form__input" name="name" placeholder="Fisrt Name" id="Fisrt Name"
                                pattern="[A-Za-z\s]*" title="name must contains only letters" required />
                            <label for="Fisrt Name" class="form__label">Fisrt Name </label>
                        </div>

                        <div class="form__group">
                            <input type="text" class="form__input" name="lastname" placeholder="Last Name"
                                id="Last Name" pattern="[A-Za-z\s]*" title="lastname must contains only letters"
                                required />
                            <label for="Last Name" class="form__label">Last Name</label>
                        </div>

                        <div class="form__group">
                            <input type="date" class="form__input" name="birthday" placeholder="Birthday" id="Birthday"
                                required />
                            <label for="Birthday" class="form__label">Birthday</label>
                        </div>

                        <div class="form__group">
                            <div class="form__radio-group">
                                <input type="radio" class="form__radio-input" name="Male" value="Male" id="Male"
                                    name="size" />
                                <label for="Male" class="form__radio-label"><span class="form__radio-button"></span>
                                    Male
                                </label>
                            </div>

                            <div class="form__radio-group">
                                <input type="radio" class="form__radio-input" name="Female" value="female" id="Female"
                                    name="size" />
                                <label for="Female" class="form__radio-label"><span class="form__radio-button"></span>
                                    Female
                                </label>
                            </div>
                        </div>
                        <div class="form__group">
                            <input type="email" class="form__input" placeholder="Email address" name="email" id="email"
                                required />
                            <label for="email" class="form__label">Email address</label>
                        </div>

                        <div class="form__group">
                            <input type="password" class="form__input" name="password" placeholder="Password"
                                id="passwordup" required />
                            <label for="passwordup" class="form__label">Password</label>
                        </div>
                        <div class="form__group">
                            <input type="password" class="form__input" placeholder="Confirme Password"
                                id="password-confirme" oninput="check(this)" required />
                            <label for="password-confirme" class="form__label">Confirme Password</label>
                        </div>
                        <script language='javascript' type='text/javascript'>
                        function check(input) {
                            if (input.value != document.getElementById('passwordup').value) {
                                input.setCustomValidity('Password Must be Matching.');
                            } else {
                                // input is valid -- reset the error message
                                input.setCustomValidity('');
                            }
                        }
                        </script>

                        <button name="submit" class="popup__button">SIGN UP</button>
                    </form>
                </div>
            </div>
            <div class="overlay hidden"></div>
            <div class="addtocart ">
                <button class="popup__close close3">&times;</button>
                <div class="total hidden">
                    <h1>total price : <span class="total-price">0.00</span>dt</h1>
                </div>

                <!--  <div class="cart__product">
                    <div class="line1">
                        <figure class="cart__product-fig">
                            <img src="img/img7.jpg" alt="product picture" class="cart__product-image" />
                            <figcaption class="cart__product-text">Naruto Face Mask</figcaption>
                        </figure>
                        <h1 class="cart__product-price"><span style="font-size: 2rem;">19.800</span> dt</h1>
                    </div>
                    <div class="line2">
                        <div class="qt">
                            <span>Qt :</span> <input type="number" min="1" value="1" class="cart__product-quantity">
                        </div>
                        <button class="cart__product-button"> <svg class="cart__product-button-icon">
                                <use xlink:href="img/sprite.svg#icon-svgcredit-card"></use>
                            </svg>
                            <span class="cart__product-button-text">by now</span></button>
                    </div>

                </div>-->


            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container1">
            <div class="footer-col-1">
                <h2>FOLLOW OUR SOCIAL MEDIA</h2>
                <div class=socialmedia>
                    <a href="https://www.facebook.com/" target="_blank">
                        <svg class="footer__icon">
                            <use xlink:href="img/sprite.svg#icon-svgfacebook"></use>
                        </svg>
                    </a>
                    <a href="https://www.twitter.com/" target="_blank">
                        <svg class="footer__icon">
                            <use xlink:href="img/sprite.svg#icon-svgtwitter"></use>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank">
                        <svg class="footer__icon">
                            <use xlink:href="img/sprite.svg#icon-svginstagram"></use>
                        </svg>
                    </a>
                    <a href="https://www.youtube.com/" target="_blank">
                        <svg class="footer__icon">
                            <use xlink:href="img/sprite.svg#icon-svgyoutube1"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="footer-col-2">

                <h2>JOIN OUR NEWS LETTER</h2>
                <div class="join__input">
                    <input type="email" placeholder="Email Address" id="email5">
                    <input type="submit" value="Subscribe" id="btn-join">
                </div>

            </div>
        </div>
        <div class="container2">
            <div class="footer__navbar">
                <!--l5at labyith-->

                <ul>
                    <li class="link-f"><a style="text-decoration:none" href="">About US</a></li>
                    <li class="link-f"><a style="text-decoration:none" href="">Contact Us</a></li>
                    <li class="link-f"><a style="text-decoration:none" href="">Services</a></li>
                    <li class="link-f"><a style="text-decoration:none" href="">Privacy</a></li>
                    <li class="link-f"><a style="text-decoration:none" href="">Policy</a></li>
                    <li class="link-f"><a style="text-decoration:none" href="">Terms</a></li>
                </ul>
            </div>
            <div class="footer-bottom">
                <p class="copyrights"> Copyright &nbsp &nbsp &nbsp © &nbsp 2021 &nbsp , &nbsp Geek Zone</p>
                <img class="footer__logo" src="img/logo.png" width="200px">
            </div>

        </div>
        <div class="polygon">

        </div>
    </footer>
    <div class="none hidden"></div>
    <div class="php hidden"></div>
    <script src="script.js"></script>
</body>

</html>

<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["submit"])){
        if(isset($_POST["Male"])){
            $genre="Male";
        }
        else if(isset($_POST["Female"])){
            $genre="Female";
        }
        $sql_check="select * from users where email='".$_POST["email"]."'" ;
        $check=mysqli_query($conn,$sql_check);
        if (mysqli_num_rows($check)==0) {
            $sql_add = "insert into users (name,lastname,birthday,genre,email,password) values ('".$_POST["name"]."','".$_POST["lastname"]."','".$_POST["birthday"]."','".$genre."','".$_POST["email"]."','".$_POST["password"]."')";
            $add=mysqli_query($conn, $sql_add);
        }
        else{
            echo "<script>
            document.querySelector('.popup2__error').textContent = 'email already in use please try another one!';
          
            OpenPopup2();
            </script>";
        }
    }
    else if(isset($_POST["submit-2"])){
      
        $sql_get="select * from users where email='".$_POST["email-2"]."' and password='".$_POST["password-2"]."'" ;
        $get=mysqli_query($conn,$sql_get);
        $res= mysqli_num_rows($get);
        if($res == 0){
        echo "<script>
        document.querySelector('.popup__error').textContent = 'email or password is invalid please repeate!!';
      
        OpenPopup();
        </script>";
     
        }
        else if ($res ==1){
            while($row2 = mysqli_fetch_assoc($get)){
            $_SESSION["username"]=$row2["name"];
            $_SESSION["lastname"]=$row2["lastname"];
            $_SESSION["genre"]=$row2["genre"];
            $_SESSION["birthday"]=$row2["birthday"];
            $_SESSION["password"]=$row2["password"];
            $_SESSION["email"]=$row2["email"];
            }
            $usersesion= strtoupper($_SESSION["username"][0]. $_SESSION["lastname"][0]);
          
            
            echo "<script>
            
            document.querySelector('.user__button').classList.remove('hidden') ;
            document.querySelector('.sign-in').classList.add('hidden') ;
            document.querySelector('.sign-up').classList.add('hidden') ;
            document.querySelector('.user__icon-txt').textContent ='$usersesion';
            document.querySelector('.user__icon-txt-2').textContent ='$usersesion';
            
            </script>";
        }
        
       
        
    }
  }


  if(isset($_SESSION["username"]) && isset($_SESSION["lastname"])){
    
    $usersesion= strtoupper($_SESSION["username"][0]. $_SESSION["lastname"][0]);
   $str="username";
   
    echo "<script>
     
    document.querySelector('.user__button').classList.remove('hidden') ;
    
    document.querySelector('.user__icon-txt').textContent ='$usersesion';
    document.querySelector('.user__icon-txt-2').textContent ='$usersesion';
 

</script>";
echo $_SESSION["username"];
}

?>