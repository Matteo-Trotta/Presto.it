<x-layout>

    <x-header2
    title="Profilo"
    />
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-6">
            <img src="{{ Auth::user()->profile_photo_url }}" alt="" class="rounded-circle border shadow my-5" >
        </div>
        <div class="col-6 text-center my-5">
            <h1 >{{ Auth::user()->name }}</h1>
            <h2>{{ Auth::user()->email }}</h2>

        </div>

        <div> <a href="{{ route('profile.edit') }}" class="btn btnSubmit">Modifica Profilo</a></div>
    </div>
</div>

</x-layout>