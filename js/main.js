
let home = document.getElementById("home-btn")
let adopt = document.getElementById("adopt-btn")
let shop = document.getElementById("shop-btn")
let volunteer = document.getElementById("volunteer-btn")
let whoWeAre = document.getElementById("who-we-are-btn")
let signin = document.getElementById("sign-in-btn")
let signup = document.getElementById("go-to-sign-up")


home.addEventListener("click", function() {
    window.location.href = "index.html";
})

adopt.addEventListener("click", function() {
    window.location.href = "adopt.html";
})

shop.addEventListener("click", function() {
    window.location.href = "shop.html";
})

volunteer.addEventListener("click", function() {
    window.location.href = "volunteer.html";
})

whoWeAre.addEventListener("click", function() {
    window.location.href = "whoWeAre.html";
})

signin.addEventListener("click", function() {
    window.location.href = "signin.html";
})

signup.addEventListener("click", function() {
    window.location.href = "signup.html";
})
