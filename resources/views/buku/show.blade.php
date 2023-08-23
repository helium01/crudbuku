@extends('buku.core')
@section('content')

                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                    <!-- 404 Error Text -->
                    <div class="text-center">
                        <div class="error mx-auto" data-text="{{$buku->judul}}">{{$buku->judul}}</div>
                        <p class="lead text-gray-800 mb-5">{{$buku->tahun_terbit}}</p>
                        <p class="text-gray-500 mb-0">{{$buku->pengarang}}</p>
                        <p class="text-gray-500 mb-0">{{$buku->deskripsi}}</p>
                        <a href="/buku">← Back to Buku</a>
                    </div>

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
</div>

        @endsection