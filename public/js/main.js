document.addEventListener("DOMContentLoaded", function () {
    initMobileMenu();
    initSearchModal();
    initScrollEffects();
});

// Mobile Menue Responsiveness
function initMobileMenu() {
    const mobileToggle = document.getElementById("mobileMenuToggle");
    const navMenu = document.getElementById("navMenu");

    if (mobileToggle && navMenu) {
        mobileToggle.addEventListener("click", function () {
            navMenu.classList.toggle("active");
        });

        // Close menu when clicking outside
        document.addEventListener("click", function (event) {
            if (
                !mobileToggle.contains(event.target) &&
                !navMenu.contains(event.target)
            ) {
                navMenu.classList.remove("active");
            }
        });

        // Close menu when clicking a link
        const navLinks = navMenu.querySelectorAll("a");
        navLinks.forEach((link) => {
            link.addEventListener("click", function () {
                navMenu.classList.remove("active");
            });
        });
    }
}

// Search Modal
function initSearchModal() {
    const searchBtn = document.querySelector(".search-btn");
    const searchModal = document.getElementById("searchModal");
    const searchClose = document.getElementById("searchClose");
    const searchInput = document.querySelector(".search-input");

    if (searchBtn && searchModal) {
        // Open search modal
        searchBtn.addEventListener("click", function () {
            searchModal.classList.add("active");
            if (searchInput) {
                setTimeout(() => searchInput.focus(), 100);
            }
        });

        // Close search modal
        if (searchClose) {
            searchClose.addEventListener("click", function () {
                searchModal.classList.remove("active");
            });
        }

        // Close on background click
        searchModal.addEventListener("click", function (event) {
            if (event.target === searchModal) {
                searchModal.classList.remove("active");
            }
        });

        // Close on Escape key
        document.addEventListener("keydown", function (event) {
            if (
                event.key === "Escape" &&
                searchModal.classList.contains("active")
            ) {
                searchModal.classList.remove("active");
            }
        });
    }
}

// FAQ Accordion
function initFAQAccordion() {
    console.log("Initializing FAQ Accordion");
    const faqItems = document.querySelectorAll(".faq-item");

    faqItems.forEach((item) => {
        const question = item.querySelector(".faq-question");
        if (question) {
            question.addEventListener("click", function () {
                if (answer.style.display === "block") {
                    answer.style.display = "none";
                } else {
                    answer.style.display = "block";
                }
            });
        }
    });
}
initFAQAccordion();

// Navbar below box shadow
function initScrollEffects() {
    const header = document.querySelector(".site-header");
    let lastScroll = 0;

    window.addEventListener("scroll", function () {
        const currentScroll = window.pageYOffset;

        // Add shadow to header on scroll
        if (currentScroll > 10) {
            header.style.boxShadow = "0 2px 8px rgba(0, 0, 0, 0.1)";
        } else {
            header.style.boxShadow = "";
        }

        lastScroll = currentScroll;
    });
}

// Show Notification
function showNotification(message) {
    // Create notification element
    const notification = document.createElement("div");
    notification.textContent = message;
    notification.style.cssText = `
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #10b981;
            color: white;
            padding: 1rem 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 9999;
            animation: slideIn 0.3s ease-out;
        `;

    // Add animation keyframes
    if (!document.querySelector("#notification-styles")) {
        const style = document.createElement("style");
        style.id = "notification-styles";
        style.textContent = `
                @keyframes slideIn {
                    from {
                        transform: translateX(400px);
                        opacity: 0;
                    }
                    to {
                        transform: translateX(0);
                        opacity: 1;
                    }
                }
                @keyframes slideOut {
                    from {
                        transform: translateX(0);
                        opacity: 1;
                    }
                    to {
                        transform: translateX(400px);
                        opacity: 0;
                    }
                }
            `;
        document.head.appendChild(style);
    }

    document.body.appendChild(notification);

    // Remove after 3 seconds
    setTimeout(() => {
        notification.style.animation = "slideOut 0.3s ease-in";
        setTimeout(() => {
            notification.remove();
        }, 300);
    }, 3000);
}

// Client side form validation
function validateForm(form) {
    const inputs = form.querySelectorAll(
        "input[required], textarea[required], select[required]"
    );
    let isValid = true;

    inputs.forEach((input) => {
        if (!input.value.trim()) {
            isValid = false;
            input.style.borderColor = "#ef4444";
        } else {
            input.style.borderColor = "";
        }
    });

    return isValid;
}

// Initialize form validation for contact form
const contactForm = document.querySelector(".contact-form");
if (contactForm) {
    contactForm.addEventListener("submit", function (e) {
        if (!validateForm(this)) {
            e.preventDefault();
            showNotification("Please fill in all required fields.");
        }
    });
}

// Newsletter Form Handler
const newsletterForms = document.querySelectorAll(".newsletter-form");
newsletterForms.forEach((form) => {
    form.addEventListener("submit", function (e) {
        e.preventDefault();
        const email = this.querySelector('input[type="email"]').value;

        if (email) {
            showNotification("Thank you for subscribing!");
            this.reset();
        }
    });
});

// Filter Toggle for Mobile (Products Page)
const filterToggle = document.getElementById("showFilters");
const sidebar = document.querySelector(".products-sidebar");

if (filterToggle && sidebar) {
    filterToggle.addEventListener("click", function () {
        sidebar.classList.toggle("active");
    });
}