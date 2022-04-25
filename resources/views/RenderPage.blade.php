<x-app-layout>
    @section('meta_info')
        <title>{{ $activetheme }} EShopper - Bootstrap Shop Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">
    @endsection
    @include('alertMsg')
    
    <x-dynamic-component :component="$activeTheme" :data="$data" class="mt-4" />

</x-app-layout>