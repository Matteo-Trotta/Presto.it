
<div class="container my-5">
    <div class="row justify-content-center">
        
        <div class="col-12 col-md-8">
            <form class="m-5" method="POST" wire:submit.prevent="createArticle">
                @csrf
                
                <div class="mb-3">
                    <label class="form-label">{{ __('ui.title') }}</label>
                    <input type="text" class="form-control shadow-none" wire:model.blur="title">
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label class="form-label">{{ __('ui.price') }}</label>
                    <input type="text" class="form-control shadow-none" wire:model.blur="price">
                    @error('price')
                    <span class="text-danger">{{ $message }}</span>
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
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    
                </div>
                <div class="mb-3">
                    <input type="file" wire:model.live="temporary_images" multiple
                    class="form-control shadow @error('temporary_images.*') is-invalid @enderror">
                    @error('temporary_images.*')
                   <p class="text-danger">{{$message}}</p>
                   @enderror
                   @error('temporary_images')
                   <p class="text-danger">{{$message}}</p>
                   @enderror
                    @if (!empty($images)) 
                    <div class="row">
                        <div class="col-12">
                            <p>Photo preview:</p>
                            <div class="row  border-success rounded shadow py-4">
                                @foreach ($images as $key=> $image)
                                <div class="col d-flex flex-column align-items-center my-3">
                                    <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}});">
                        
                                    </div>
                                    <button type="button" class="btn mt-1 btn-danger" wire:click="removeImage({{$key}})">X</button>
                                </div>
                        
                                @endforeach
                        
                            </div>
                        </div>
                    </div>
                    
                </div>
                @endif
                <div class="mb-3">
                    <label class="form-label">{{ __('ui.description') }}</label>
                    <textarea class="form-control shadow-none" wire:model.blur="body" id="" cols="30" rows="5"></textarea>
                    @error('body')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    
                </div>
                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-primary btnSubmit">{{ __('ui.publishAd') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

