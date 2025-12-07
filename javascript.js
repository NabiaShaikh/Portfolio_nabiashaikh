    // Initialize AOS animation library
    AOS.init({
      duration: 1000,
      once: true,
      mirror: false
    });

    // DOM Elements
    const header = document.getElementById('header');
    const navLinks = document.getElementById('navLinks');
    const menuToggle = document.getElementById('menuToggle');
    const themeToggle = document.getElementById('themeToggle');
    const scrollTop = document.getElementById('scrollTop');
    const contactForm = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const messageSuccess = document.getElementById('messageSuccess');
    const messageError = document.getElementById('messageError');
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    // Mobile Menu Toggle
    menuToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      menuToggle.innerHTML = navLinks.classList.contains('active') 
        ? '<i class="fas fa-times"></i>' 
        : '<i class="fas fa-bars"></i>';
    });

    // Close mobile menu when clicking a link
    document.querySelectorAll('.nav-link').forEach(link => {
      link.addEventListener('click', () => {
        navLinks.classList.remove('active');
        menuToggle.innerHTML = '<i class="fas fa-bars"></i>';
      });
    });

    // Theme Toggle (Dark/Light Mode)
    const getCurrentTheme = () => localStorage.getItem('theme') || 'light';
    
    const setTheme = (theme) => {
      document.body.classList.toggle('dark', theme === 'dark');
      localStorage.setItem('theme', theme);
      themeToggle.innerHTML = theme === 'dark' 
        ? '<i class="fas fa-sun"></i>' 
        : '<i class="fas fa-moon"></i>';
    };
    
    // Initialize theme from localStorage
    setTheme(getCurrentTheme());
    
    themeToggle.addEventListener('click', () => {
      const currentTheme = getCurrentTheme();
      const newTheme = currentTheme === 'light' ? 'dark' : 'light';
      setTheme(newTheme);
    });

    // Scroll to top button visibility
    window.addEventListener('scroll', () => {
      // Header shadow on scroll
      if (window.scrollY > 100) {
        header.classList.add('header-scrolled');
      } else {
        header.classList.remove('header-scrolled');
      }
      
      // Scroll to top button visibility
      if (window.scrollY > 500) {
        scrollTop.classList.add('active');
      } else {
        scrollTop.classList.remove('active');
      }
    });

    // Scroll to top functionality
    scrollTop.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });

    // Active navigation based on scroll position
    const sections = document.querySelectorAll('section');
    const navItems = document.querySelectorAll('.nav-link');

    window.addEventListener('scroll', () => {
      let current = '';
      
      sections.forEach(section => {
        const sectionTop = section.offsetTop - 100;
        const sectionHeight = section.clientHeight;
        
        if (window.scrollY >= sectionTop) {
          current = section.getAttribute('id');
        }
      });
      
      navItems.forEach(item => {
        item.classList.remove('active');
        if (item.getAttribute('href').substring(1) === current) {
          item.classList.add('active');
        }
      });
    });

    // Contact Form Submission
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();
      
      // Show loading state
      submitBtn.innerHTML = '<div class="loader"></div>';
      submitBtn.disabled = true;
      
      // Hide any previous messages
      messageSuccess.style.display = 'none';
      messageError.style.display = 'none';
      
      // Simulate form submission with a timeout
      setTimeout(() => {
        // Simulate successful submission
        submitBtn.innerHTML = '<span>Send Message</span>';
        submitBtn.disabled = false;
        messageSuccess.style.display = 'block';
        
        // Reset form
        contactForm.reset();
        
        // Hide success message after 5 seconds
        setTimeout(() => {
          messageSuccess.style.display = 'none';
        }, 5000);
      }, 1500);
    });

    // Projects filtering
    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        // Remove active class from all buttons
        filterBtns.forEach(b => b.classList.remove('active'));
        
        // Add active class to clicked button
        btn.classList.add('active');
        
        // Get filter value
        const filter = btn.getAttribute('data-filter');
        
        // Filter projects
        projectCards.forEach(card => {
          if (filter === 'all' || card.getAttribute('data-category') === filter) {
            card.style.display = 'block';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });