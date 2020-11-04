@extends('layouts.frontend.app')
@section('content')


<!-- Start - section 1 -->
<div class="section-1">

    <div class="row m-0">
        <div class="col-md-6 m-0 p-0">
            <img src="{{asset('assets/frontend/assets/img/section-1-bg.png')}}" alt="Image" class="section-1-bg">

            <div class="section-1-content">
                <div class="row m-0">
                    <div class="col text-center section-1-content-txt">
                        <h1>WELCOME TO BID 2 WIN</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus culpa accusantium
                            rerum
                            itaque
                            labore dolorum eum, sunt, blanditiis voluptatem dolor quo magnam atque quisquam nulla
                            adipisci
                            placeat quod impedit consequuntur.</p>

                        <div class="mt-4">
                            <a href="{{ route('user.login') }}"><button class="btn btn-primary mr-4 section-1-btn"> Sign In </button></a>
                            <a href="#" style="font-weight: 600; color: white;">Buy Packages</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-6 m-0 pl-5 pr-5 text-center">
            <div class="row m-0 p-0 pt-5 pb-5 mt-5 section-1-img-row">
                <div class="col m-0 p-0">
                    <img src="{{asset('assets/frontend/assets/img/section-1-img.png')}}" alt="Image" class="section-1-img">
                </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col text-right p-0">
                    <a href="" class="mr-3" style="color: gray;"><i class="fa fa-facebook"></i></a>
                    <a href="" class="mr-3" style="color: gray;"><i class="fa fa-instagram"></i></a>
                    <a href="" class="mr-3" style="color: gray;"><i class="fa fa-google-plus"></i></a>
                    <a href="" style="color: gray;"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End - section 1 -->

<!-- Start - Section 2 -->
<div class="section-2">
    <div class="row m-0">
        <div class="col-md-6 p-5">
            <img src="{{asset('assets/frontend/assets/img/section-2-img.png')}}" alt="Image" class="w-100 section-2-img">
        </div>
        <div class="col-md-6 p-5 section-2-txt-col">
            <h1>WHAT IS BIT 2 WIN</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga saepe et possimus totam, dignissimos
                optio nulla eum inventore cum amet repellat molestiae tempora vero perferendis dolore adipisci eaque
                quibusdam quisquam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet placeat quibusdam
                magnam ea exercitationem cupiditate nemo. Ex voluptate, cum nobis laborum, ea eius, dolor repellat
                odio rerum accusantium quis at! Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                perferendis fugiat labore optio veniam reprehenderit ex amet ducimus provident autem nobis itaque
                eligendi, voluptas debitis porro vitae suscipit aut nostrum!</p>

            <button class="btn btn-primary mr-4">Sign In</button>
            <a href="#" style="font-weight: 600;">Buy Packages</a>
        </div>
    </div>
</div>
<!-- End - Section 2 -->

<!-- Start - Section 3 -->
<div class="section-3 p-5">
    <div class="row m-0">
        <div class="col m-0 text-center">
            <h5 style="color: #2659EE;">WHAT IS</h5>
            <h1>OUR BEST FEATURES</h1>
        </div>
    </div>

    <div class="row m-0 mt-4 text-center">

        <div class="card-deck m-0">
            <div class="card border-0 section-3-card">
                <div class="card-body">
                    <img src="{{asset('assets/frontend/assets/img/section-3-security.png')}}" alt="Image" class="w-100 section-3-card-img">
                    <h5 class="mt-3">Card title</h5>
                    <p>This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
            </div>
            <div class="card border-0 section-3-card">
                <div class="card-body">
                    <img src="{{asset('assets/frontend/assets/img/section-3-speed.png')}}" alt="Image" class="w-100 section-3-card-img">
                    <h5 class="mt-3">Card title</h5>
                    <p>This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
            </div>
            <div class="card border-0 section-3-card">
                <div class="card-body">
                    <img src="{{asset('assets/frontend/assets/img/section-3-accessibility.png')}}" alt="Image" class="w-100 section-3-card-img">
                    <h5 class="mt-3">Card title</h5>
                    <p>This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- End - Section 3 -->

<!-- Start - Section 4 -->
<div class="section-4 mt-5">

    <div class="row m-0">
        <div class="col-md-6 m-0 p-5 section-4-txt-col">
            <h1>TRANSACTION THROW ANY METHOD</h1>
            <P class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat illum cupiditate cum
                ut, deserunt
                sunt earum, sapiente temporibus natus omnis, alias iusto neque laboriosam maiores esse vitae
                mollitia ipsum facilis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, nisi voluptas
                delectus deserunt laboriosam illo corrupti. Ullam libero, architecto fugiat exercitationem sint
                minima in provident nostrum perspiciatis minus similique incidunt. Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Vero nemo consectetur libero culpa nisi laborum minima? Fugiat qui
                repudiandae blanditiis ad nemo natus ipsum alias ducimus cupiditate, nisi doloremque? Nam!</P>

            <button class="btn btn-primary mr-4">Sign In</button>
            <a href="#" style="font-weight: 600;">Buy Packages</a>
        </div>

        <div class="col-md-6 m-0 p-1">
            <img src="{{asset('assets/frontend/assets/img/section-4-img.png')}}" alt="Image" class="w-100 section-4-img">
        </div>
    </div>
</div>
<!-- End - Section 4 -->

<!-- Start - Section 5 -->
<div class="section-5 p-5">
    <div class="row m-0">
        <div class="col m-0 text-center">
            <h5 style="color: #2659EE;">WATCH OUR</h5>
            <h1>LATEST VIDEO SERIES</h1>
        </div>
    </div>

    <div class="row m-0 mt-5 text-left">

        <div class="card-deck m-0">
            <div class="card border-0 section-5-card col-md-4 pl-0 pr-0 shadow">
                <div class="card-body p-0">
                    <!-- <div class="video-container">
                            <video controls class="video"></video>
                        </div> -->
                    <img src="{{asset('assets/frontend/assets/img/section-5-card-1.png')}}" alt="Image" class="w-100">
                    <div class="p-3">
                        <h3>Bit 2 Win</h3>
                        <h3>With Blockchain</h3>
                    </div>
                </div>
            </div>
            <div class="card border-0 section-5-card col-md-4 pl-0 pr-0 shadow">
                <div class="card-body p-0">
                    <!-- <div class="video-container">
                            <video controls class="video"></video>
                        </div> -->
                    <img src="{{asset('assets/frontend/assets/img/section-5-card-2.png')}}" alt="Image" class="w-100">
                    <div class="p-3">
                        <h3>Bit 2 Win</h3>
                        <h3>With Best Companies</h3>
                    </div>
                </div>
            </div>
            <div class="card border-0 section-5-card col-md-4 pl-0 pr-0 shadow">
                <div class="card-body p-0">
                    <!-- <div class="video-container">
                            <video controls class="video"></video>
                        </div> -->
                    <img src="{{asset('assets/frontend/assets/img/section-5-card-3.png')}}" alt="Image" class="w-100">
                    <div class="p-3">
                        <h3>Bit 2 Win</h3>
                        <h3>With Analytics</h3>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- End - Section 5 -->

<script>
    document.getElementById('sideNavToggleBtn').style.visibility = 'hidden';
</script>
@endsection