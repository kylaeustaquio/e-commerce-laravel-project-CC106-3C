<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
    <link rel="stylesheet" href="<?php echo e(url('CSS/order.css')); ?>" />
</head>
<body>
    <div class="container">
        <h1>Clothing Order Form</h1>
        <form>
            <label for="orderName">Order Name:</label>
            <input type="text" id="orderName" name="orderName" required>


            <label for="category">Category:</label>
            <select id="category" name="category" required>
                <option value="">Select Category</option>
                <option value="New Arrival">New Arrival</option>
                <option value="Formal Attire">Formal Attire</option>
                <option value="Youngs Favourite">Youngs Favourite</option>
                <option value="Dresses">Dresses</option>
            </select>

            <label for="size">Size:</label>
            <select id="size" name="size" required>
                <option value="">Select Size</option>
                <option value="XS">Extra Small</option>
                <option value="XS">Small</option>
                <option value="M">Medium</option>
                <option value="L">Large</option>
            </select>

        
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" required min="0" step="1" class="no-spinner">
            </div>
            

            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <button type="submit">Submit Order</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\Users\Kyla\Herd\e-commerceproject\resources\views/livewire/auth/auth-order.blade.php ENDPATH**/ ?>