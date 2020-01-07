@extends('layouts/master')

@section('content')



    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-10">
                        <div class="slider_text text-center justify-content-center">
                            <p>Find Nearby Attraction</p>
                            <h3>Find Nearby Attraction</h3>
                            <div class="search_form"> 
                                <form  method="get" action="input_link">
                                    <div class="row align-items-center">
                                        <div class="col-xl-5 col-md-4"">
                                            <div class="input_field">
                                                <input name="link" type="url" pattern="https://.*" placeholder="Insert your link" required="" >
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-4">
                                            <div class="input_field ">
                                                <input name="code"type="text"  placeholder="name after bit.ly"required>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-4" ">
                                            <div class="button_search">
                                                <button class="boxed-btn2" id="submit"type="submit">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @if ($message = Session::get('success'))
                                      <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button> 
                                        <h3> ini</h3>
                                
                                      </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tampildata">
    </div>    
    	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
   
    @endsection