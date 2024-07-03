<x-layout>
    <x-header2 title="{{ __('ui.signUp') }}" />
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="m-5" method="post" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <div class="d-flex align-items-center">
                            <label class="me-5">{{ __('ui.selectImg') }}:</label>
                            <label for="profile_photo" class="btnSubmit ms-auto d-flex justify-content-start shadow-none mt-2">{{ __('ui.addProfilePhoto') }}</label>
                        </div>
                        <input style="visibility:hidden;" id="profile_photo" type="file" name="profile_photo" multiple
                        class="form-control shadow @error('images.*') is-invalid @enderror">
                        @error('images.*')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        @error('images')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        <div id="preview" class="row border-success "></div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">{{ __('ui.name') }}</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label">{{ __('ui.emailAddress') }}</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label">{{ __('ui.password') }}</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label">{{ __('ui.confirmPassword') }}</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="mb-3 text-center">
                        <button type="submit" class="btnSubmit">{{ __('ui.signUp') }}</button>
                    </div>
                    <div class="text-center mt-5">
                        <p>{{ __('ui.alreadyRegistered') }} <a href="{{ route('login') }}">{{ __('ui.login') }}</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>

<script>
    document.getElementById('profile_photo').addEventListener('change', function(event) {
        const files = event.target.files;
        const preview = document.getElementById('preview');
        preview.innerHTML = '';
        Array.from(files).forEach(file => {
            const reader = new FileReader();
            reader.onload = function(e) {
                const imgDiv = document.createElement('div');
                imgDiv.classList.add('col', 'd-flex', 'flex-column', 'align-items-center', 'my-3');
                imgDiv.innerHTML = `
                    <div class=" rounded shadow py-4 mt-3 bgColorThree img-preview mx-auto position-relative z-1" style="background-image: url(${e.target.result});">
                        <button type="button" class="btn px-1 py-0 mt-1 me-1 m-0 btn-outline-danger position-absolute end-0 top-0 z-2" onclick="removeImage(this)"><i class="fa-solid fa-x"></i></button>
                    </div>`;
                preview.appendChild(imgDiv);
            };
            reader.readAsDataURL(file);
        });
    });

    function removeImage(button) {
        const div = button.closest('.col');
        div.remove();
    }
</script>
