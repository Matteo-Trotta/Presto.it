<x-layout>
<x-header2 title="Registrati" />
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="m-5" method="post" action="{{route('register')}}">
                @csrf
                
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" name="name">
                      </div>

                      {{-- <div class="mb-3">
                        <label class="form-label">Cognome</label>
                        <input type="email" class="form-control" name="surname">
                      </div> --}}

                    <div class="mb-3">
                      <label class="form-label">Email address</label>
                      <input type="email" class="form-control" name="email">
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Password</label>
                      <input type="password" class="form-control" name="password">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Conferma password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                      </div>
  

                      <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-primary btnSubmit">Registrati</button>
                      </div>
                  </form>
            </div>
        </div>
    </div>
    
    
    
    
    </x-layout>