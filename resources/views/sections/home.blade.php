@extends('layout.plantilla')
@section('contenido')
@include('partials.navbar')

  {{-- el grid de publicaciones --}}
  <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-6 mx-18 mt-10">
    @foreach ($posts as $post)
    <div class="flex flex-col bg-slate-200 shadow-lg border border-slate-200 rounded-lg my-4 group">
      @can('delete', $post)
        <div class="opacity-0 group-hover:opacity-100 relative gap-7 flex justify-between">
          <form  method="post"action="{{ route('posts.destroy', $post->id) }}">
            @method('DELETE')
            @csrf
          <button onclick="return confirm('¿Seguro que quieres borrar esta publicación?')" class="ml-3 cursor-pointer"
          type="submit">
          <svg width="23px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ff0000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19 9H22M19 14H22M19 19H21M16 6L15.1991 18.0129C15.129 19.065 15.0939 19.5911 14.8667 19.99C14.6666 20.3412 14.3648 20.6235 14.0011 20.7998C13.588 21 13.0607 21 12.0062 21H7.99377C6.93927 21 6.41202 21 5.99889 20.7998C5.63517 20.6235 5.33339 20.3412 5.13332 19.99C4.90607 19.5911 4.871 19.065 4.80086 18.0129L4 6M2 6H18M14 6L13.7294 5.18807C13.4671 4.40125 13.3359 4.00784 13.0927 3.71698C12.8779 3.46013 12.6021 3.26132 12.2905 3.13878C11.9376 3 11.523 3 10.6936 3H9.30643C8.47705 3 8.06236 3 7.70951 3.13878C7.39792 3.26132 7.12208 3.46013 6.90729 3.71698C6.66405 4.00784 6.53292 4.40125 6.27064 5.18807L6 6M12 10V17M8 10L7.99995 16.9998" stroke="#ff0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
          </button>
        </form>
          <span class="pt-5 px-4">Esta publicacion es tuya, {{$post->user->name}}</span>
        </div>
      @endcan
    <div class="m-2.5 overflow-hidden rounded-md h-80 flex justify-center items-center">
      <img class="w-full h-full object-cover" src="{{$post->foto}}" />
    </div>
    <div class="p-6 text-center">
      <p class="text-base text-slate-600 mt-4 font-light">
      {{ $post->descripcion }}
      </p>
    </div>

    </div>
  @endforeach
  </div>

@endsection