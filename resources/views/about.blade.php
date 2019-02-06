@extends('layouts.ui')

@section('content')

    <section class="static_section">
        <div class="container">
            <h3 class="page_title">About Us</h3>
            <div class="static_box about">
                <h3 class="sec_title">Our Mission</h3>
                <p class="sec_subtitle">Welcome to Yaadbook - a place where time stands still for as long as you want it to.</p>
                <p>We would like you to make this your safe space, your garden of reflection and fond memories of your dear loved ones. Join us and share your stories, moments of joy and emotions. Nothing is ever lost as long as we remember. Let the bright
                    flame of their memory last forever.</p>
                <hr>
                <h3 class="sec_title">Yaadbook is a child of love, born of my own nostalgia and fond family memories that I hope will never die.</h3>
                <p class="sec_subtitle"><i>It all started with one moment...</i></p>
                <div class="row left-align">
                    <div class="col l8 m8 s12">
                        <p>One day I was playing with my little 2 year old grandson like every other day and at one moment, the child stopped playing and looked at the wall where the portrait of my beloved, long departed father is.</p>
                        <p>He stared at it lovingly for a long time and it almost seemed that in his mind, he was silently talking to my father.</p>
                        <p>I thought to myself when this little child grows up...</p>
                        <b><q>What will he know about his great-grandfather?<br>How will he know what sort of person he was?<br>What values he believed in?<br>How he shaped lives of those around him, including myself?</q></b>
                        <p>when I am gone, there will be no one to tell the story of his life.</p>
						<p>That was when I thought about creating Yaadbook for the first time, and I dedicate it to the memory of my loving father in the hope that somewhere in the world, someday a little child will discover their family legacy. A widow will be able to relive the happy moments with her late husband. A child will look at their father's memorial site and see they grew up to be like him.</p>
						<p>That they will know their memory lives on and the bright flame of it will never die out with time...</p>
                    </div>
                    <div class="col l4 m4 s12">
                        <img src="{{ asset('theme/images/yaad-about.png') }}" style="width:100%;">
                        <!--<div class="imgBox"><img src="images/RamLalPatla.png"></div>
                        <p class="center-align">My father Mr. Ram Lal Patla</p>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection