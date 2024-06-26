<x-layout>
<x-header2
title="Lavora con noi"
/>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <form class="m-5" method="get" action="{{route('become.revisor')}}" >
            @csrf
            
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" name="name">
                  </div>
                  @error('name')
                  <span class="text-danger">{{ $message }}</span>
              @enderror

                

                <div class="mb-3">
                  <label class="form-label">Email address</label>
                  <input type="email" class="form-control" name="email">
                </div>
                @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror

            <div class="mb-3">
                <label class="form-label">Testo della tua richiesta</label>
               <textarea class="form-control" name="body" id="body" cols="20" rows="10"></textarea>
              </div>

                

         
       
                  <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary btnSubmit">Invia richiesta</button>
                  </div>
                
              </form>
        </div>
    </div>
</div>



</x-layout>