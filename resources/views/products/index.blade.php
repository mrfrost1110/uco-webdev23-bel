<x-template title='Home'>


    <div class="row" style="margin: 10pt 20pt 0pt 20pt">
        <div class="col-12 col-md-12 text-end mb-3">
            <button class="btn btn-secondary" type="button" onclick="window.location.href='{{ route('products.create') }}'">Create +</button>

        </div>
        @foreach ($products as $item)
            <div class="col-3 mb-3 d-flex">
                <a href="{{ route('products.show', $item['id']) }}" style="text-decoration:none; color:black;">
                    <div class="card h-100">
                        <img src="{{ asset('assets/products/' . $item['subCategory'] . '/' . $item['name'] . '/1.jpg') }}"
                            class="card-img-top" alt="Image">
                        <div class="card-body">
                            <p style="color:gray; font-size:8pt"> {{$item['category']}} </p>
                            <h5 class="card-title" style="font-size:10pt">{{ $item['subCategory'] . ' ' . $item['name'] }}</h5>
                            <p class="card-text" style="font-size: 10pt; color:red;" > {{ 'Rp. ' . $item['price']}} <span style="color: gray"><s>
                               {{'Rp. ' . ($item['price']*(100-$item['disc']/100))}} </s></span> <span style="color: black"> {{$item['disc'] . '%'}} </span> </p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</x-template>
