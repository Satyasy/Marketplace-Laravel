// Mobile menu toggle
document.addEventListener("DOMContentLoaded", function () {
    const mobileMenuButton = document.getElementById("mobile-menu-button");
    const mobileMenu = document.getElementById("mobile-menu");

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener("click", function () {
            mobileMenu.classList.toggle("hidden");
        });
    }

    // Product quantity selector
    const quantityInputs = document.querySelectorAll(".quantity-input");

    quantityInputs.forEach((input) => {
        const minusBtn = input.parentElement.querySelector(".quantity-minus");
        const plusBtn = input.parentElement.querySelector(".quantity-plus");

        if (minusBtn && plusBtn) {
            minusBtn.addEventListener("click", function () {
                let value = parseInt(input.value);
                if (value > 1) {
                    input.value = value - 1;
                }
            });

            plusBtn.addEventListener("click", function () {
                let value = parseInt(input.value);
                input.value = value + 1;
            });
        }
    });

    // Add to cart animation
    const addToCartButtons = document.querySelectorAll(
        ".add-to-cart-btn, .bg-primary.text-light.p-2.rounded-full"
    );

    addToCartButtons.forEach((button) => {
        button.addEventListener("click", function (e) {
            e.preventDefault();

            // Create a floating cart icon animation
            const cart = document.querySelector(".fa-shopping-cart");
            const productCard =
                this.closest(".card") ||
                this.closest(".bg-white.rounded-lg.shadow-md");
            const productImg = productCard?.querySelector("img");

            if (cart && productImg) {
                const imgClone = productImg.cloneNode(true);
                const imgPos = productImg.getBoundingClientRect();
                const cartPos = cart.getBoundingClientRect();

                imgClone.style.position = "fixed";
                imgClone.style.left = imgPos.left + "px";
                imgClone.style.top = imgPos.top + "px";
                imgClone.style.width = imgPos.width + "px";
                imgClone.style.height = imgPos.height + "px";
                imgClone.style.opacity = "0.75";
                imgClone.style.zIndex = "1000";
                imgClone.style.transition = "all 0.5s ease-in-out";
                imgClone.style.borderRadius = "8px";

                document.body.appendChild(imgClone);

                setTimeout(() => {
                    imgClone.style.left = cartPos.left + "px";
                    imgClone.style.top = cartPos.top + "px";
                    imgClone.style.width = "30px";
                    imgClone.style.height = "30px";
                    imgClone.style.opacity = "0";
                    imgClone.style.borderRadius = "50%";
                }, 100);

                setTimeout(() => {
                    document.body.removeChild(imgClone);

                    // Show cart notification
                    const cartNotification = document.querySelector(
                        ".absolute.-top-2.-right-2"
                    );
                    if (cartNotification) {
                        cartNotification.classList.add("animate-bounce");
                        setTimeout(() => {
                            cartNotification.classList.remove("animate-bounce");
                        }, 1000);
                    }
                }, 600);
            }
        });
    });
});
