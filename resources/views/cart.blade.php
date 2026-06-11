<h1>Keranjang Belanja</h1>

<a href="/">← Kembali ke Produk</a>

<hr>

@if($cart && count($cart) > 0)

    @foreach($cart as $id => $item)
        <div style="margin-bottom: 10px;">
            <strong>{{ $item['name'] }}</strong><br>
            Harga: Rp {{ $item['price'] }}<br>
            Jumlah: {{ $item['qty'] }}<br>

            <a href="/cart/remove/{{ $id }}">Hapus</a>
        </div>
        <hr>
    @endforeach

@else
    <p>Keranjang kosong 😢</p>
@endif