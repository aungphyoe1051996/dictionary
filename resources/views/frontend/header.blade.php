<div class="container-fluid text-center" id="title_bar" >
    <div class="container">
        <label for="tongdot" class="pt-5 fs-3">  TongDot - English to (Chin/Zomi) Myanmar Online Dictionary </label>
    </div>
    <div class="container text-center pb-3">
        <hr style="width:100%; text-align:center;">
    </div>
</div>

<!-- navbar -->
<div class="container-fluid  px-0 pb-5">
        
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-3">
                        <li class="nav-item mx-3">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="{{route('suggest_word.create')}}">Suggest Words</a>
                        </li>
                        <li class="nav-item mx-3">
                            <div class="nav-link" data-bs-toggle="modal" data-bs-target="#login">
                            <label for=""> Log in </label>
                            </div>
                            
                        </li>
                        <li class="nav-item mx-3">
                            <div class="nav-link" data-bs-toggle="modal" data-bs-target="#register">
                                <label for=""> Register </label>
                            </div>
                        </li>
                        <li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Something
                            </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Google</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Facebook</a></li>
                            <li><a class="dropdown-item" href="#">Register</a></li>
                        </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- modal for register -->
        <div class="modal fade" id="register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content shadow">
                <div class="modal-header">
                    <h5 class="modal-title mx-auto" id="staticBackdropLabel">Sign Up</h5>
                </div>
                <div class="modal-body">
                <form action="{{route('users.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" id="userName" class="form-control form-input mx-auto " placeholder="Name">
                        <input type="text" name="email" id="userName" class="form-control form-input mx-auto " placeholder="Email">
                        <input type="text" name="password" id="userName" class="form-control form-input mx-auto " placeholder="Password">
                        <input type="radio" name="" id="">
                    </div>
                    <button type="submit" class="btn form-btn">Register</button>
                    <p class="pt-2">Already Have an account? 
                            <a data-bs-toggle="modal" data-bs-target="#login" data-bs-dismiss="modal" >
                                <button class="btn btn-outline-warning">Login</button> 
                            </a>
                        </p> 
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
        <!-- modal for register -->

        <div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content shadow">
                <div class="modal-header">
                    <h5 class="modal-title mx-auto" id="staticBackdropLabel">Sign In</h5>
                </div>
                <div class="modal-body">
                    <form action="{{route('users.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="email" id="" class="form-control form-input mx-auto " placeholder="Email">
                            <input type="text" name="password" id="" class="form-control form-input mx-auto " placeholder="Password">
                            <input type="text" name="name" id="" class="form-control form-input mx-auto " placeholder="Name">
                        </div>
                        <button type="submit" class="btn form-btn">Log In</button>
                        <p class="pt-2">Don't have account yet? 
                            <a data-bs-toggle="modal" data-bs-target="#register" data-bs-dismiss="modal" >
                                <button class="btn btn-outline-warning">Register</button> 
                            </a>
                        </p> 
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>

</div>