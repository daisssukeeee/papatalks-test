<button type="submit" class="stylish-button">{{ $text }}</button>

<style>
.stylish-button {
    background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s, transform 0.3s;
}

.stylish-button:hover {
    background-image: linear-gradient(to left, #6a11cb 0%, #2575fc 100%);
    transform: scale(1.05);
}
</style>