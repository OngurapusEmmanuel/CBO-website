// footer.js

document.addEventListener("DOMContentLoaded", function () {
    // Load the footer content using fetch
    fetch("footer.html")
      .then(response => response.text())
      .then(data => {
        // Insert the footer content into the <footer> element
        document.querySelector("footer").innerHTML = data;
      });
  });
  