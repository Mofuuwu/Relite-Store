    document.addEventListener("DOMContentLoaded", function () {
        const paymentHeaders = document.querySelectorAll(".payment-header");
        const paymentContainers = document.querySelectorAll(".payment-card-container");
        const paymentCards = document.querySelectorAll(".payment-card");
        const ionIcons = document.querySelectorAll("ion-icon");
        const contentCards = document.querySelectorAll(".content-card");

        contentCards.forEach((card) => {
            card.addEventListener("click", function () {
                contentCards.forEach((otherCard) => {
                    otherCard.classList.remove("active");
                });
                card.classList.add("active");
            });
        });

        paymentHeaders.forEach((header, index) => {
            header.addEventListener("click", function () {
                if (paymentContainers[index].style.display === "flex") {
                    paymentContainers[index].style.display = "none";
                    header.classList.remove("active");
                } else {
                    paymentContainers[index].style.display = "flex";
                    header.classList.add("active");
                }

            });
        });


        paymentCards.forEach((card) => {
            card.addEventListener("click", function (event) {
                event.stopPropagation(); // Mencegah event click header menutup elemen card
                paymentCards.forEach((otherCard) => {
                    otherCard.classList.remove("active");
                });
                card.classList.add("active");
            });
        });

        // Sembunyikan semua payment-card-container saat halaman dimuat
        paymentContainers.forEach((container) => {
            container.style.display = "none";
        });
    });
