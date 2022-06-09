
@extends('layouts.frontbase')

@section('title','Order Complete')

@section('content')



<div class="row">
    <div class="side"></div>
    <div class="main" >
        <p style="white-space:pre-wrap; ">
        <div class = "product-preview__title">
            <h1 class = "h1 alt-h1 "> Order Complete</h1>
        </div>
        @include('home.messages')
        </p>
    </div>
</div>




<div class="container-fluid">
    <div id="map_canvas" class="map_canvas">
    </div>
</div>
<br>
<hr>



<!-- Getting space between header and main-container -->

</main>


<!-- Bootstrap Core JS. Placed at the end of the document so the pages load faster!! -->
</body>

</html>
@endsection
