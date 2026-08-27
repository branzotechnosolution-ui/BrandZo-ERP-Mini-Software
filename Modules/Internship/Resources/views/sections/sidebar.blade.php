@if (in_array('internship', user_modules()) || in_array('Internship', user_modules()))
    <x-menu-item icon="mortarboard" :text="__('Internship')" :link="route('interns.index')">
        <x-slot name="iconPath">
            <path d="M8.211 2.247a.5.5 0 0 1 .578 0l6 4a.5.5 0 0 1 0 .826l-6 4a.5.5 0 0 1-.578 0l-6-4a.5.5 0 0 1 0-.826l6-4zM2.4 6.5 8 10.233 13.6 6.5 8 2.767 2.4 6.5z"/>
            <path d="M3.5 8.5v3.293l4.146 2.764a.5.5 0 0 0 .708 0l4.146-2.764V8.5h1v3.5a1 1 0 0 1-.447.832l-4.5 3a1 1 0 0 1-1.106 0l-4.5-3A1 1 0 0 1 3 12V8.5h.5z"/>
        </x-slot>
    </x-menu-item>
@endif
