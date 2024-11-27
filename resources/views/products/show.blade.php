<x-template title={{ $product['subCategory'] . $product['name']}}>
    <div>
        <img src={{{{ asset('assets/products/' . $product['subCategory'] . '/' . $product['name'] . '/1.jpg') }}}}>
    </div>
</x-template>
