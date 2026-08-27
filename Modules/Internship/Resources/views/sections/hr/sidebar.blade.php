@if (in_array('internship', user_modules()) || in_array('Internship', user_modules()))
    <x-sub-menu-item :link="route('interns.index')" :text="__('Internship')" />
@endif
