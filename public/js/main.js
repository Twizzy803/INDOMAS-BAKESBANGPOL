document.addEventListener("DOMContentLoaded", function () {
    const showModalData = document.getElementById("showModalData");
    const modal = document.getElementById("jsModal");
    const closeModalBtn = document.getElementById("closeModal");

    // Ambil nilai dari data-show-modal
    const showModal = showModalData
        ? showModalData.getAttribute("data-show-modal") === "1"
        : false;

    // Jika session showModal bernilai true, tampilkan modal
    if (showModal) {
        modal.style.display = "block";
    }

    // Ketika tombol "X" (close) ditekan, sembunyikan modal
    closeModalBtn.onclick = function () {
        modal.style.display = "none";
    };

    // Jika pengguna mengklik di luar modal, tutup modal
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
});

function uploadForm() {
    // Cek apakah file telah dipilih
    var fotoInput = document.getElementById("jsFoto");
    if (fotoInput.files.length > 0) {
        // Jika ada file, kirim form
        document.getElementById("uploadForm").submit();
    }
}

// Ketika tombol 'Pilih Foto' diklik, input file akan muncul
document.getElementById("uploadBtn").addEventListener("click", function () {
    document.getElementById("foto").click(); // Klik input file
});

// Ketika foto dipilih, ubah teks tombol menjadi nama file yang dipilih
document.getElementById("foto").addEventListener("change", function (event) {
    const fileName = event.target.files[0].name;
    document.getElementById("uploadBtn").textContent =
        "File Terpilih: " + fileName;
});
