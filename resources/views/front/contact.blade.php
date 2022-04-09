@extends('front.layout.master')
@section('front-content')
    @include('front.components.carosel')


    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="text-center mb-5 ">Contact For Any Query</h1>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-md-4  " data--delay="0.1s"
                            style="visibility: visible; animation-delay: 0.1s; animation-name: ;">
                            <div class="d-flex align-items-center bg-light rounded p-4">
                                <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3"
                                    style="width: 45px; height: 45px;">
                                    <i class="fa fa-map-marker-alt text-danger"></i>
                                </div>
                                <span>Taiz - Yemen</span>
                            </div>
                        </div>
                        <div class="col-md-4  ">
                            <div class="d-flex align-items-center bg-light rounded p-4">
                                <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3"
                                    style="width: 45px; height: 45px;">
                                    <i class="fa fa-envelope-open text-danger"></i>
                                </div>
                                <span>alhaddademran@gmail.com</span>
                            </div>
                        </div>
                        <div class="col-md-4  " style="visibility: visible; animation-delay: 0.5s; animation-name: ;">
                            <div class="d-flex align-items-center bg-light rounded p-4">
                                <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3"
                                    style="width: 45px; height: 45px;">
                                    <i class="fa fa-phone-alt text-danger"></i>
                                </div>
                                <span>+967 770-774-255</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6  Up" data--delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: Up;">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4367.226305354492!2d44.006343772195905!3d13.581153576176336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x161c6ed9a97785a5%3A0xa5d0f55371ac21ef!2sClub%20Taiz%20tourism!5e1!3m2!1sen!2sbd!4v1643889925134!5m2!1sen!2sbd"
                        frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-md-6">
                    <div class=" Up" style="visibility: visible; animation-delay: 0.5s; animation-name: Up;">
                        <p class="mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt at voluptas praesentium ipsum
                            sunt neque, delectus non reprehenderit, mollitia, obcaecati officia dolorem consequuntur tempore
                            eos quam? Dignissimos fugiat voluptatibus ad.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-danger w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
