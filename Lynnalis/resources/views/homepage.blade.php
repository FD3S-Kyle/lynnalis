@extends('layout.master')
@section('content')

</br>
</br>

<div class="container-fluid padding">
    <div class="row text-center">
        <div class="col-12">
            <h1 class="display-4" id="heading"> <i class="bi bi-stars"></i> The Care Your Hair Deserves  <i class="bi bi-stars"></i> </h1>
            <br>
        </div>
    </div>
</div>


</br>
</br>
<hr class="my-3">
</br>
</br>

<!-- Review Section -->
<div class="container-fluid padding">
    <div class="row text-center">
        <div class="col-12">
            <h3 class="display-4">Reviews</h3>
            <br>
        </div>

        <div class="col-12 text-center">
			<div id="slides" class="carousel slide" data-bs-ride="carousel">
               <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <div class="row row-cols-2 row-cols-md-4 g-4">
                            <div class="col">
                                <div class="card" id="card_review">
                                    <div class="card-body text-center">
                                        <p class="card-text actreview">"The pre-shampoo really takes away all of the grim that was in my hair. Will be buying again for sure."</p>
                                        <p class="card-text">- Gabriella Johnson</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" id="card_review">
                                    <div class="card-body text-center">
                                        <p class="card-text actreview">"After using the moisturizing oil my hair has a shine I did not know was there. I highly recommend it to anyone."</p>
                                        <p class="card-text">- John Barker</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" id="card_review">
                                    <div class="card-body text-center">
                                        <p class="card-text actreview">"My hair feels so much easier to comb through since using the pre-shampoo."</p>
                                        <p class="card-text">- Baily Huya</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" id="card_review">
                                    <div class="card-body text-center">
                                        <p class="card-text actreview">"My hair is waaayyyy softer than before and it feels like it kept its bounce."</p>
                                        <p class="card-text">- Laylee Bishop</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="10000">
                        <div class="row row-cols-2 row-cols-md-4 g-4">
                        <div class="col">
                                <div class="card" id="card_review">
                                    <div class="card-body text-center">
                                        <p class="card-text actreview">"Tried using the pre-shampoo and leave-in condition into my normal routine and I must say the quality of my hair has greatly improved."</p>
									    <p class="card-text">- Sky Alan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" id="card_review">
                                    <div class="card-body text-center">
                                        <p class="card-text actreview">"For anyone wanting a good shine in their hair the moisturizing oil is it."</p>
                                        <p class="card-text">- Shawn Bourne</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" id="card_review">
                                    <div class="card-body text-center">
                                        <p class="card-text actreview">"The pre-shampoo works wonders on my natural hair. It feels soo soft and its easy to detangle now."</p>
                                        <p class="card-text">- Jamie Layne</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" id="card_review">
                                    <div class="card-body text-center">
                                        <p class="card-text actreview">"My hair feels and looks healthier after using the pre-shampoo and leave-in conditioner."</p>
                                        <p class="card-text">- Dean Graham</p>
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


</br>
</br>
<hr class="my-0">

<!-- Contact Us Section -->
<div class="container-fluid shadow-lg p-3 mb-5 bg-body rounded" id="contact-us">
    <div class="row ">
        <div class="col-12 text-center">
            <h3 class="display-4">Contact Us</h3>
            <p>Any questions about our products or business?</p>
            <p>Just fill out the form below</p>
            <br>
        </div>
        <div class="col-12">
			<form action="/index" method="POST">
				@csrf <!-- {{ csrf_field() }} -->
			  <div class="form-group">
			    <label for="name" style="text-align:left; font-weight:bold;">NAME:</label>
			    <input type="text" class="form-control" name="name">
			  </div>
			  <div class="form-group">
			    <label for="email" style="text-align:left; font-weight:bold;">EMAIL:</label>
			    <input type="email" class="form-control" name="email">
			  </div>
			   <div class="form-group">
				    <label for="question" style="text-align:left; font-weight:bold;">Inquiry</label>
				    <textarea class="form-control" name="inquiry" rows="10" cols="30"></textarea>
			 </div>
			  <br/>
			  <div class="row text-center">
				<div class="col-12">
			  		<button type="submit" class="btn btn-primary" id="btn-submit" value="Submit">Send Inquiry</button>
			  	</div>
			  </div>
			</form>
		</div>
    </div>
</div>
@endsection