/* Card Carosell Section */
const wrapper = document.getElementById("sliderWrapper");
        let cards = document.querySelectorAll(".card");
        const nextBtn = document.getElementById("nextBtn");
        const prevBtn = document.getElementById("prevBtn");
        const dotsContainer = document.getElementById("dots");

        let index = 0;
        let autoSlide;
        let cardsPerView = 4;
        let totalCards = cards.length;

        // Clone cards for seamless infinite loop
        function cloneCards() {
            // Remove old clones if any
            document.querySelectorAll('.card.clone').forEach(clone => clone.remove());

            cards = document.querySelectorAll(".card"); // refresh

            // Clone first few cards and append at the end
            for (let i = 0; i < cardsPerView; i++) {
                const clone = cards[i].cloneNode(true);
                clone.classList.add('clone');
                wrapper.appendChild(clone);
            }

            // Clone last few cards and prepend at the beginning
            for (let i = totalCards - cardsPerView; i < totalCards; i++) {
                const clone = cards[i].cloneNode(true);
                clone.classList.add('clone');
                wrapper.prepend(clone);
            }

            cards = document.querySelectorAll(".card"); // update list
        }

        function getCardsPerView() {
            if (window.innerWidth <= 576) return 1;
            if (window.innerWidth <= 991) return 2;
            return 4;
        }

        function updateSlider(smooth = true) {
            cardsPerView = getCardsPerView();
            const cardWidth = cards[0].offsetWidth + 20; // gap is 20px

            wrapper.style.transition = smooth ? 'transform 0.6s ease-in-out' : 'none';
            wrapper.style.transform = `translateX(-${(index + cardsPerView) * cardWidth}px)`;
        }

        function createDots() {
            dotsContainer.innerHTML = "";
            for (let i = 0; i < totalCards; i++) {
                const dot = document.createElement("div");
                dot.classList.add("dot");
                dot.addEventListener("click", () => {
                    index = i;
                    updateSlider();
                    restartAuto();
                });
                dotsContainer.appendChild(dot);
            }
        }

        function updateDots() {
            const dots = document.querySelectorAll(".dot");
            dots.forEach((dot, i) => {
                dot.classList.toggle("active", i === index % totalCards);
            });
        }

        function nextSlide() {
            index++;
            updateSlider();
            updateDots();

            // Reset to beginning when we reach the cloned cards
            if (index >= totalCards) {
                setTimeout(() => {
                    index = 0;
                    updateSlider(false); // jump without animation
                }, 600);
            }
        }

        function prevSlide() {
            index--;
            updateSlider();
            updateDots();

            // Reset when going before the first real card
            if (index < 0) {
                setTimeout(() => {
                    index = totalCards - 1;
                    updateSlider(false);
                }, 600);
            }
        }

        function startAuto() {
            autoSlide = setInterval(nextSlide, 5000);
        }

        function stopAuto() {
            clearInterval(autoSlide);
        }

        function restartAuto() {
            stopAuto();
            startAuto();
        }

        // Event Listeners
        nextBtn.addEventListener("click", () => {
            nextSlide();
            restartAuto();
        });

        prevBtn.addEventListener("click", () => {
            prevSlide();
            restartAuto();
        });

        document.querySelector(".slider-container").addEventListener("mouseenter", stopAuto);
        document.querySelector(".slider-container").addEventListener("mouseleave", startAuto);

        window.addEventListener("resize", () => {
            cardsPerView = getCardsPerView();
            cloneCards(); // re-clone on resize
            updateSlider(false);
            createDots();
            updateDots();
        });

        // Initialize
        window.onload = () => {
            cloneCards();
            cardsPerView = getCardsPerView();
            createDots();
            updateSlider(false); // initial position (no animation)
            startAuto();
        };