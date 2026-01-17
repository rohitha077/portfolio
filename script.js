document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();
    alert("Form submitted successfully!");
});
if(name.value === "" || email.value === "") {
    alert("All fields required");
    return;
}
