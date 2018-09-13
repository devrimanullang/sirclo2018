# Data Structure - Shopping Cart #

Buat sebuah `Software Library` Shopping Cart yang harus memilik fungsi:

1. `void tambahProduk(string kodeProduk, int kuantitas)`
 - Menambahkan produk dengan kuantitas yang ditentukan.
 - Apabila produk sudah ada di dalam Cart, tambahkan kuantitasnya.

2. `void hapusProduk(string kodeProduk)`
 - Menghapus produk dari Cart.

3. `void tampilkanCart()`
 - Menampilkan isi Cart dengan format `{kodeProduk}` (`{kuantitas}`)

Buatlah class `Cart` berikut feature code dan unit testnya.

---
Sebagai contoh gunakan skenario di bawah:

```
Cart keranjang = new Cart();

keranjang.tambahProduk("Topi Putih", 2);

keranjang.tambahProduk("Kemeja Hitam", 3);

keranjang.tambahProduk("Sepatu Merah", 1);
keranjang.tambahProduk("Sepatu Merah", 4);
keranjang.tambahProduk("Sepatu Merah", 2);

keranjang.hapusProduk("Kemeja Hitam");

keranjang.hapusProduk("Baju Hijau");

keranjang.tampilkanCart();
```

Output:
```
Topi Putih (2)
Sepatu Merah (7)
```
