// ============================================
// 1. FITUR DARK MODE (LocalStorage & DOM)
// ============================================
const btnTheme = document.getElementById('btn-theme');
const body = document.body;

if (localStorage.getItem('theme') === 'dark') {
    body.classList.add('dark-mode');
    btnTheme.innerText = "Mode Terang";
}

btnTheme.addEventListener('click', function() {
    body.classList.toggle('dark-mode');

    if (body.classList.contains('dark-mode')) {
        localStorage.setItem('theme', 'dark');
        btnTheme.innerText = "Mode Terang";
    } else {
        localStorage.removeItem('theme');
        btnTheme.innerText = "Mode Gelap";
    }
});


// ============================================
// 2. FITUR BELI
// ============================================
function aktifkanTombolBeli() {

    const tombolBeli = document.querySelectorAll('.btn-detail');

    tombolBeli.forEach(function(button) {

        button.replaceWith(button.cloneNode(true));

    });

    const tombolBaru = document.querySelectorAll('.btn-detail');

    tombolBaru.forEach(function(button) {

        button.addEventListener('click', function(e) {

            const cardBody = e.target.closest('.card-body');
            const stokElement = cardBody.querySelector('.stok-text');

            let stok = parseInt(stokElement.innerText.replace("Stok: ", ""));

            if (stok > 0) {
                stok--;
                stokElement.innerText = "Stok: " + stok;

                const namaBarang = cardBody.querySelector('.card-title').innerText;
                alert("Berhasil membeli " + namaBarang);

                if (stok === 0) {
                    e.target.disabled = true;
                    e.target.innerText = "Habis";
                }

            } else {
                alert("Stok Habis!");
                e.target.disabled = true;
                e.target.innerText = "Habis";
            }
        });

    });
}

aktifkanTombolBeli();

// ============================================
// 3. FITUR WISHLIST (LocalStorage + Hapus Item)
// ============================================

let wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];

const wishlistCount = document.getElementById("wishlist-count");
const daftarWishlist = document.getElementById("daftar-wishlist");

// Update jumlah wishlist
function updateWishlistCount() {
    wishlistCount.innerText = wishlist.length;
}

// Render isi wishlist ke modal
function renderWishlist() {
    daftarWishlist.innerHTML = "";

    if (wishlist.length === 0) {
        daftarWishlist.innerHTML = "<li class='list-group-item'>Wishlist kosong</li>";
        return;
    }

    wishlist.forEach(function(item, index) {

        const li = document.createElement("li");
        li.classList.add("list-group-item", "d-flex", "justify-content-between", "align-items-center");

        li.innerHTML = `
            ${item}
            <button class="btn btn-sm btn-danger btn-hapus" data-index="${index}">
                ❌
            </button>
        `;

        daftarWishlist.appendChild(li);
    });

    // Aktifkan tombol hapus setelah render
    aktifkanTombolHapus();
}

// Tambah ke wishlist
function aktifkanWishlist() {

    const tombolWishlist = document.querySelectorAll('.btn-wishlist');

    tombolWishlist.forEach(function(button) {

        button.addEventListener('click', function(e) {

            const cardBody = e.target.closest('.card-body');
            const namaBarang = cardBody.querySelector('.card-title').innerText;

            if (!wishlist.includes(namaBarang)) {
                wishlist.push(namaBarang);
                localStorage.setItem("wishlist", JSON.stringify(wishlist));
                updateWishlistCount();
                alert(namaBarang + " ditambahkan ke wishlist");
            } else {
                alert("Produk sudah ada di wishlist");
            }
        });

    });
}

// Fungsi hapus per item
function aktifkanTombolHapus() {

    const tombolHapus = document.querySelectorAll('.btn-hapus');

    tombolHapus.forEach(function(button) {

        button.addEventListener('click', function() {

            const index = this.getAttribute("data-index");

            wishlist.splice(index, 1);
            localStorage.setItem("wishlist", JSON.stringify(wishlist));

            updateWishlistCount();
            renderWishlist();
        });

    });
}

// Kosongkan semua
function hapusWishlist() {
    wishlist = [];
    localStorage.removeItem("wishlist");
    updateWishlistCount();
    renderWishlist();
}

aktifkanWishlist();
updateWishlistCount();

// Render saat modal dibuka
const wishlistModal = document.getElementById("wishlistModal");
wishlistModal.addEventListener("shown.bs.modal", function () {
    renderWishlist();
});