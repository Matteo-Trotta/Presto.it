
    <div class="container my-5">
        <div class="row justify-content-center">

            <div class="col-12 col-md-8">
                <form class="m-5" method="POST" wire:submit.prevent="createArticle">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">{{ __('ui.title') }}</label>
                        <input type="text" class="form-control shadow-none" wire:model.blur="title">
                        @error('title')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">{{ __('ui.price') }}</label>
                        <input type="text" class="form-control shadow-none" wire:model.blur="price">
                        @error('price')
                            <span class="error">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="mb-3 position-relative">
                        <i class="fa-solid fa-chevron-down position-absolute"></i>
                        <label class="form-label">{{ __('ui.category') }}</label>
                        <select wire:model.blur="category" class="form-control shadow-none">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" id="{{ $category->id }}">
                                    {{ __('ui.' . $category->name) }}
                                </option>
                            @endforeach
                        </select>
                        @error('category')
                            <span class="error">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label class="form-label">{{ __('ui.description') }}</label>
                        <textarea class="form-control shadow-none" wire:model.blur="body" id="" cols="30" rows="10"></textarea>
                        @error('body')
                            <span class="error">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary btnSubmit">{{ __('ui.publishAd') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

