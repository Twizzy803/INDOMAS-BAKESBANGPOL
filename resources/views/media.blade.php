<body>    
    <div class="media">
        <h1 style="font-weight: bold; text-align: center">Ormas Today</h1>
        <!-- Button trigger modal -->
@if(Auth::check())
<section class="modalMedia" style="display:flex; justify-content:center;">
<button type="button" class="btn btn-primary btn_today" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Kirim Kegiatan
  </button>
  
  <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Ormas Today</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- resources/views/cerita/create.blade.php -->
                <form class="modal-story" action="{{ route('site.createStory', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <textarea id="myeditorinstance" name="content_cerita" required></textarea><br>
                    <input type="file" name="image" required><br><br>
                    <button class="btn-post" type="submit">Post</button>
                </form>
                @endif              
          </div>
        </div>
      </div>    
  </section>
  <br>
               

        <!-- Tampilkan daftar cerita -->
        @foreach($stories as $story)
        <div class="card card-story" style="width: 45%; margin-bottom: 20px;">
            <div class="card-body card-body-story">
                <h4 class="card-text">
                    <small class="text-bold">
                        {{ $story->ormas['nama_ormas'] }}
                    </small>
                </h4>
                <p style="font-size: 12px; color: gray;"> {{ \Carbon\Carbon::parse($story['created_at'])->setTimezone('Asia/Jakarta')->translatedFormat('d F Y H:i') }}</p>
                <p class="card-text">{{ $story['cerita'] }}</p>
            </div>
            <img src="{{ asset('story/' . ($story->ormas->nama_ormas ?? 'default') . '/' . ($story->galleries->path ?? 'default-image.jpg')) }}">
        </div>
        @endforeach
    </div>
</body>

<script src="{{asset('..\js\main.js')}}"></script>

 <!-- Tampilkan pesan sukses -->
            {{-- @if (Auth::check('success'))
            <button class="notif-success"> Berhasil Upload </button>
            @endif --}}

   {{-- @if (Auth::check())
            <p>Belum ada cerita yang tersedia.</p>
        @endif --}}