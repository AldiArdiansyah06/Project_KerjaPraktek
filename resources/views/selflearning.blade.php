@extends('layout.main')

@section('title', 'Self Learning')

@section('content')
<!-- selflearning Start -->
<div class="selflearning">
    <div class="container">
        <div class="section-header text-center">
            <h2>Menu Self Learning</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <ul id="selflearning-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".first">Buldozer</li>
                    <li data-filter=".second">Eskavator</li>
                    <li data-filter=".third">DLL</li>
                </ul>
            </div>
        </div>
        <div class="row selflearning-container">
            <div class="col-lg-4 col-md-6 col-sm-12 selflearning-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="selflearning-warp">
                    <div class="selflearning-img">
                        <img src="img/selflearning-1.jpg" alt="Image">
                        <div class="selflearning-overlay">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare
                                velit non. Aliqu metus tortor, auctor id gravi condime, viverra quis sem.
                            </p>
                        </div>
                    </div>
                    <div class="selflearning-text">
                        <h3>Project Name</h3>
                        <a href="single.html" class="btn">></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 selflearning-item second wow fadeInUp" data-wow-delay="0.2s">
                <div class="selflearning-warp">
                    <div class="selflearning-img">
                        <img src="img/selflearning-2.jpg" alt="Image">
                        <div class="selflearning-overlay">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare
                                velit non. Aliqu metus tortor, auctor id gravi condime, viverra quis sem.
                            </p>
                        </div>
                    </div>
                    <div class="selflearning-text">
                        <h3>Project Name</h3>
                        <a href="single.html" class="btn">></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 selflearning-item third wow fadeInUp" data-wow-delay="0.3s">
                <div class="selflearning-warp">
                    <div class="selflearning-img">
                        <img src="img/selflearning-3.jpg" alt="Image">
                        <div class="selflearning-overlay">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare
                                velit non. Aliqu metus tortor, auctor id gravi condime, viverra quis sem.
                            </p>
                        </div>
                    </div>
                    <div class="selflearning-text">
                        <h3>Project Name</h3>
                        <a href="single.html" class="btn">></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 selflearning-item first wow fadeInUp" data-wow-delay="0.4s">
                <div class="selflearning-warp">
                    <div class="selflearning-img">
                        <img src="img/selflearning-4.jpg" alt="Image">
                        <div class="selflearning-overlay">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare
                                velit non. Aliqu metus tortor, auctor id gravi condime, viverra quis sem.
                            </p>
                        </div>
                    </div>
                    <div class="selflearning-text">
                        <h3>Project Name</h3>
                        <a href="single.html" class="btn">></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 selflearning-item second wow fadeInUp" data-wow-delay="0.5s">
                <div class="selflearning-warp border-2">
                    <div class="selflearning-img">
                        <img src="img/selflearning-5.jpg" alt="Image">
                        <div class="selflearning-overlay">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare
                                velit non. Aliqu metus tortor, auctor id gravi condime, viverra quis sem.
                            </p>
                        </div>
                    </div>
                    <div class="selflearning-text">
                        <h3>Project Name</h3>
                        <a href="single.html" class="btn">></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 selflearning-item third wow fadeInUp" data-wow-delay="0.6s">
                <div class="selflearning-warp">
                    <div class="selflearning-img">
                        <img src="img/selflearning-6.jpg" alt="Image">
                        <div class="selflearning-overlay">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare
                                velit non. Aliqu metus tortor, auctor id gravi condime, viverra quis sem.
                            </p>
                        </div>
                    </div>
                    <div class="selflearning-text">
                        <h3>Project Name</h3>
                        <a href="single.html" class="btn">></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 load-more">
                <a class="btn" href="#">Load More</a>
            </div>
        </div>
    </div>
</div>
<!-- selflearning End -->
@endsection
