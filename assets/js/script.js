document.addEventListener("DOMContentLoaded", function () {
    console.log("JobFinder Frontend جاهز 100%");

    const heroText = "ابحث عن وظيفتك المثالية الآن";
    let i = 0;
    const typingElement = document.querySelector(".typing-effect");
    if (typingElement) {
        function typeWriter() {
            if (i < heroText.length) {
                typingElement.innerHTML += heroText.charAt(i);
                i++;
                setTimeout(typeWriter, 100);
            }
        }
        setTimeout(typeWriter, 500);
    }

    const cards = document.querySelectorAll(".job-card");
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.style.transform = "translateY(0)";
            }
        });
    });

    cards.forEach((card) => {
        card.style.opacity = 0;
        card.style.transform = "translateY(30px)";
        card.style.transition = "all 0.6s ease";
        observer.observe(card);
    });
});

document.querySelector(".companies .content .search input").addEventListener("input", function () {
    document.querySelectorAll(".companies .content .companies .company-card").forEach(company => {
        company.style.display = company.querySelector("h3").innerText.toLowerCase().includes(this.value.toLowerCase()) ? "block" : "none";
    });
});