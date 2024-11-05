    const searchInput = document.getElementById("search-input");
    const cards = document.querySelectorAll(".card");

    // Tambahkan event listener untuk input pencarian
    searchInput.addEventListener("input", function () {
        const searchText = searchInput.value.toLowerCase(); // Dapatkan teks pencarian dalam huruf kecil

        // Loop melalui semua elemen card
        cards.forEach(function (card) {
            const title = card.querySelector("h2").textContent.toLowerCase(); // Dapatkan teks judul dalam huruf kecil

            // Periksa apakah teks judul mengandung teks pencarian
            if (title.includes(searchText)) {
                card.style.display = "block"; // Tampilkan card jika cocok
            } else {
                card.style.display = "none"; // Sembunyikan card jika tidak cocok
            }
        });
    });


window.onload = function () {
    tampilkanGame(); 
    hideRatingContainer();
    hideAllComment();
};

function tampilkanGame() {
    document.getElementById("nav-game").style.backgroundColor = "#413685";
    document.getElementById("nav-apk").style.backgroundColor = "#281e50";
    document.getElementById("game").style.display = "flex";
    document.getElementById("aplikasi").style.display = "none";
}

function tampilkanAplikasi() {
    document.getElementById("nav-game").style.backgroundColor = "#281e50";
    document.getElementById("nav-apk").style.backgroundColor = "#413685";
    document.getElementById("game").style.display = "none";
    document.getElementById("aplikasi").style.display = "flex";
}

// function showRatingContainer() {
//     const ratingContainer = document.querySelector('.tambah-rating-container');
//     ratingContainer.style.display = 'flex';
// }

// function hideRatingContainer() {
//     const ratingContainer = document.querySelector('.tambah-rating-container');
//     ratingContainer.style.display = 'none';
// }


// document.getElementById('add-ratings').addEventListener('click', showRatingContainer);


// function handleStarRating(starIndex) {
//     const stars = document.querySelectorAll('.kasih-rating ion-icon');
//     for (let i = 0; i < stars.length; i++) {
//         if (i < starIndex) {
//             stars[i].style.color = 'yellow'; 
//         } else {
//             stars[i].style.color = 'white'; 
//         }
//     }
// }

// document.getElementById('send-rating-button').addEventListener('click', hideRatingContainer);
const containerPromo = document.querySelector('.container-promo');
    const iconSpan = document.querySelector('.icon-size');

    containerPromo.addEventListener('scroll', function() {
        if (containerPromo.scrollHeight - containerPromo.scrollTop === containerPromo.clientHeight) {
            iconSpan.classList.add('rotate-icon');
        } else {
            iconSpan.classList.remove('rotate-icon');
        }
    });

iconSpan.addEventListener('click', function() {
    // Posisi scroll saat ini
    const currentPosition = containerPromo.scrollTop;
    
    // Tinggi dari seluruh konten dalam container
    const scrollHeight = containerPromo.scrollHeight;
    
    // Tinggi dari container yang terlihat
    const clientHeight = containerPromo.clientHeight;

    // Jika pengguna sudah di bagian akhir, arahkan scroll ke atas
    if (currentPosition + clientHeight >= scrollHeight) {
        containerPromo.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    } else {
        // Jika belum, arahkan scroll ke bawah
        containerPromo.scrollTo({
            top: scrollHeight,
            behavior: 'smooth'
        });
    }
});
const scrollGamemarket = document.querySelector(".gm-row");
let isDown = false;
let startX;
let scrollLeft;

scrollGamemarket.addEventListener('mousedown', (e) => {
    isDown = true;
    startX = e.pageX - scrollGamemarket.offsetLeft;
    scrollLeft = scrollGamemarket.scrollLeft;
})

scrollGamemarket.addEventListener('mouseleave', () => {
    isDown = false;
})

scrollGamemarket.addEventListener('mouseup', () => {
    isDown = false;
})

scrollGamemarket.addEventListener('mousemove', (e) => {
    if (!isDown) return; 
    e.preventDefault();
    const x = e.pageX - scrollGamemarket.offsetLeft;
    const walk = (x - startX);
    scrollGamemarket.scrollLeft = scrollLeft - walk;
})

function hideAllComment () {
    document.getElementById("comment-all").style.display = "none";
}
function displayAllComment() {
    document.getElementById("comment-all").style.display = "block";
}

const gmsgPhotoContainer = document.querySelector(".gmsg-photo-container");
let isDownf = false;
let startXf;
let scrollLeftf;

gmsgPhotoContainer.addEventListener('mousedown', (e) => {
    isDownf = true;
    startXf = e.pageX - gmsgPhotoContainer.offsetLeft;
    scrollLeftf = gmsgPhotoContainer.scrollLeft;
})

gmsgPhotoContainer.addEventListener('mouseleave', () => {
    isDownf = false;
})

gmsgPhotoContainer.addEventListener('mouseup', () => {
    isDownf = false;
})

gmsgPhotoContainer.addEventListener('mousemove', (e) => {
    if (!isDownf) return; 
    e.preventDefault();
    const x = e.pageX - gmsgPhotoContainer.offsetLeft;
    const walk = (x - startXf);
    gmsgPhotoContainer.scrollLeft = scrollLeftf - walk;
})

// let photos = document.querySelectorAll('.photo img');
// let bgp = document.querySelector('.gm-see-game-container')
//         photos.forEach(function(photo) {
//             photo.addEventListener('click', function() {
//                 if (!this.classList.contains('zoomed')) {
//                     // Buat duplikat gambar
//                     let clonedImage = this.cloneNode();
//                     clonedImage.classList.add('zoomed');
//                     // Sisipkan duplikat ke dalam body
//                     document.body.appendChild(clonedImage);
//                 } else {
//                     // Hapus duplikat gambar jika sudah diperbesar
//                     document.querySelector('.zoomed').remove();
//                 }
//             });
//         });

//         // Menutup gambar ketika area di luar gambar diperbesar diklik
//         document.body.addEventListener('click', function(event) {
//             let zoomedImage = document.querySelector('.zoomed');
//             if (zoomedImage && !zoomedImage.contains(event.target)) {
//                 zoomedImage.remove();
//             }
//         });


let gsmgdisplay = document.querySelector('.gm-see-game-wrapper')

function displayAccountGame() {
    gsmgdisplay.style.display = "flex"
}
function closeAccountGame() {
    gsmgdisplay.style.display = "none"
}
        

