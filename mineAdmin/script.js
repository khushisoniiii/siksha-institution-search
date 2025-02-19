document.addEventListener("DOMContentLoaded", () => {
    const links = document.querySelectorAll(".sidebar ul li a");
    const sections = document.querySelectorAll(".content-section");

    links.forEach(link => {
        link.addEventListener("click", (e) => {
            e.preventDefault();
            const targetId = link.getAttribute("data-target");

            // Remove active class from all sections
            sections.forEach(section => section.classList.remove("active"));

            // Add active class to the target section
            document.getElementById(targetId).classList.add("active");
     });
});
});