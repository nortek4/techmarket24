export function initCardClickEvents() {
    let card = document.querySelectorAll('.card');
    card.forEach(card => {
        card.addEventListener('click', () => {
            alert('glorp');
        });
    });
}
export function headerOnScroll() {
    const headerFixed = document.getElementById('header-fixed');
    const header = document.getElementById('header');
    if (window.scrollY > 20) {
        header.style.display = 'none';
    } else {
        header.style.display = 'flex';
    }
    
    if (window.scrollY > 20) {
        headerFixed.style.display = 'flex';
    } else {
        headerFixed.style.display = 'none';
    }
}