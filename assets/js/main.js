document.addEventListener("DOMContentLoaded", function () {

    const header = document.querySelector(".pml-header");

    if (header) {

        window.addEventListener("scroll", function () {

            if (window.scrollY > 20) {

                header.classList.add("is-scrolled");

            } else {

                header.classList.remove("is-scrolled");

            }

        });

    }

});

document.addEventListener("DOMContentLoaded", function () {

    /*
    |--------------------------------------------------------------------------
    | Technical Expertise Interaction
    |--------------------------------------------------------------------------
    */

    const expertiseSection =
        document.querySelector(".pml-expertise-section");

    if (expertiseSection) {

        const focusItems =
            expertiseSection.querySelectorAll("[data-focus]");

        const techItems =
            expertiseSection.querySelectorAll("[data-tech]");

        function clearFocus() {

            expertiseSection
                .querySelectorAll(".is-focused")
                .forEach(function (item) {

                    item.classList.remove("is-focused");

                });

        }

        function activateFocus(value) {

            clearFocus();

            expertiseSection
                .querySelectorAll(
                    '[data-focus="' + value + '"], ' +
                    '[data-tech="' + value + '"]'
                )
                .forEach(function (item) {

                    item.classList.add("is-focused");

                });

        }


        focusItems.forEach(function (item) {

            item.addEventListener("mouseenter", function () {

                activateFocus(
                    item.getAttribute("data-focus")
                );

            });

            item.addEventListener("mouseleave", function () {

                clearFocus();

            });

        });


        techItems.forEach(function (item) {

            item.addEventListener("mouseenter", function () {

                activateFocus(
                    item.getAttribute("data-tech")
                );

            });

            item.addEventListener("mouseleave", function () {

                clearFocus();

            });

        });

    }

});
