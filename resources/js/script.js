// ==============================
// DARK MODE
// ==============================

const btnTheme = document.getElementById("btn-theme");
const body = document.body;

if (localStorage.getItem("theme") === "dark") {
    body.classList.add("dark-mode");
    btnTheme.innerText = "Mode Terang";
}

btnTheme.addEventListener("click", function () {

    body.classList.toggle("dark-mode");

    if (body.classList.contains("dark-mode")) {
        localStorage.setItem("theme", "dark");
        btnTheme.innerText = "Mode Terang";
    } else {
        localStorage.removeItem("theme");
        btnTheme.innerText = "Mode Gelap";
    }

});


// ==============================
// FITUR BELI
// ==============================

function aktifkanTombolBeli() {

    const tombol = document.querySelectorAll(".btn-detail");

    tombol.forEach(function (button) {

        button.addEventListener("click", function (e) {

            const card = e.target.closest(".card-body");

            const stokElement = card.querySelector(".stok-text");

            let stok = parseInt(
                stokElement.innerText.replace("Stok: ", "")
            );

            if (stok > 0) {

                stok--;

                stokElement.innerText = "Stok: " + stok;

                const nama = card.querySelector(".card-title").innerText;

                alert("Berhasil membeli " + nama);

            } else {

                alert("Stok Habis");

            }

        });

    });

}

aktifkanTombolBeli();


// ==============================
// WISHLIST
// ==============================

let wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];

function updateWishlistCount() {

    document.getElementById("wishlist-count").innerText = wishlist.length;

}

updateWishlistCount();


const tombolWishlist = document.querySelectorAll(".btn-wishlist");

tombolWishlist.forEach(function (button) {

    button.addEventListener("click", function (e) {

        const card = e.target.closest(".card-body");

        const nama = card.querySelector(".card-title").innerText;

        if (!wishlist.includes(nama)) {

            wishlist.push(nama);

            localStorage.setItem(
                "wishlist",
                JSON.stringify(wishlist)
            );

            updateWishlistCount();

            alert(nama + " ditambahkan ke wishlist");

        } else {

            alert("Sudah ada di wishlist");

        }

    });

});


function tampilkanWishlist() {

    const list = document.getElementById("wishlist-list");

    list.innerHTML = "";

    wishlist.forEach(function (item, index) {

        list.innerHTML += `
            <li class="list-group-item d-flex justify-content-between">
                ${item}
                <button class="btn btn-danger btn-sm" onclick="hapusWishlist(${index})">
                    Hapus
                </button>
            </li>
        `;

    });

}


function hapusWishlist(index) {

    wishlist.splice(index, 1);

    localStorage.setItem(
        "wishlist",
        JSON.stringify(wishlist)
    );

    updateWishlistCount();

    tampilkanWishlist();

}