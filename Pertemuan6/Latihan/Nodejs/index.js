// File: index.js

// --- DATA & RUMUS ---
const namaToko = "Toko Serba Ada";
const hargaBuku = 5000;
const hargaPensil = 2000;

function hitungTotal(jmlBuku, jmlPensil) {
    return (jmlBuku * hargaBuku) + (jmlPensil * hargaPensil);
}

function cetakStruk(total) {
    console.log("=== " + namaToko + " ===");
    console.log("Total Belanja: Rp " + total);
    console.log("Terima Kasih!");
}

// --- EKSEKUSI UTAMA ---
const tagihan = hitungTotal(2, 3);
cetakStruk(tagihan);
