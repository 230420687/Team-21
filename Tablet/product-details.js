
// Get the product ID from the URL
const urlParams = new URLSearchParams(window.location.search);
const productId = parseInt(urlParams.get("id"));

// Check if productId exists
if (productId) {
    const product = products.find((p) => p.id === productId);
    if (product) {
        // Populate the product details
        document.getElementById("product-details").innerHTML = `
            <h1>${product.title}</h1>
            <img src="${product.image}" alt="${product.title}" class="product-image">
            <p class="product-description">${product.description}</p>
            <p class="product-price">Price: ${product.price}</p>
            <button class="add-button">Add to Basket</button>
        `;
    } else {
        // Display error if product is not found
        document.getElementById("product-details").innerHTML = `<p>Product not found!</p>`;
    }
} else {
    document.getElementById("product-details").innerHTML = `<p>No product selected!</p>`;
}