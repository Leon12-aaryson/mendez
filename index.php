<?php

$title = "Dimension Pictures";

include "header.php";
?>
<style>
    .top {
        height: 60vh;
        /* width: 100vw; */
        background: linear-gradient(to right, rgba(0, 0, 0, .2) 50%, rgba(0, 0, 0, .2) 50%), url('static/images/phot.jpg');
        background-size: cover;
    }
</style>

<div class="top">
    <div class="toptx">
        <h1>DIMENSION PICTURES</h1>
        <h3>Lets Make memories</h3>
    </div>
</div>
<section class="main">
    <div class="about">
        <img src="static/images/phot.jpg" alt="">
        <div class="txt">
            <h2>ABOUT US</h2>
            <p>Dimensional Pictures is a media company based in
                Kampala fully registered with URSB, URA to provide
                media services in Uganda with a reputation for being
                experienced, reliable, methodical, and passionate, we
                have been trusted by some of the largest names in the
                business for over 5 years such ECO Partner, PELUM
                Uganda, UNACOH, NUWODU, OWC, PAU, NEMA and
                many more
            </p>
            <p>Creativity is a core tenet of our work, and as such we
                oﬀer a full digital service and can provide development
                to projects in need of quality service. We love what we do
                and we hope you do too!
            </p>
            <p>Have a poke around, get to know us a bit better</p>
        </div>
    </div>

    <div class="client-area">
        <div class="cont">
            <h2>Our clients</h2>
            <section class="logo-area slider">
                <div class="slide"><img src="static/images/po1.png" alt=""></div>
                <div class="slide"><img src="static/images/po2.png" alt=""></div>
                <div class="slide"><img src="static/images/po3.png" alt=""></div>
                <div class="slide"><img src="static/images/po4.png" alt=""></div>
                <div class="slide"><img src="static/images/po5.png" alt=""></div>
                <div class="slide"><img src="static/images/po6.png" alt=""></div>
                <div class="slide"><img src="static/images/po7.png" alt=""></div>
                <div class="slide"><img src="static/images/po8.png" alt=""></div>
                <div class="slide"><img src="static/images/po9.png" alt=""></div>
                <div class="slide"><img src="static/images/po10.png" alt=""></div>
            </section>
        </div>
    </div>
</section>


<?php
include "footer.php";
?>