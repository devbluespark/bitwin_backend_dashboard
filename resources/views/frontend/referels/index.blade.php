@extends('layouts.frontend.app')
@section('content')

<!-- Start main div -->
<div id="main">
    <!-- <a style="cursor: pointer;" onclick="openNav()"><i class="fa fa-bars"></i></a> -->

    <!-- Start main div content -->
    <div class="content">

        <div class="row m-0">
            <h3 class="mt-4 page-title">Referel</h3>
        </div>

        <div class="row m-0 p-5">

            <div class="col-md-4 text-center" style="background-color: white; border-radius: 15px;">
                <div class="m-0 p-0" style="top:50% !important; transform: translateY(-50%); position: relative;">
                    <h1>{{$referel_count}}</h1>
                    <h5 style="color: gray;">Total Referrals</h5>
                </div>

            </div>
            <div class="col-md-8 mt-4">
                <div class="form-row">
                    <div class="form-group col-md-8 pr-3">
                        <div class="bs-form-group" id="referelLinkDiv" style="background-color: white;">
                            <label class="mb-0">Referel link</label>
                        <input type="text" class="form-control rounded-0 bs-input" id="referelLink" value="{{ $refferalUrl}}">
                        </div>
                    </div>

                    <div class="form-group col-md-4 pr-3">
                        <button type="button" class="btn btn-primary btn-lg btn-block" onclick="copyFunction()" onmouseout="outFunction()" style="height: 62px;">
                            
                            Copy
                        </button>
                    </div>
                    
                </div>

                <div class="row m-0 p-0 mt-4 pb-4">
                    <div class="col p-0">
                        <h6>How do I do that ?</h6>
                        <p class="mb-0" style="color: gray;">1 You get a special Link</p>
                        <p class="mb-0" style="color: gray;">2 Every time someone signs up from that link, both you
                            and them get 500MB</p>
                        <p class="mb-0" style="color: gray;">3 Limited to up to 4 friends</p>
                        <p class="mb-0" style="color: gray;">4 Feel free to copy the link and share with anyone</p>

                        <!-- <h5 class="mt-4" style="font-weight: 700;">Share your link</h5>
                        <a href="#" class="btn btn-primary social-link-btn"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="btn btn-primary social-link-btn"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="btn btn-primary social-link-btn"><i class="fa fa-google"></i></a> -->
                    </div>
                </div>

            </div>
        </div>



    </div>
    <!-- End main div content -->

</div>
<!-- End main div -->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>

<!-- Side Nav JS -->
<script src="{{asset('assets/frontend/assets/js/side-nav.js')}}"></script>

<!-- Referel Form js -->
<script src="{{asset('assets/frontend/assets/js/referels-form-focus.js')}}"></script>

<script>
    
    function copyFunction() {
        var copyText = document.getElementById("referelLink");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("copy");
        
        var tooltip = document.getElementById("myTooltip");
        tooltip.innerHTML = "Copied: " + copyText.value;
    }

    function outFunction() {
        var tooltip = document.getElementById("myTooltip");
        tooltip.innerHTML = "Copy to clipboard";
    }

</script>

@endsection