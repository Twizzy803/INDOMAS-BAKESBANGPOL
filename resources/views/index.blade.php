@include('header')

<body>

  <div class="inpoindomas">
    <div class="px-4 pt-5 my-5 text-center border-bottom">
      <h1 class="display-4 fw-bold text-body-emphasis">Indomas</h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Website Indomas merupakan sarana untuk mendaftarkan organisasi dan memperoleh pengakuan resmi dari negara. Selain itu, website ini juga menyediakan informasi mengenai kegiatan yang sedang dilakukan oleh organisasi yang sudah terdaftar di Badan Kesatuan Bangsa dan Politik.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
          @if(!Auth::check())
          <button type="button" class="btn btn-lg px-4 me-sm-3" onclick="location.href='{{ route('site.pengajuan.request')}}'">Form Pengajuan Indomas</button>  
          @endif
          <button type="button" class="btn btn-lg px-4 me-sm-3" onclick="location.href='//drive.google.com/file/d/17WajAkNz1IHmzVxPsbR3fPPyIAg_GVAG/view?usp=sharing'">Panduan Pengajuan Indomas</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal HTML -->
  <div id="showModalData" data-show-modal="{{ session('showModal') ? '1' : '0' }}">
    <div id="jsModal" class="modal">
      <div class="modal-content">
          <span id="closeModal" class="close">&times;</span>
          <h4>Pengajuan, Legalitas dan Rencana Kerja Organisasi Masyarakat Kota Batu.</h4>
          <hr>
          <h2 style="color:#00A650">Selesai</h2>
          <p>Tunggu 3 - 4 hari untuk melakukan Login</p>
      </div>
    </div>
  </div>



  @include('media')
  @include('footer')


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('..\js\main.js')}}"></script>
</body>

</html>