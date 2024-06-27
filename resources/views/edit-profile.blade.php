<x-layout>
<x-header2
title="Modifica profilo"
/>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <!-- Visualizza l'immagine di profilo -->
                    <div class="profile-photo mt-4">
                        <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="img-thumbnail">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</x-layout>