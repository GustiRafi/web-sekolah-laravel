<!-- Kontent kanan -->
<div class="col-12 col-md-4">
    <div class="card shadow">
        <div class="px-3 py-3">
            <div data-aos="fade-right">
                <h4>Hubungi Kami</h4>
                <div class="border border-4 border-info"></div>
            </div>
            <div data-aos="fade-right">
                @foreach($contacts as $contact)
                <p class="pt-3">{{ $contact->alamat }}<br>
                    Email : {{ $contact->email }} <br>
                    Telp :{{ $contact->telp }} <br>
                    Fax : {{ $contact->fax }}</p>
                @endforeach
            </div>
        </div>
        <div class="px-3 py-3">
            <div data-aos="fade-right">
                <h4>Sosial Media</h4>
                <div class="border border-4 border-success"></div>
            </div>
            <div class="d-flex pt-3">
                <div data-aos="flip-up">
                    <a href="instagram.com/smkn1bantul">
                        <h3><i class="bi bi-instagram text-danger me-3"></i></h3>
                    </a>
                </div>
                <div data-aos="flip-up">
                    <a href="facebok.com/smknegeri1bantul">
                        <h3><i class="bi bi-facebook text-primary me-3"></i></h3>
                    </a>
                </div>
                <div data-aos="flip-up">
                    <a href="twitter.com/bantul_smkn1">
                        <h3><i class="bi bi-twitter text-info me-3"></i></h3>
                    </a>
                </div>
                <div data-aos="flip-up">
                    <a href="https://www.youtube.com/channel/UCQgXA3YAufCRhmBVXjNZisw">
                        <h3><i class="bi bi-youtube text-danger me-3"></i></h3>
                    </a>
                </div>
                <div data-aos="flip-up">
                    <a href="#">
                        <h3><i class="bi bi-linkedin text-info me-3"></i></h3>
                    </a>
                </div>
                <div data-aos="flip-up">
                    <a href="https://www.linkedin.com/in/smkn1-bantul-593005208/">
                        <h3><i class="bi bi-google text-danger me-3"></i></h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="px-3 py-3">
            <div data-aos="fade-right">
                <h4>Kepala Sekolah</h4>
                <div class="border border-4 border-danger"></div>
            </div>
            <div data-aos="fade-right">
                <div class="d-flex py-3">
                    @foreach($sambutans as $sambutan)
                    <img src="{{ asset('storage/' . $sambutan->image) }}" alt="" srcset="">
                    <p class="ps-2">{{ $sambutan->excerp }}
                        <a href="/sambutan/read/{{ $sambutan->slug }}">
                            <button class="btn btn-outline-primary pt-2">Detail</button>
                        </a>
                    </p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="px-3 py-3">
            <div data-aos="fade-right">
                <h4>Maps</h4>
                <div class="border border-4 border-warning"></div>
            </div>
            <div class="col-12">
                <div data-aos="flip-up">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15806.35306000175!2d110.2982896!3d-7.937996899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7b00889ad8f84d%3A0x2e0009ca7815eaf0!2sSMK%20Negeri%201%20Bantul!5e0!3m2!1sid!2sid!4v1657451494964!5m2!1sid!2sid"
                        style="border:0;" class="py-3 " allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end kontent kiri -->
</div>

</div>

<!-- footer -->
<div class="bg-dark text-white mt-5">
    <div class="container">
        <div class="row row-cols-2 row-cols-md-3 g-4 justify-content-center">
            <div class="col">
                <div class="d-flex mb-3">
                    <img src="/img/logo.png" width="70px" height="70px" alt="logo" srcset="">
                    <h6 class="ps-3 ">SMK N 1 BANTUL</h6>
                </div>
            </div>
            <div class="col text-center">
                <h5 class="ps-3 ">TAUTAN</h5>
                <p><a href="https://skansaba.id/login/index.php" class="text-decoration-none text-white">E-Learning SMK
                        N 1 BANTUL</a></p>
            </div>
            <div class="col text-center mb-3">
                <h5>Instagram Photo</h5>
                @foreach($photos as $photo)
                <img src="{{ asset('storage/' . $photo->image) }}" class="w-50 h-50" alt="" srcset="">
                @endforeach
            </div>
        </div>
    </div>
    <hr class="text-white">
    <p class="text-center pb-3">copyright &copy 2022</p>
</div>
<!-- end foter -->

<script src="/js/bootstrap.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
let tgl = document.getElementById("tgl");
tgl.addEventListener("click", function() {
    offcanvasExample.classList.replace("bg-white", "bg-info");
    nav.classList.replace("navbar-light", "navbar-dark");
});

let clstgl = document.getElementById("close-tgl");
clstgl.addEventListener("click", function() {
    offcanvasExample.classList.replace("bg-info", "bg-white");
    nav.classList.replace("navbar-dark", "navbar-light");
});
</script>
</body>

</html>