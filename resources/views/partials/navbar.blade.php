
<nav
class="block w-full max-w-screen-lg px-4 py-2 mx-auto bg-gray-900 bg-opacity-95 sticky top-3 shadow-lg lg:px-8 lg:py-3 backdrop-blur-lg backdrop-saturate-150 z-[9999] rounded-xl">
<div class="container flex flex-wrap items-center justify-between mx-auto text-gray-200">
<a href="/" class="mr-4 block cursor-pointer py-1.5 text-base text-white font-semibold">
  Mini Insta 📸
</a>
<div class="block">
  <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
  <li class="flex items-center p-1 text-lg gap-x-2 text-yellow-400">
    <a href="{{ route('posts.misposts', auth()->user()->id) }}">Posts de {{ auth()->user()->name }}</a>
</li>
  <li class="flex items-center p-1 text-lg gap-x-2 text-green-400">
    <a href="{{ route('posts.create', auth()->user()->id) }}" class="flex items-center hover:text-green-300">Subir
    publicación</a>
  </li>
  <li class="flex items-center p-1 text-sm gap-x-2 text-red-400">
    <a href="{{route('logout.destroy')}}" class="hover:text-red-300">
        <svg width="35px" height="35px" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M11.75 9.874C11.75 10.2882 12.0858 10.624 12.5 10.624C12.9142 10.624 13.25 10.2882 13.25 9.874H11.75ZM13.25 4C13.25 3.58579 12.9142 3.25 12.5 3.25C12.0858 3.25 11.75 3.58579 11.75 4H13.25ZM9.81082 6.66156C10.1878 6.48991 10.3542 6.04515 10.1826 5.66818C10.0109 5.29121 9.56615 5.12478 9.18918 5.29644L9.81082 6.66156ZM5.5 12.16L4.7499 12.1561L4.75005 12.1687L5.5 12.16ZM12.5 19L12.5086 18.25C12.5029 18.25 12.4971 18.25 12.4914 18.25L12.5 19ZM19.5 12.16L20.2501 12.1687L20.25 12.1561L19.5 12.16ZM15.8108 5.29644C15.4338 5.12478 14.9891 5.29121 14.8174 5.66818C14.6458 6.04515 14.8122 6.48991 15.1892 6.66156L15.8108 5.29644ZM13.25 9.874V4H11.75V9.874H13.25ZM9.18918 5.29644C6.49843 6.52171 4.7655 9.19951 4.75001 12.1561L6.24999 12.1639C6.26242 9.79237 7.65246 7.6444 9.81082 6.66156L9.18918 5.29644ZM4.75005 12.1687C4.79935 16.4046 8.27278 19.7986 12.5086 19.75L12.4914 18.25C9.08384 18.2892 6.28961 15.5588 6.24995 12.1513L4.75005 12.1687ZM12.4914 19.75C16.7272 19.7986 20.2007 16.4046 20.2499 12.1687L18.7501 12.1513C18.7104 15.5588 15.9162 18.2892 12.5086 18.25L12.4914 19.75ZM20.25 12.1561C20.2345 9.19951 18.5016 6.52171 15.8108 5.29644L15.1892 6.66156C17.3475 7.6444 18.7376 9.79237 18.75 12.1639L20.25 12.1561Z" fill="#ff0000"></path> </g></svg>    </a>
  </li>
  </ul>
</div>
</div>
</nav>
