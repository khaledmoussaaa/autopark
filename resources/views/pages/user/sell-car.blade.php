@extends('layouts.common.app')

@section('main')
<!-- Preloader -->
<div class="preloader-bg"></div>
<div id="preloader">
    <div id="preloader-status">
        <div class="preloader-position loader"> <span></span> </div>
    </div>
</div>
<!-- Progress scroll totop -->
<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- Navbar -->

<!-- Parallax Image -->
<section class="parallax-header section-padding valign bg-img bg-fixed" data-overlay-dark="5" data-background="images/slider/2.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-5 mb-30 mt-30">
                <div class="v-middle2 caption">
                    <h6>* Premium</h6>
                    <h1>Rental Car</h1>
                    <h5>You can rent any of our luxurious cars.</h5>
                </div>
            </div>
            <!-- Rent Now -->
            <div class="col-lg-12 col-md-7">
                <div class="booking-box">
                    <div class="booking-inner clearfix">
                        <form enctype="multipart/form-data" method="POST" action="{{ route('sellcars.store') }}" class="form1 contact__form clearfix">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <input name="name" type="text" placeholder="Full Name *" required>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <input name="email" type="email" placeholder="Email *" required>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <input name="phone" type="text" placeholder="Phone *" required>
                                </div>

                                <div class="col-md-4">
                                    <div class="select1_wrapper">
                                        <label>Choose Car Type</label>
                                        <div class="select1_inner">
                                            <select name="car_type" id="make" class="select2 select" style="width: 100%" required>
                                                <option value="">Choose Car Type</option>
                                                <option value="BMW">BMW</option>
                                                <option value="Daewoo">Daewoo</option>
                                                <option value="Ford">Ford</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="select1_wrapper">
                                        <label>Choose Car Model</label>
                                        <div class="select1_inner">
                                            <select name="car_model" id="model" class="select2 select" style="width: 100%" required>
                                                <option value="">Choose Car Model</option>
                                                <option value="318i">318i</option>
                                                <option value="Lanos">Lanos</option>
                                                <option value="Courier">Courier</option>
                                                <option value="Falcon">Falcon</option>
                                                <option value="Festiva">Festiva</option>
                                                <option value="Fiesta">Fiesta</option>
                                                <option value="Focus">Focus</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="select1_wrapper">
                                        <label>Year</label>
                                        <div class="select1_inner">
                                            <select name="year" class="select2 select" style="width: 100%" required>
                                                <option value="">Year</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="select1_wrapper">
                                        <label>Kilometers</label>
                                        <div class="select1_inner">
                                            <select name="kilometers" class="select2 select" style="width: 100%" required>
                                                <option value="">Kilometers</option>
                                                <option value="10000">10,000</option>
                                                <option value="20000">20,000</option>
                                                <option value="30000">30,000</option>
                                                <option value="40000">40,000</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="select1_wrapper">
                                        <label>Transmission</label>
                                        <div class="select1_inner">
                                            <select name="transmissions" class="select2 select" style="width: 100%" required>
                                                <option value="">Transmission</option>
                                                <option value="automatic">Automatic</option>
                                                <option value="manual">Manual</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="booking-button mt-15">Sell Your Car Now</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

<!-- jQuery -->
<script>
    $(document).ready(function() {
        var $make = $('#make'),
            $model = $('#model'),
            $options = $model.find('option');

        $make.on('change', function() {
            // We now filter model using the data-make attribute, not value
            $model.html($options.filter('[data-make="' + this.value + '"]'));
            $model.trigger('change');
        }).trigger('change');

        $('#carForm').submit(function(e) {
            e.preventDefault();
            let formData = $(this).serializeArray();
            let data = {};
            for (let i = 0; i < formData.length; i++) {
                data[formData[i].name] = formData[i].value;
            }

            alert('Make: ' + data.make + '\nModel: ' + data.model);
        });

    });
</script>