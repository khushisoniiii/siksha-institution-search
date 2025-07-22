document.addEventListener("DOMContentLoaded", function() {
    const stars = document.querySelectorAll(".star-rating i");
    let ratingValue = 0;

    stars.forEach(star => {
        star.addEventListener("click", function() {
            ratingValue = this.getAttribute("data-value");
            document.getElementById("rating").value = ratingValue;
            document.getElementById("rating-text").innerText = "You rated: " + ratingValue + " stars";

            // Highlight selected stars
            stars.forEach(s => {
                s.classList.remove("selected");
                if (s.getAttribute("data-value") <= ratingValue) {
                    s.classList.add("selected");
                }
            });
        });
    });
});

function submitRating() {
    let rating = document.getElementById("rating").value;
    if (rating > 0) {
        alert("Your rating: " + rating + " stars has been saved!");
    } else {
        alert("Please select a rating.");
    }
}
