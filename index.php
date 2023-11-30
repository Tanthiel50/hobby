<?php

include 'partials/header.php';
$isLoggedIn = isset($_SESSION['user-id']);

?>
    
    <!-- HERO -->
    <div class="vh-100">
        <!-- HERO BACKGROUND -->
        <div lc-helper="background" class="container-fluid py-5 mb-4 d-flex justify-content-center h-50" style="  background-image: url('./images/bb_blog_1.jpg');
        background-position: center;
        background-size:cover;
        background-repeat:no-repeat">
        <div class="p-5 mb-4 lc-block col-xxl-7 col-lg-8 col-12" style=" backdrop-filter: blur(6px) saturate(102%);
        -webkit-backdrop-filter: blur(6px) saturate(102%);
        background-color: rgba(255, 255, 255, 0.45);
        border-radius: 12px;
        border: 1px solid rgba(209, 213, 219, 0.3);">
        <!-- HERO TEXT -->
        <div class="lc-block">
            <div editable="rich">
                <h1 class="fw-bolder display-3">Battle Bot</h2>
            </div>
        </div>
        <div class="lc-block col-md-8">
            <div editable="rich">
                <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus debitis quis, et natus earum, quisquam ab ullam exercitationem cum fuga eos totam a similique porro. Beatae id maiores quas nesciunt?
                </p>
            </div>
        </div>
        <!-- HERO BUTTON -->
        <div class="lc-block">
            <a class="btn btn-dark" href="#game" role="button">Let's go !</a>
        </div>
    </div>
</div>
<!-- HERO GAME PRESENTATION -->
<div class="title">
    <h2 class="text-center pt-5 display-3">Lorem ipsum dolor sit amet.</h1>
    <p class="text-center p-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime earum ipsam adipisci voluptatum hic, nam nisi sit nemo saepe, aliquid fugit officia nulla minima corporis ut atque magnam, autem quod exercitationem? Officiis illo modi dolorum voluptates dolor mollitia asperiores ullam repudiandae quam possimus aliquid non, minus harum provident alias soluta.</p>
</div>
</div>


<!-- CAROUSEL -->
<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        </ol>
        <!-- ITEMS 1 -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/competitor/competitor1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>End Game</h3>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="carousel-item">
                <img src="./images/competitor/competitor2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Huge</h3>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="carousel-item">
                <img src="./images/competitor/competitor3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Warhead</h3>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="carousel-item">
                <img src="./images/competitor/competitor4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Witch Doctor</h3>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- GAME -->
<!-- IF  CONNECTED -->
<?php if ($isLoggedIn): ?>
    <div class="p-5" id="game">
        <h1 class="text-center my-4 vw-100">
            Let's the battle begin
        </h1>
        <div class="container-fluid p-5" id="gameArea">
            <div class="row">
                <div class="col">
                    <img src="./images/bb_blog_1.jpg" alt="Image 1" class="img-fluid">
                </div>
                <div class="col">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem consequatur veniam aliquid at est obcaecati, aspernatur incidunt corrupti animi excepturi iusto unde nam inventore a velit quod cumque, omnis natus reprehenderit minima quidem! Dicta nobis necessitatibus, perspiciatis adipisci ratione possimus officiis omnis amet sunt molestias ea facilis quo fugit harum.
                    </p>
                </div>
                <div class="col">
                    <img src="./images/bb_blog_1.jpg" alt="Image 2" class="img-fluid">
                </div>
            </div>
            <div class="container-fluid p-5">
                <div class="row">
                    <div class="col">
                        <button>Je vote</button>
                    </div>
                <div class="col">
            </div>
            <div class="col">
                <button>Je vote</button>
            </div>
        </div>
    </div>
    </div>
    </div>
<?php else : ?>
<!-- IF NOT CONNECTED -->
<div class="text-center p-5">
    <h2 class="display-3">Pas si vite !</h2>
    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi vero suscipit, quia a vel pariatur sit magni iste blanditiis cupiditate atque molestias quae ad tempore, voluptatum voluptates eos, vitae autem quibusdam fugit deserunt! Iusto, odio illum. Sed culpa, distinctio quam iusto veniam omnis minus nesciunt? Iste tenetur error et sequi.</div>
    <div class="lc-block p-5">
        <a class="btn btn-dark" href="signin.php" role="button">Je me connecte</a>
    </div>
</div>
<?php endif ?>

<?php

include 'partials/footer.php';

?>