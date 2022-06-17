@extends('layout.master')
@section('content')

<!-- Introduction --> 
<div class="container-fluid padding">
    <div class="row text-center">
        <div class="col-12">
            <h2 class="display-4"> About Us </h2>
            <br>
        </div>

        <div class="col-lg-6">
            <img src="./img/profile/lyn_profile.jpg" class="rounded img-fluid">
        </div>
        <div class="col-md-12 col-lg-6" id="aboutDesciption">
            <p>Hello my name is Lyn-Marie Christian and I am the enthusiastic owner of</p>
            <h4 class="display-4" id="logoDescribe">Lynnali's Hair Care</h4>
            <p> 
                Lynnali's is a business that focuses on the growth
                and protection of natural hair with the use of organic ingredients.
                Our products provide nourishing properties that promote the
                healthy maintenance of the crowns of our naturalistas.
            </p>
        </div>
    </div>
</div>

</br>
</br>
<hr class="my-3">
</br>
</br>

<!-- Operating Hours -->
<div class="container-fluid padding">
    <div class="row text-center">
        <div class ="col-12">
            <h3 class="display-4"> Operating Hours </h3>
            <br>
            <p>Mondays - Fridays</p>
            <p>10am - 6pm</p>
            </br>
            <p>Saturdays</p>
            <p>10am - 1pm</p>
            </br>
            <p>Sunday</p>
            <p>10am - 6pm</p>
            </br>
            <p><i>*Deliveries are organized with our driver but they are primarily on Saturdays*</i></p>
        </div>
    </div>
</div>

</br>
</br>

<!-- Location -->
<hr class="my-3">
</br>
</br>
<div class="container-fluid padding">
    <div class="row text-center">
        <div class="col-12">
            <h3 class="display-4"> Location </h3>
            <br>
            <p>We are currently located at</p>
            <p>Lot 5, Newbury Park, St.George</p>
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2707.902396336342!2d-59.553450609584985!3d13.146348988662773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c43f34d8cbba4ef%3A0xc74488d5aa670e5a!2sLYNNALI&#39;S%20HAIRCARE!5e0!3m2!1sen!2s!4v1655343531673!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>


@endsection
