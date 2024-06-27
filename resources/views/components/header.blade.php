<div class="container-fluid bgHomeImage vh-50"  style="background-image: url('img/cart_home.jpg')">
    <div class="row h-100">
        <div class="col-12 d-flex justify-content-center ">
            <h1 class="text-center display-1 titolo expletus fw-bold  ">{{$title ?? ''}}</h1>
        </div>
        <div class="col-12 d-flex colHeight align-items-end align-self-end mb-2 overflow-auto">
            @foreach ($categories as $category)
            <button class="btnSubmit mt-0 me-1">{{$category->name}}</button>
            @endforeach
        </div>
    </div>
</div>