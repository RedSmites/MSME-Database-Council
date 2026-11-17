const menuButton = document.querySelector('.menu-button');
const sidebar = document.querySelector('#sidebar');
const search = document.querySelector('#enterprise-search');
const rows = Array.from(document.querySelectorAll('#enterprise-list tr'));
const noResults = document.querySelector('#no-results');
const enterpriseCount = document.querySelector('#enterprise-count');

menuButton.addEventListener('click', () => {
    const isOpen = sidebar.classList.toggle('is-open');
    menuButton.setAttribute('aria-expanded', String(isOpen));
    menuButton.setAttribute('aria-label', isOpen ? 'Close navigation' : 'Open navigation');
});

sidebar.querySelectorAll('.nav-link').forEach((link) => {
    link.addEventListener('click', () => {
        sidebar.classList.remove('is-open');
        menuButton.setAttribute('aria-expanded', 'false');
        menuButton.setAttribute('aria-label', 'Open navigation');
    });
});

search.addEventListener('input', () => {
    const query = search.value.trim().toLowerCase();
    let visible = 0;

    rows.forEach((row) => {
        const matches = row.textContent.toLowerCase().includes(query);
        row.hidden = !matches;
        if (matches) visible += 1;
    });

    noResults.hidden = visible > 0;
    enterpriseCount.textContent = `Showing ${visible} sample ${visible === 1 ? 'enterprise' : 'enterprises'}`;
});
