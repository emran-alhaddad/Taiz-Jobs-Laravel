@extends('front.layout.master')
@section('front-content')
@include("front.components.carosel")

    <div class="card mb-3 ms-3 me-3 mb-5 border-1 border-danger p-3">
        <div class="row g-0">
            <div class="col-md-4 col-sm-5">
                <img src="front_assets/images/microsoft.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8 col-sm-7">
                <div class="card-body">
                    <h5 class="card-title">Microsoft Company</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, magnam! Hic doloribus sint assumenda harum esse animi libero praesentium ullam.
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam aliquid earum amet autem dolor. Voluptatum quam enim, qui explicabo sapiente sequi vel. Hic accusamus distinctio qui adipisci voluptate cum numquam. Lorem ipsum dolor sit amet consectetur

                        </p>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, quo exercitationem aspernatur veritatis excepturi repellat ratione dolores. Doloremque odio minus enim incidunt hic vitae asperiores, velit libero quam obcaecati tempore quisquam perferendis
                            pariatur, iusto voluptas, rem possimus adipisci ut harum voluptate repudiandae qui minima quia numquam. Veritatis eum aperiam, vero assumenda, eveniet excepturi magni praesentium reprehenderit possimus recusandae veniam voluptate
                            iste cumque! Laborum pariatur laboriosam ex praesentium dolore ipsa quod voluptatem accusantium beatae voluptatibus quibusdam officia maxime, aut nobis animi unde eius quos quo velit nostrum provident hic optio. Voluptatibus
                            minima nihil cumque rerum voluptates temporibus quasi cupiditate, aliquid in error et atque iste at inventore officiis provident sequi odio accusantium esse asperiores enim. Corrupti vel voluptates distinctio amet illum placeat
                            eligendi laborum, quo iusto sit nostrum molestiae iure cupiditate modi doloribus minus rem, sed esse doloremque assumenda error earum, incidunt provident at! Impedit ipsa dolore distinctio rerum labore consequatur eveniet nulla,
                            mollitia nihil in quas deleniti eum minima eaque veniam ullam illo porro nisi. Iusto veniam accusantium hic exercitationem corrupti excepturi dolorem sed velit! Aperiam cum dolore, exercitationem beatae voluptatibus magni.
                            Perferendis accusamus omnis ducimus? Ullam consequuntur maiores mollitia officia quibusdam quidem laudantium earum. Obcaecati id earum ipsam dicta.
                        </p>
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 Years ago</small></p>
                </div>
            </div>
        </div>

    </div>

    <section class="counter bg-secondary text-danger">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="counter-text">
                        <span aria-hidden="true" class="fas fa-briefcase"></span>
                        <h3>1000</h3>
                        <p>Jobs Posted</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="counter-text">
                        <span class="box1"><span aria-hidden="true" class="fas fa-expand-arrows-alt"></span></span>
                        <h3>207</h3>
                        <p>All Companies</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="counter-text">
                        <span class="box1"><span aria-hidden="true" class="fas fa-user-alt"></span></span>
                        <h3>700+</h3>
                        <p>Total Members</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="counter-text">
                        <span class="box1"><span aria-hidden="true" class="fas fa-smile"></span></span>
                        <h3>802+</h3>
                        <p>Happy Members</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-xl about-us mb-5">
        <div class="row">
            <div class="col-sm-12">
                <h2>What <b>our customers</b> are saying</h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="media">
                                        <img src="front_assets/images/clients/1.jpg" class="mr-3" alt="">
                                        <div class="media-body">
                                            <div class="testimonial">
                                                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nam eusem scelerisque tempor, varius quam luctus dui. Mauris magna metus nec.</p>
                                                <p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="media">
                                        <img src="front_assets/images/clients/2.jpg" class="mr-3" alt="">
                                        <div class="media-body">
                                            <div class="testimonial">
                                                <p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra.</p>
                                                <p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="media">
                                        <img src="front_assets/images/clients/3.jpg" class="mr-3" alt="">
                                        <div class="media-body">
                                            <div class="testimonial">
                                                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nam eusem scelerisque tempor, varius quam luctus dui. Mauris magna metus nec.</p>
                                                <p class="overview"><b>Michael Holz</b>, Seo Analyst</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="media">
                                        <img src="front_assets/images/clients/4.jpg" class="mr-3" alt="">
                                        <div class="media-body">
                                            <div class="testimonial">
                                                <p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra.</p>
                                                <p class="overview"><b>Mary Saveley</b>, Web Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="media">
                                        <img src="front_assets/images/clients/5.jpg" class="mr-3" alt="">
                                        <div class="media-body">
                                            <div class="testimonial">
                                                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nam eusem scelerisque tempor, varius quam luctus dui. Mauris magna metus nec.</p>
                                                <p class="overview"><b>Martin Sommer</b>, UX Analyst</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="media">
                                        <img src="front_assets/images/clients/6.jpg" class="mr-3" alt="">
                                        <div class="media-body">
                                            <div class="testimonial">
                                                <p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra.</p>
                                                <p class="overview"><b>John Williams</b>, Web Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   @endsection
