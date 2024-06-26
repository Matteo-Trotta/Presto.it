<x-layout>
    <x-header2 title="Dashboard revisore"/>

   
    <div class="container-fluid">
@if ($articles_to_check->isEmpty())
<div class="row justify-content-center align-items-center height-custom text-center">
    <div class="col-12">
        <h1 class="fst-italic display-5 mt-5">
            Nessun articolo da revisionare
        </h1>
        <a href="{{ route('home') }}" class="mt-5 btn btnSubmit"> Torna all'homepage</a>
    </div>
</div>

@else


        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-10 ">

        
                
                <table class="table table-striped rounded-table col-12 col-md-10   border shadow">
                     
                    <thead>
                        <tr >
                            <th class="expletus fw-bold fs-4 text-center " scope="col">Id</th>
                            <th class="expletus fw-bold fs-4 text-center" scope="col">Titolo</th>
                            <th class="expletus fw-bold fs-4 text-center" scope="col">Prezzo</th>
                            <th class="expletus fw-bold fs-4 text-center" scope="col">Categoria</th>

                            <th class="expletus fw-bold fs-4 text-center" scope="col">Utente</th>
                            <th class="expletus fw-bold fs-4 text-center" scope="col">Data</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="rounded-table">
                      
                        @foreach ($articles_to_check as $article)
                        
                            <tr>
                                
                                <th class="fs-6 varela text-center align-middle " scope="row">{{$article->id}}</th>
                               
                                    <td class="fs-6 varela text-center align-middle "> {{$article->title}}</td>
                                
                                <td class="fs-6 varela text-center align-middle ">{{$article->price}} €</td>
                                <td class="fs-6 varela text-center align-middle ">{{$article->category->name}}</td>

                                <td class="fs-6 varela text-center align-middle ">{{ Auth::user()->name }}</td>
                                <td class="fs-6 varela text-center align-middle ">{{$article->created_at->format('d M Y')}}</td>
                                <td class="fs-6 varela text-center align-middle "><a href="{{route('revisor.show', compact('article'))}}"><button class="btnSubmit m-0">Revisiona</button></a></td>
                            
                            
                            </tr>
                        
                        @endforeach
                       
                        {{-- <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr> --}}
                    </tbody>
                </table>
            
            </div>
        </div>
         @endif
    </div>

                
              
           

</x-layout>