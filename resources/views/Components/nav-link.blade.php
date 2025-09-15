 @props(['active'=>false])
 
 <a class=" {{ $active ? 'bg-green-400':'bg-red-500' }} rounded-md px-3 py-2 " {{ $attributes }} aria-current="$active ? 'page':'false'"> {{ $slot }} </a>
                               