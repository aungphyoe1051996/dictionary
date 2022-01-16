@extends('layouts.frontendLayout')
@section('content')

@include('frontend.header')
    <!-- navbar -->

    <div class="container-fluid text-center">
        <h3>Welcome to Tongdot</h3>
        <p>
            Here is some text that you want to add.
        </p>

    </div>

    <div class="container py-3 text-center" id="search_div">
        <label  class="fs-4" for=""> Chin Land Dictionary</label>
        <!-- <label class="fs-4"> Welcome To <span> TONGDOT </span> ( Chin/Zomi - Myanmar Online Dictionary ) </label> -->
        <hr>
        <div class="row mx-auto py-3">
            <div class="card col-sm-6">
                <div class="card-header">
                    Search 
                </div>
                <div class="card-body">
                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                    <div class="form-control mx-auto">
                        <input type="text" required class="fs-4"/>
                        <label>enter here to translate</label>
                    </div>
                    <a href="#" class="btn form-btn">Translate</a>
                </div>
            </div>
            <div class="card col-sm-6">
                <div class="card-header">
                    Result 
                </div>
                <div class="card-body">
                    <h5 class="card-title">Meaning</h5>
                </div>
                <div class="card-body">
                <p class="card-text">barnyar kwi kwa</p>
                    <i class="fas fa-volume-up"></i>

                </div>
            </div>
        </div>
    </div>


@endsection
@section('js')
<script>
    const inputs = document.querySelectorAll('.form-control input');
    const labels = document.querySelectorAll('.form-control label');

    labels.forEach(label => {
    label.innerHTML = label.innerText
        .split('')
        .map((letter, idx) => `<span style="
            transition-delay: ${idx * 20}ms
        ">${letter}</span>`)
        .join('');
    });
</script>
@include('frontend.footer')
@endsection