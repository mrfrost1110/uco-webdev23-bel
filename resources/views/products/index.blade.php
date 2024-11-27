<x-template title='Home'>
    <div class="row" style="margin: 10pt 20pt 0pt 20pt">
        <div class="col-12 col-md-12 text-end mb-3">
            <button class="btn btn-secondary" type="button" onclick="window.location.href='{{ route('products.form') }}'">Create +</button>
        </div>
        @foreach ($products as $item)
            <div class="col-3 mb-3 d-flex">
                <a href="{{ route('products.show', $item['id']) }}" style="text-decoration:none; color:black;">
                    <div class="card h-100" style="position: relative;">
                        <img src="{{ asset('assets/products/' . $item['subCategory'] . '/' . $item['name'] . '/1.jpg') }}"
                            class="card-img-top"
                            alt="Product Image"
                            onerror="this.onerror=null;this.src='https://fastly.picsum.photos/id/468/350/350.jpg?hmac=4jGTGKUJEby3tFz0qbVu3WGj1yrH6k2JZVcnjAIkAz0';">
                        <div class="card-body">
                            <p style="color:gray; font-size:8pt"> {{$item['category']}} </p>
                            <h5 class="card-title" style="font-size:10pt">{{ $item['subCategory'] . ' ' . $item['name'] }}</h5>
                            <p class="card-text" style="font-size: 10pt; color:red;">
                                {{ 'Rp. ' . $item['price'] }}
                                <span style="color: gray"><s>
                                   {{ 'Rp. ' . ($item['price'] * (100 - $item['disc'] / 100)) }}
                                </s></span>
                                <span style="color: black"> {{$item['disc'] . '%'}} </span>
                            </p>
                        </div>
                        <!-- Button to Edit -->
                        <div style="position: absolute; bottom: 10px; right: 10px;">
                            <a href="{{ route('products.edit', $item['id']) }}" class="btn btn-sm btn-primary">Edit</a>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</x-template>
