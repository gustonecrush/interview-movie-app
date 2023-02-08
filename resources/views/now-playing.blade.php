@extends('layouts.app', [
    'title' => 'Now Playing',
])

@section('content')
    <div class="grid grid-cols-2 gap-5 xl:gap-12 overflow-x-scroll">
        @foreach ($responseBody as $item)
            <div class="col-span-1 relative overflow-hidden group">
          <img
            src={{ 'https://image.tmdb.org/t/p/original' . $item->backdrop_path }}
            class="object-cover rounded-[30px]"
            alt=""
          />
          <div
            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px] rounded-br-[28px] z-10 translate-y-0 group-hover:translate-y-[300px] transition ease-in-out duration-500 group-hover:bg-transparent"
          >
            <div class="px-7 pb-7">
              <div class="font-medium text-xl text-white">
                {{ $item->original_title }}
              </div>
              <p class="mb-0 text-stream-gray text-base mt-[10px]">2022</p>
            </div>
          </div>
          <div
            class="absolute top-1/2 left-1/2 -translate-y-[500px] group-hover:-translate-y-1/2 -translate-x-1/2 z-20 transition ease-in-out duration-500"
          >
            <img src="assets/images/ic_play.svg" class="" width="80" alt="" />
          </div>
          <a
            href="dashboard-movie_details.html"
            class="inset-0 absolute z-50"
          ></a>
        </div>
        @endforeach
  
      </div>
@endsection