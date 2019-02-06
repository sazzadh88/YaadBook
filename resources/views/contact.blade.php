@extends('layouts.ui')

@section('content')

<section class="static_section">
        <div class="container">
            <h3 class="page_title">Contact Us</h3>
            <div class="static_box contact">
                <div class="row">
                    <div class="col l4 m4 s12">
                        <p class="sec_subtitle">Yaad International Limited</p>
                        <address>
                            Suite  15557<br>
                            Chynoweth House<br>
                            Trevissome Park<br>
                            Truro<br>
                            TR4 8UN<br>
                            <i class="material-icons">local_phone</i> :<a href="#"> +44 7779846691</a><br>
                            <i class="material-icons">local_post_office</i> :<a href="#"> contact@yaadbook.com</a>
                        </address>
                    </div>
                    <div class="col l8 m8 s12">
                        <p class="sec_subtitle">Get in touch with us</p>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="first_name" type="text" class="validate" placeholder="First Name">
                                <label for="first_name" class="active">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="last_name" type="text" class="validate" placeholder="Last Name">
                                <label for="last_name" class="active">Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email_adrs" type="text" class="validate" placeholder="Email Address">
                                <label for="email_adrs" class="active">Email Address</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="cont_number" type="text" class="validate" placeholder="Contact Number">
                                <label for="cont_number" class="active">Contact Number</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="comment" class="materialize-textarea" placeholder="Comment" style="max-height:87.39px; overflow-y: auto;"></textarea>
                                <label for="comment" class="active">Comment</label>
                            </div>
                        </div>
                        <button class="waves-effect waves-light btn btn-round brown darken-1">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
