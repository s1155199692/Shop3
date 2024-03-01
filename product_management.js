document.getElementById('productForm').addEventListener('submit', function(event){
    event.preventDefault();

    let name = document.getElementById('name').value;
    let price = document.getElementById('price').value;
    let description = document.getElementById('description').value;

    // You can add code here to handle the form submission, such as sending data to a server or updating the page.
    alert('Product Added: ' + name + ', Price: ' + price + ', Description: ' + description);
});
