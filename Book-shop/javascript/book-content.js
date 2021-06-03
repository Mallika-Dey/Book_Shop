const fun = (i) => {
    return (e) => {
        let add="../php/book-content.php?id=" + book_id[i].textContent + " &category=" + book_type[i].textContent;
        window.location = add;
    }
}
let book = document.querySelectorAll('.set-background img');
let book_id = document.querySelectorAll('#hidden');
let book_type = document.querySelectorAll('#hidden1');

for (var i = book.length - 1; i >= 0; i--) {
    book[i].addEventListener('click', fun(i), false);
}