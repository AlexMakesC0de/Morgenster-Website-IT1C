var current = null;
document.querySelector('#email').addEventListener('focus', function() {
    if (current) current.pause();
    current = anime({
        targets: 'path',
        strokeDashoffset: {
            value: 0,
            duration: 700,
            easing: 'easeOutQuart'
        },
        strokeDasharray: {
            value: '240 1386',
            duration: 700,
            easing: 'easeOutQuart'
        }
    });
});

document.querySelector('#password').addEventListener('focus', function() {
    if (current) current.pause();
    current = anime({
        targets: 'path',
        strokeDashoffset: {
            value: -336,
            duration: 700,
            easing: 'easeOutQuart'
        },
        strokeDasharray: {
            value: '240 1386',
            duration: 700,
            easing: 'easeOutQuart'
        }
    });
});

document.querySelector('#submit').addEventListener('focus', function() {
    if (current) current.pause();
    current = anime({
        targets: 'path',
        strokeDashoffset: {
            value: -730,
            duration: 700,
            easing: 'easeOutQuart'
        },
        strokeDasharray: {
            value: '530 1386',
            duration: 700,
            easing: 'easeOutQuart'
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
    // Your animation code here
});

// Optional: Reapply animation after DOM updates (if needed)
document.addEventListener('click', (event) => {
    if (event.target.matches('a[href*="mode"]')) {
        setTimeout(() => {
            // Reinitialize animation here if needed
        }, 100); // Adjust timeout based on DOM update speed
    }
});
