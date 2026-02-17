// Fitness Page JavaScript
document.addEventListener('DOMContentLoaded', function() {
    
    // Add smooth scroll behavior
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Enhanced card hover effects
    const cards = document.querySelectorAll('.fitness-card');
    
    cards.forEach(card => {
        // Add parallax effect on mouse move
        card.addEventListener('mousemove', function(e) {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateX = (y - centerY) / 30;
            const rotateY = (centerX - x) / 30;
            
            const cardImage = card.querySelector('.card-image');
            cardImage.style.transform = `scale(1.1) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
        });
        
        // Reset on mouse leave
        card.addEventListener('mouseleave', function() {
            const cardImage = card.querySelector('.card-image');
            cardImage.style.transform = 'scale(1)';
        });

        // Add click handler for cards (optional - redirect to detail pages)
        card.addEventListener('click', function() {
            const title = card.querySelector('.card-title').textContent.toLowerCase().replace(/\//g, '-');
            // Uncomment to enable navigation
            // window.location.href = `${title}-details.php`;
            console.log(`Clicked on ${title} card`);
        });
    });

    // Lazy load images for better performance
    const images = document.querySelectorAll('.card-image');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.classList.add('loaded');
                observer.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));

    // Add loading animation when page loads
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        },
        { threshold: 0.1 }
    );

    cards.forEach(card => observer.observe(card));
});

// Add scroll-based animations
window.addEventListener('scroll', function() {
    const cards = document.querySelectorAll('.fitness-card');
    
    cards.forEach(card => {
        const rect = card.getBoundingClientRect();
        const isVisible = rect.top < window.innerHeight && rect.bottom > 0;
        
        if (isVisible) {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }
    });
});