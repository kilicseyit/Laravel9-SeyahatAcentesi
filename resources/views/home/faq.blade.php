
@extends('layouts.frontbase')

@section('title','Frequently Asked Questions | '.$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content'),
<style>
    /* Style the buttons that are used to open and close the accordion panel */
    .accordion {
        background-color: #eee;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        text-align: left;
        border: none;
        outline: none;
        transition: 0.4s;
    }

    /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
    .active, .accordion:hover {
        background-color: #ccc;
    }

    /* Style the accordion panel. Note: hidden by default */
    .panel {
        padding: 0 18px;
        background-color: white;
        display: none;
        overflow: hidden;
    }
</style>
<div class="section-title">
    <h3 class="title">Frequently ASKED Questions</h3>
</div>
    @foreach($datalist as $rs)
    <button class="accordion">{{$rs->question}}</button>
    <div class="panel">
        <p>{!!$rs->answer!!}</p>
    </div>
@endforeach

<!-- Testemonials -->

<div class="end-content container">
    <div class="container">
        <section class="text-center my-5 p-1">
            <h2 class="h1-responsive font-weight-bold my-5">Populer Packages</h2>
            <h4 class="dark-grey-text w-responsive mx-auto mb-5"><i>Tell us where you heard about us in the forum section</i></h4>
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                    <div class="card testimonial-card">
                        <div class="card-up info-color"></div>
                        <div class="avatar mx-auto white">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="rounded-circle img-fluid">
                        </div>
                        <div class="card-body">
                            <h4 class="font-weight-bold mb-4">JOHN DOE</h4>
                            <hr>
                            <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet eos
                                adipisci, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                    <div class="card testimonial-card">
                        <div class="card-up blue-gradient">
                        </div>
                        <div class="avatar mx-auto white">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" class="rounded-circle img-fluid">
                        </div>
                        <div class="card-body">
                            <h4 class="font-weight-bold mb-4">JOHN DOOE</h4>
                            <hr>
                            <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Neque cupiditate assumenda in
                                maiores repudiandae mollitia architecto.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card testimonial-card">
                        <div class="card-up indigo"></div>
                        <div class="avatar mx-auto white">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle img-fluid">
                        </div>
                        <div class="card-body">
                            <h4 class="font-weight-bold mb-4">JOHN DOEE</h4>
                            <hr>
                            <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Delectus impedit saepe officiis
                                ab aliquam repellat rem unde ducimus.</p>
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>
</div>


<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }
    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");

            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>

<!-- Location Map plugin -->



<div class="container-fluid">
    <div id="map_canvas" class="map_canvas">
    </div>
</div>
<br>
<hr>



<!-- Getting space between header and main-container -->

</main>


<!-- Bootstrap Core JS. Placed at the end of the document so the pages load faster!! -->
<div class="script" content="take script out of div and place at the bottom after editing!">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</div>
</body>

</html>
@endsection
