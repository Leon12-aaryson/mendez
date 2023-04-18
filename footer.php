<div class="footer" id="contact">
    <div class="sect1">
        <h3>Contact</h3>
        <ul>
            <li><i class="bx bx-map-pin"></i> P.O.Box Kampala Uganda</li>
            <li><i class="bx bx-phone-call"></i> +256 785902606</li>
            <li><i class="bx bx-phone"></i> +256 705 163 266</li>
            <li><i class="bx bx-envelope"></i> info@dimensionalpictures.com</li>
            <li><i class="bx bx-envelope"></i> jmendez@dimensionalpictures.com</li>
        </ul>
    </div>
    <div class="sect1">
        <h3>About</h3>
        <ul>
            <li>Our Services</li>
            <li>Our values</li>
            <li>Our capacity</li>
            <li>Our Team</li>
            <li>Our Projects</li>
        </ul>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script src="static/styles/js/index.js"></script>

<script>
    $(document).ready(function() {
        $('.logo-area').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            dots: false,
            arrows: false,
            autoplaySpeed: 2000,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4,
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3,
                }
            },{
                breakpoint: 390,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]
        });
    })
</script>
</body>

</html>