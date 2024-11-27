<x-template title="Create">
    <div class="form-container">
        <form action="{{ route('products.update', $product['id']) }}" method="POST" enctype="multipart/form-data" onsubmit="return validateInput()">
            @csrf
            @method('PUT')
            <label for="id">Enter ID (5 characters, letters and numbers only)</label>
            <input type="text" id="id" name="id" maxlength="5" placeholder="{{$product['id']}}" readonly>

            <br><br>

            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="{{$product['name']}}">

            <br><br>

            <label for="price">Price</label>
            <input type="number" id="price" name="price" step="0.01" placeholder="{{$product['price']}}">

            <br><br>

            <label for="disc">Discount (%)</label>
            <input type="number" id="disc" name="disc" min="0" max="100" step="0.1" placeholder="{{$product['disc']}}">

            <br><br>

            <label for="category">Category</label>
            <input type="text" id="category" name="category" placeholder="{{$product['category']}}">

            <br><br>

            <label for="suCategory">Subcategory</label>
            <select id="subCategory" name="subCategory">
                <option value="">{{$product['subCategory']}}</option>
                <option value="POLO SHIRT">POLO SHIRT</option>
                <option value="SANDALS">SANDALS</option>
                <option value="SEPATU">SEPATU</option>
                <option value="SHORTS">SHORTS</option>
                <option value="SKIRT">SKIRT</option>
                <option value="SOCKS">SOCKS</option>
                <option value="TAS">TAS</option>
                <option value="TRACK TOP">TRACK TOP</option>
                <option value="T-SHIRT">T-SHIRT</option>
            </select>

            <br><br><br>

            <button type="submit" class="submit-btn">Save Changes</button>
        </form>
    </div>

    <script>
        function validateInput() {
            var input = document.getElementById("id").value;

            // Disc Checker
            var discount = document.getElementById("discount").value;
            if (discount < 0 || discount > 100) {
                alert("Discount must be between 0 and 100.");
                return false; // Mencegah form disubmit
            }

            // Name Checker
            var name = document.getElementById("name").value.trim();
            if (name === "") {
                alert("Name cannot be emptys.");
                return false; // Mencegah form disubmit
            }

            return true; // Form akan disubmit jika validasi berhasil
        }
    </script>

    <style>
        .form-container {
            width: 600px; /* Lebar form lebih besar */
            margin: 0 auto;
            padding: 20px;
            border: 2px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
            position: relative; /* Untuk meletakkan tombol submit di kanan bawah */
            font-size: 10pt; /* Ukuran font menjadi 10pt */
        }

        .form-container label {
            font-weight: bold;
        }

        .form-container input, .form-container select {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container input:invalid {
            border-color: red;
        }

        .form-container input:valid {
            border-color: green;
        }

        .submit-btn {
            width: auto;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            position: absolute;
            right: 10px;
            bottom: 10px;
        }

        .submit-btn:hover {
            background-color: #45a049;
        }
    </style>
</x-template>
